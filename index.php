<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">
  <link rel="stylesheet" href="./style.css">

  <title>Frontend Mentor | Contact form</title>
</head>

<body>
  <div class="container">
    <form action="" method="post">
      <h2>Contact Us</h2>

      <div class="form-group">
        <div class="flex">
          <div>
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" required>
          </div>
          <div>
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" required>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email">
      </div>

      <div class="form-group">
        <label>Query Type</label>
        <div class="flex">
          <label for="general_enquiry" class="query-btn">
            <input type="radio" id="general_enquiry" name="query_type" value="option1">
            <span>
              General Enquiry
            </span>
          </label>
          <label for="support_request" class="query-btn">
            <input type="radio" id="support_request" name="query_type" value="option2">
            <span>
              Support Request
            </span>
          </label>
        </div>
      </div>

      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message"></textarea>

      </div>

      <!-- consent checkbox -->
      <div class="form-group">
        <label for="consent" class="consent">
          <input type="checkbox" id="consent" name="consent" required>
          I consent to being contacted by the team
        </label>
      </div>

      <button type="submit" class="submit-btn">Submit</button>


    </form>

  </div>









  <!-- <div class="attribution">
    Challenge by <a href="https://www.frontendmentor.io?ref=challenge">Frontend Mentor</a>. 
    Coded by <a href="#">Your Name Here</a>.
  </div> -->
</body>

</html>