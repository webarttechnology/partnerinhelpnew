jQuery(document).ready(function($) {
	jQuery(function () {
		function validateUserNameField($input) {
			let nameValue = $input.val();
			// Clean input
			nameValue = nameValue.replace(/[^a-zA-Z\s]/g, '');
			nameValue = nameValue.replace(/\s{2,}/g, ' ');
			nameValue = nameValue.replace(/^\s+/, '');
			if (!nameValue.endsWith(' ')) {
				nameValue = nameValue.trim();
			}
			if (nameValue.length > 50) {
				nameValue = nameValue.substring(0, 50);
			}
			$input.val(nameValue);
			// Validation check
			const alphaMatch = nameValue.match(/[a-zA-Z]/g) || [];
			const existingError = $input.siblings('.custom-error-message');

			if (alphaMatch.length < 2) {
				if (existingError.length === 0) {
					const errorMessage = jQuery('<span class="custom-error-message">Please enter at least two characters.</span>');
					$input.after(errorMessage);
				}
			} else {
				existingError.remove();
			}
		}
		jQuery('#userName')
			.on('input', function () {
			validateUserNameField(jQuery(this));
		})
			.on('blur', function () {
			validateUserNameField(jQuery(this));
		});
	});
	// 	name validation end 



	jQuery('.mailv, .newsletterEmail').on('input', function () {
		let emailValue = jQuery(this).val();
		emailValue = emailValue.replace(/[^a-zA-Z0-9@._+-]/g, '');
		let atCount = (emailValue.match(/@/g) || []).length;
		if (atCount > 1) {
			emailValue = emailValue.replace(/@+/g, '@');
			emailValue = emailValue.replace(/^([^@]*)@([^@]*)$/, '$1@$2');
		}
		jQuery(this).val(emailValue);
	});

	const errorMessage = jQuery('<span class="wpcf7-not-valid-tip errorMessage">Please enter a valid number</span>');
	jQuery('#userPhone').on('keyup', function () {
		const phoneValue = jQuery(this).val().replace(/\D/g, '').slice(0, 10);
		jQuery(this).val(phoneValue);
	});


	jQuery('#userPhone').on('blur', function () {
		const phoneValue = jQuery(this).val();
		const phoneField = jQuery(this);
		const submitButton = jQuery('.contactBtn');

		// Use a unique error element
		const existingError = phoneField.next('.phone-error-message');

		if (phoneValue.length < 10) {
			if (!existingError.length) {
				const errorMessage = jQuery('<span class="phone-error-message" style="color: #dc3232; display: block; margin-top: 5px;">Please enter a valid number</span>');
				phoneField.after(errorMessage);
			}
			submitButton.prop('disabled', true);
			console.log('Phone error showing');
		} else {
			existingError.remove();
			submitButton.prop('disabled', false);
			console.log('Phone error removed');
		}
	});


	jQuery("#userMessage").on("input", function () {
		let inputValue = jQuery(this).val();
		let updatedValue = inputValue.replace(/^\s+/, "").replace(/\s{2,}/g, " ");
		jQuery(this).val(updatedValue);
	});	

});