<?php
$details = [];
$nameError = "";
$ageError = "";
$genderError = "";
$cityError = "";
$flavourError = "";
$emailError = "";
$expiryTime = time() +86400;

if(isset($_POST["submit"])) {

class Second {
function validateName () {
$name = $_POST["name"];
if (!empty($name) and preg_match("/^[a-zA-Z ]*$/", $name) and strlen($name)>3 and strlen($name)<10 and ctype_alpha($name))
{
    array_push($GLOBALS['details'],ucfirst($_POST["name"]));
    setcookie("name",$name,$GLOBALS['expiryTime']);
} else {
    $GLOBALS['nameError'] = " *Enter Valid Name";
}
}



function validateAge () {
$age = $_POST["age"];

if (!empty($age) and ctype_digit($age))
{
    array_push($GLOBALS['details'],$_POST["age"]);
    setcookie("age",$age,$GLOBALS['expiryTime']);
} else {
    $GLOBALS['ageError'] = " *Enter Valid Age";
    return $GLOBALS['ageError'];
}

}


function validateGender () {
$gender = $_POST["gender"];

if (!empty($_POST["gender"])) {
    array_push($GLOBALS['details'],$_POST["gender"]);
    setcookie("gender",$gender,$GLOBALS['expiryTime']);

} else {
    $GLOBALS['genderError'] = " *Select Gender";
    return $GLOBALS['genderError'];
}

}


function validateCity () {
$city = $_POST["city"];
if (!empty($city)) {
    array_push($GLOBALS['details'],$_POST["gender"]);
    setcookie("city",$city,$GLOBALS['expiryTime']);

}  else {
    $GLOBALS['cityError'] = " *Select City";
    return $GLOBALS['cityError'];
}

}

}

class First extends Second {
function validateFlavour () {
$flavour = $_POST["flavour"];
if (!empty($flavour)) {
    array_push($GLOBALS['details'],$_POST["flavour"]);
    setcookie("flavour",$flavour,$GLOBALS['expiryTime']);

}  else {
    $GLOBALS['flavourError'] = " *Select Flavour";
    return $GLOBALS['flavourError'];
}

}


function validateEmail() {
$email = $_POST["email"];
if (!empty($email) and filter_var($email, FILTER_VALIDATE_EMAIL)) {
   array_push($GLOBALS['details'],$_POST["email"]);
   setcookie("email",$email,$GLOBALS['expiryTime']);
  

}  else {
    $GLOBALS['emailError'] = " *Enter Valid Email ID";
    return $GLOBALS['emailError'];
}
}


}


$obj = new First();


$obj->validateName ();
$obj->validateAge () ;
$obj->validateGender ();
$obj->validateCity () ;
$obj->validateFlavour ();
$obj->validateEmail() ;
}


print_r($details);
