<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Contact Form</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>

<body>

<div class="container"> <!-- Start Bootstrap Container -->

  <div class="row">
    <h1>Contact Form</h1>
    <p>Please fill out the following form below.</p>
  </div>

  <div class="row">
    <form action="" method="post" class="contact-form">
      <div class="form-group">
        <label for="name">Your name:</label>
        <input type="text" name="name" id="name" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="email">Your email:</label>
        <input type="email" name="email" id="email" required>
      </div>

      <div class="form-group">
        <label for="job-description">Please enter the job description here:</label>
        <textarea name="job-description" id="job-description" rows="10" cols="60"></textarea>
      </div>

      <div class="contact-form__buttons">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>

</div> <!-- End Bootstrap Container -->
</body>

</html>
