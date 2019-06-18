<?php 

// define variables and set to empty values
$name_error = $last_name_error = $email_error = "";
$name = $last_name = $email  = $message = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $name_error = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Only letters and white space allowed"; 
    }
  }

    if (empty($_POST["last_name"])) {
        $last_name_error = "last_name is required";
    } else {
        $last_name = test_input($_POST["last_name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
            $last_name_error = "Only letters and white space allowed";
        }
    }

  if (empty($_POST["email"])) {
    $email_error = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format"; 
    }
  }
  


  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }
  
  if ($name_error == '' && $last_name_error == '' && $email_error == ''){
      $message_body = '';
      unset($_POST['submit']);
      foreach ($_POST as $key => $value){
          $message_body .=  "$key: $value\n";
      }

      $headers = "From: $name $last_name <$email>\r\n";
      $to = 'Albert <albert.mons@phortosconsultants.com>';
      $subject = 'Contact Form Submit';
      if (mail($to, $subject, $message, $headers)){
          $success = "Message was sent succesfully, Thanks!";
          $name = $last_name = $email = $message = '';
      }else {
          die("Does not respond");
      }
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}