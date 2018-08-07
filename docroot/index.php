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
  <h1>{{ header }}</h1>
  <p>{{ instructions }}</p>

  <div class="row">
    <form action="" method="post" class="contact-form">
      <div class="form-check">
        <p>{{ position }}</p>
        <input type="radio" class="form-check-input" name="radio-position" id="radio-yes" @click="isVisible">
        <label for="radio-yes" class="form-check-label radio-inline">Yes</label>
      </div>

      <div class="form-check">
        <input type="radio" class="form-check-input" name="radio-position" id="radio-no" @click="isNotVisible">
        <label for="radio-no" class="form-check-label radio-inline">No</label>
      </div>

      <div class="form-group" v-if="visible">
        <label for="name">{{ yourName }}</label>
        <input type="text" name="name" class="form-control" id="name" required>
      </div>

      <div class="form-group" v-if="visible">
        <label for="email">{{ yourEmail }}</label>
        <input type="email" name="email" class="form-control" id="email" required>
      </div>

      <div class="form-group" v-if="visible">
        <label for="job-description">{{ jobDescription }}</label>
        <textarea name="job-description" class="form-control" id="job-description" rows="10"></textarea>
      </div>

      <button type="submit" class="btn btn-primary" v-if="isVisible">Submit</button>
    </form>
  </div>

</div> <!-- End Bootstrap Container -->
</body>

</html>
