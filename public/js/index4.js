var signUp = document.querySelector(".signUpButton");
var signIn = document.querySelector(".signInButton");
var signInForm = document.querySelector("#sign-in-form");
var signUpForm = document.querySelector("#sign-up-form");

signUp.addEventListener("click",  function onClick() {
 signUpForm.classList.remove("hidden");
 signInForm.classList.add("hidden");
});
signIn.addEventListener("click",  function onClick() {
 signUpForm.classList.add("hidden");
 signInForm.classList.remove("hidden");
});

