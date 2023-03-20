<?php
  var_dump($_POST);
  $lastname = $_POST['user_lastname'];
  $firstname = $_POST['user_firstname'];
  $email = $_POST['user_email'];
  $subject = $_POST['user_subject'];
  $phoneNumber = $_POST['user_phonenumber'];
  $message = $_POST['user_message'];
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The box model</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <p> Thank you <?php echo $firstname.' '.$lastname; ?> for contacting us about “<?php echo $subject; ?>”.</p>
  <p> One of our advisors will contact you, either at <?php echo $email ?>, or by phone at <?php echo $phoneNumber ?>, as soon as possible, to process your request : </p>
  <p><?php echo $message ?></p>
</body>
</html>