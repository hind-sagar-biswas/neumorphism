//SELECTORS
const nameInput = document.getElementById('nameInp');
const nameDisplay = document.getElementById('contactName');

//FUNCTIONS
function updateName() {
  nameDisplay.innerHTML = ', ' + nameInput.value;
}
