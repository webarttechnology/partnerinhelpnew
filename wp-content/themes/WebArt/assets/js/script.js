

$('.custom-counter').counterUp({
    delay: 10,
    time: 2000
});


function updateButton() {
    const checkboxes = document.querySelectorAll('input[name="interests[]"]:checked');
    const selected = Array.from(checkboxes).map(cb => `<span class="selected">${cb.parentNode.textContent.trim()}</span>`);
    const button = document.getElementById('dropdownButton');
    button.innerHTML = selected.length > 0 ? selected.join(' ') : 'Select your areas of interest';
}



// $(document).ready(function(){

//     var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
//     removeItemButton: true,
//     maxItemCount:3,
//     searchResultLimit:5,
//     renderChoiceLimit:5
//     });
   
   
//     });

// function updateButton() {
//     const checkboxes = document.querySelectorAll('input[name="interests[]"]:checked');
//     const selected = Array.from(checkboxes).map(cb => cb.parentNode.textContent.trim());
//     const button = document.getElementById('dropdownButton');
//     button.textContent = selected.length > 0 ? selected.join(', ') : 'Select your areas of interest';
// }