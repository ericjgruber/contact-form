<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Contact Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/vue/dist/vue.js" type="text/javascript"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
  </head>

<body>

<div class="container" id="app"> <!-- Start Bootstrap Container -->
  <div>
    <h1>{{ header }}</h1>
    <p>{{ instructions }}</p>
  </div>

  <div class="row">
    <form action="" method="post" class="contact-form">
      <div class="form-check">
        <p>Is this position a full-time, direct-to-hire position?</p>
        <input type="radio" class="form-check-input" name="radio-yes" id="radio-yes" @click="">
        <label for="radio-yes" class="form-check-label">Yes</label>
      </div>

      <div class="form-check">
        <input type="radio" class="form-check-input" name="radio-no" id="radio-no">
        <label for="radio-no" class="form-check-label">No</label>
      </div>

      <div class="form-group" v-if="isVisible">
        <label for="name">Your name:</label>
        <input type="text" name="name" class="form-control" id="name" required>
      </div>

      <div class="form-group" v-if="isVisible">
        <label for="email">Your email:</label>
        <input type="email" name="email" class="form-control" id="email" required>
      </div>

      <div class="form-group" v-if="isVisible">
        <label for="job-description">Job description:</label>
        <textarea name="job-description" class="form-control" id="job-description" rows="10"></textarea>
      </div>

      <button type="submit" class="btn btn-primary" v-if="isVisible">Submit</button>
    </form>
  </div>

</div> <!-- End Bootstrap Container -->
</body>

</html>
