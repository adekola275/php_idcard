<?php require "connection.php"?>
<?php
 $errors = array();
$fullname= $email= $phone_no = $age = $country= $state= $lga = $address = $gender = "";
$fullnameErr = $emailErr = $phone_noErr = $ageErr = $countryErr = $stateErr = $lgaErr = $addressErr = $genderErr = "";
if(isset($_POST['submit'])){
    if (empty($_POST["fullname"])) {
        $fullnameErr = "Enter a valid FullName";
      } else {
        $fullname = ($_POST["fullname"]);
      }
      if (empty($_POST["email"])) {
        $emailErr = "Enter a valid Email";
      } else {
        $email =($_POST["email"]);
         }
      if (empty($_POST["phone_no"])) {
        $phone_noErr = "Enter a valid Phone_No";
      } else {
        $phone_no =($_POST["phone_no"]);
      }
      if (empty($_POST["age"])) {
        $ageErr = "Your Age is required";
      } else {
        $age =($_POST["age"]);
      }
      if (empty($_POST["country"])) {
        $countryErr = "Your Country is required";
      } else {
        $country =($_POST["country"]);
      }
      if (empty($_POST["state"])) {
        $stateErr = "Your State is required";
      } else {
        $state =($_POST["state"]);
      }
      if (empty($_POST["lga"])) {
        $lgaErr = "Your Lga is required";
      } else {
        $lga =($_POST["lga"]);
      }
      if (empty($_POST["address"])) {
        $addressErr = "Your Address is required";
      } else {
        $address =($_POST["address"]);
      }
      if (empty($_POST["gender"])) {
        $genderErr = "Your Gender is required";
      } else {
        $gender =($_POST["gender"]);
      }
  if ((!empty($fullname)) || (!empty($email)) || (!empty($phone_no)) || (!empty($age)) || (!empty($country)) || (!empty($state)) || (!empty($lga)) || (!empty($address)) || (!empty($gender))) {
    $sql = "INSERT INTO registration(fullname, phone_no, email, age, country, state, lga, address, gender) 
    VALUES('$fullname', '$email', '$phone_no', '$age','$country', '$state', '$lga', '$address', '$gender')";
  }

//   if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";
        if(empty($_POST['fullname'])){
     $errors['fullnameErr'] = "Enter a valid FullName.";
   }elseif(!is_string(trim($_POST['fullname']))){
     $errors['fullnameErr'] = "Enter a valid FullName.";
   }else{
     $fullname = $_POST['fullname'];
   }

   if(empty($_POST['email'])){
     $errors['emailErr'] = "Enter a valid Email.";
   }elseif(!is_string(trim($_POST['email']))){
     $errors['emailErr'] = "Enter a valid Email.";
   }else{
     $email = $_POST['email'];
   }
   if(empty($_POST['phone_no'])){
     $errors['phone_noErr'] ="Enter a valid Phone_No.";
   }elseif(!is_string(trim($_POST['phone_no']))){
     $errors['phone_noErr'] ="Enter a valid Phone_No.";
   }else{
     $phone_no = $_POST['phone_no'];
   }

   if(empty($_POST['age'])){
     $errors['ageErr'] ="Enter a valid Age.";
   }elseif(!is_string(trim($_POST['age']))){
    $errors['ageErr'] ="";
  }else{
     $age = $_POST['age'];
   }
   
    if(empty($_POST['country'])){
     $errors['countryErr'] = "";
   }elseif(!is_string(trim($_POST['country']))){
    $errors['countryErr'];
  }else{
     $country = $_POST['country'];
   }
    if(empty($_POST['state'])){
     $errors['stateErr'] = "";
   }elseif(!is_string(trim($_POST['state']))){
    $errors['stateErr'];
  }else{
     $state = $_POST['state'];
   }
   
   if(empty($_POST['lga'])){
     $errors['lgaErr'] = "";
   }elseif(!is_string(trim($_POST['lga']))){
    $errors['lgaErr'];
  }else{
     $lga = $_POST['lga'];
   }
      if(empty($_POST['address'])){
     $errors['addressErr'] = "";
   }elseif(!is_string(trim($_POST['address']))){
    $errors['addressErr'];
  }else{
    $address = $_POST['address'];
   }
   if(empty($_POST['gender'])){
     $errors['genderErr'] = "";
   }elseif(!is_string(trim($_POST['gender']))){
    $errors['genderErr'];
  }else{
     $gender = $_POST['gender'];
   }

   
 }



?>