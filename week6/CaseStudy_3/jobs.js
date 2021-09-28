// validator function
function validateUsername(username) {
  let pattern = /\w+/;
  return pattern.test(username);
}

function validateEmail(email) {
  let pattern = /^[a-zA-Z-.]+@(\w+\.){2,4}\w{2,3}$/;
  return pattern.test(email);
}

function validateDate(date) {
  let today = new Date(Date.now());
  today.setDate(today.getDate() + 1);

  if (Date.parse(date) > Date.parse(today)) return true;
  return false;
}

// input form
let username = "",
  email = "";
function onChangeUsername() {
  username = document.getElementById("fullname").value;
  if (validateUsername(username)) alert("username is valid!");
  else alert("username is invalid!");
}

function onChangeEmail() {
  email = document.getElementById("email").value;
  if (validateEmail(email)) alert("email is valid!");
  else alert("email is invalid!");
}

function onChangeDate() {
  date = document.querySelector("input[type='date']").value;
  if (validateDate(date)) alert("date is valid!");
  else {
    alert("date is invalid!");
    document.querySelector("input[type='date']").value = null;
  }
}

// submit function
function onSubmitForm(event) {}
