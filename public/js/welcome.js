const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active1");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active1");
});