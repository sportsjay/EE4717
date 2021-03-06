<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>JavaJam Coffee House - Jobs</title>
  <link rel="stylesheet" href="jobs.css" />
  <!-- <script type="text/javascript" src="jobs.js"></script> -->
</head>

<body>
  <div class="body">
    <header class="content-header">
      <img src="assets/javalogo.gif" alt="JavaJam Coffee" class="header-image" />
    </header>
    <div class="content-body">
      <nav>
        <a href="index.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="music.php">Music</a>
        <a href="jobs.php">Jobs</a>
      </nav>
      <section class="content-wrapper">
        <div class="content-body-header">
          <h1>Jobs at JavaJam</h1>
          <p>
            Want to work at JavaJam? Fill out th eform below to start your
            application. Reuired fields are marked with an asterisk *
          </p>
        </div>
        <section class="content-body-content">
          <form enctype="multipart/form-data" class="form" name="jobForm">
            <div>
              <label>*Name: </label>
              <input type="text" name="fullname" id="fullname" placeholder="Enter your name here" required />
              <span id="isCheckUsername"></span>
            </div>
            <div>
              <label>*E-mail: </label>
              <input name="email" id="email" placeholder="Enter your Email-ID here" required />
              <span id="isCheckEmail"></span>
            </div>
            <div>
              <label>Start Date: </label>
              <input type="date" name="date" id="date" />
              <span id="isCheckDate"></span>
            </div>
            <div>
              <label>*Experience: </label>
              <textarea placeholder="Enter your past experience here" name="experience" rows="4" cols="40"
                required></textarea>
            </div>
            <input type="reset" class="reset-button" />
            <input type="submit" class="submit-button" value="Apply Now" name="Apply Now" />
          </form>
        </section>
      </section>
    </div>
    <footer class="content-footer">
      <p>Copyright &copy; 2014 JavaJam Coffee House</p>
      <p>
        <a href="mailto:jason@nathaniel.com"><i>jason@nathaniel.com</i></a>
      </p>
    </footer>
  </div>
  <script>
  // input form
  let username = "",
    email = "";

  const checkUsername = document.getElementById("isCheckUsername"),
    checkEmail = document.getElementById("isCheckEmail"),
    checkDate = document.getElementById("isCheckDate");

  // add event listener
  const usernameForm = document.querySelector("input[name='fullname']");
  usernameForm.addEventListener("input", (event) => {
    if (validateUsername(event.target.value))
      checkUsername.innerHTML = "&#10004";
    else checkUsername.innerHTML = "X";
  });

  const emailForm = document.querySelector("input[name='email']");
  emailForm.addEventListener("input", (event) => {
    if (validateEmail(event.target.value)) checkEmail.innerHTML = "&#10004";
    else checkEmail.innerHTML = "X";
  });

  const dateForm = document.querySelector("input[type='date']");
  dateForm.addEventListener("input", (event) => {
    if (validateDate(event.target.value)) checkDate.innerHTML = "&#10004";
    else {
      checkDate.innerHTML = "X";
      document.querySelector("input[type='date']").value = null;
    }
  });

  // validator function
  function validateUsername(username) {
    let pattern = /^[A-Za-z|\s]+$/;
    return pattern.test(username);
  }

  function validateEmail(email) {
    let pattern = /^[a-zA-Z-.]+@(\w+\.){2,3}\w{2,3}$/;
    return pattern.test(email);
  }

  function validateDate(date) {
    let today = new Date(Date.now());
    today.setDate(today.getDate());

    if (Date.parse(date) > Date.parse(today)) return true;
    return false;
  }
  </script>
</body>

</html>