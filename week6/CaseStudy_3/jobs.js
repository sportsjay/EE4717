// input form
let username = "",
  email = "";

let checkUsername = document.getElementById("isCheckUsername"),
  checkEmail = document.getElementById("isCheckEmail"),
  checkDate = document.getElementById("isCheckDate");

// add event listener
const usernameForm = document.querySelector("input[name='fullname']");
usernameForm.addEventListener("input", (event) => {
  console.log(event);
  onChangeUsername();
});

const emailForm = document.querySelector("input[name='email']");
emailForm.addEventListener("input", (event) => {
  console.log(event);
  onChangeEmail();
});

const dateForm = document.querySelector("input[type='date']");
dateForm.addEventListener("input", (event) => {
  console.log(event);
  onChangeDate();
});

// validator function
function validateUsername(username) {
  let pattern = /^[a-zA-Z]$/;
  return pattern.test(username);
}

function validateEmail(email) {
  let pattern = /^[a-zA-Z-.]+@(\w{2,4}+\.){2,4}\w{2,3}$/;
  return pattern.test(email);
}

function validateDate(date) {
  let today = new Date(Date.now());
  today.setDate(today.getDate());

  if (Date.parse(date) > Date.parse(today)) return true;
  return false;
}

function onChangeUsername() {
  username = document.getElementById("fullname").value;
  if (validateUsername(username)) checkUsername.innerHTML = "&#10004";
  else checkUsername.innerHTML = "X";
}

function onChangeEmail() {
  email = document.getElementById("email").value;
  if (validateEmail(email)) checkEmail.innerHTML = "&#10004";
  else checkEmail.innerHTML = "X";
}

function onChangeDate() {
  date = document.querySelector("input[type='date']").value;
  if (validateDate(date)) checkDate.innerHTML = "&#10004";
  else {
    checkDate.innerHTML = "X";
    document.querySelector("input[type='date']").value = null;
  }
}

// submit function
function onSubmitForm(event) {}
