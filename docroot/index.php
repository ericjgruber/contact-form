<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Contact Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>

<body>
<h1>Contact Form</h1>
<p>Please fill out the following form below.</p>

<form action="" method="post" class="contact-form">
  <div class="contact-form__inputs">
    <label for="name">Your name:</label>
    <input type="text" name="name" id="name" required>
  </div>

  <div class="contact-form__inputs">
    <label for="email">Your email:</label>
    <input type="email" name="email" id="email" required>
  </div>

  <div class="contact-form__inputs">
    <label for="job-description">Please enter the job description here:</label>
    <textarea name="job-description" id="job-description" rows="10" cols="60"></textarea>
  </div>

  <div class="contact-form__buttons">
    <input type="submit" value="Submit">
  </div>
</form>

</body>

</html>
