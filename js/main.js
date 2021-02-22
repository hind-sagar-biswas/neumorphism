//SELECTORS
const nameInput = document.getElementById('nameInp');
const nameDisplay = document.getElementById('contactName');
const clock = document.getElementById('clockDisplay');

//FUNCTIONS
function updateName() {
	if(nameInput.value != '') {
		nameDisplay.innerHTML = ', ' + nameInput.value.split(' ')[0];
	}else {
		nameDisplay.innerHTML = '';
	}
}

function displayTime(){

	var currentTime = new Date(); //Initializing current time
	var hours = currentTime.getHours(); //Initializing current hour
	var minutes = currentTime.getMinutes(); //Initializing current minute
	var seconds = currentTime.getSeconds(); //Initializing current seconds
	var meridiem = "AM"; //Set default value for meridiem

	if(hours > 12){
		hours = hours - 12;
		meridiem = "PM";
	}

	if(hours === 0){
		hours = 12;
	}
	if(hours < 10){
		hours = "0" + hours;
	}
	if(minutes < 10){
		minutes = "0" + minutes;
	}
	if (seconds < 10) {
		seconds = "0" + seconds;
	}

	clock.innerHTML = hours + ":" + minutes + ":" + seconds + " " + meridiem;
}

//Main Flow
clock.style.color = "grey";

//INVOKES
setInterval(displayTime, 500);
