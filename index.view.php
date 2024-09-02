<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">
  <link rel="stylesheet" href="./css/style.css">

  <title>Frontend Mentor | Contact form</title>
</head>

<body>
  <div class="container">
    <form action="" method="post">
      <h2>Contact Us</h2>

      <div class="form-group">
        <div class="flex">
          <!-- first name -->
          <div>
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" class="input-field <?= isset($errors['first_name']) ? 'input-error' : '' ?>" value="<?= $_POST['first_name'] ?? '' ?>">
            <?php if (isset($errors['first_name'])) : ?>
              <p class=" field-error-text"><?= $errors['first_name'] ?></p>
            <?php endif; ?>
          </div>

          <!-- last name -->
          <div>
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" class="input-field <?= isset($errors['last_name']) ? 'input-error' : '' ?>" value="<?= $_POST['last_name'] ?? '' ?>">
            <?php if (isset($errors['last_name'])) : ?>
              <p class=" field-error-text"><?= $errors['last_name'] ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <!-- email -->
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" class="input-field <?= isset($errors['email']) ? 'input-error' : '' ?>" value="<?= $_POST['email'] ?? '' ?>">
        <?php if (isset($errors['email'])) : ?>
          <p class=" field-error-text"><?= $errors['email'] ?></p>
        <?php endif; ?>
      </div>

      <!-- query type -->
      <div class="form-group">
        <label>Query Type</label>
        <div class="flex">
          <label for="general_enquiry" class="query-btn input-field">
            <input type="radio" id="general_enquiry" name="query_type" value="general_enquiry">
            <span>
              General Enquiry
            </span>
          </label>
          <label for="support_request" class="query-btn input-field">
            <input type="radio" id="support_request" name="query_type" value="support_request">
            <span>
              Support Request
            </span>
          </label>
        </div>
      </div>

      <!-- message -->
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" class="input-field <?= isset($errors['message']) ? 'input-error' : '' ?>"><?= $_POST['message'] ?? '' ?></textarea>
        <?php if (isset($errors['message'])) : ?>
          <p class=" field-error-text"><?= $errors['message'] ?></p>
        <?php endif; ?>
      </div>

      <!-- consent -->
      <div class="form-group">
        <label for="consent" class="consent">
          <input type="checkbox" id="consent" name="consent" value="1">
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

</html>