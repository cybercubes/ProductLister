<?php

$isValid = true;

$firstName = $_POST['firstname'] ?? null;
$email = $_POST['email'] ?? null;
$address = $_POST['address'] ?? null;
$city = $_POST['city'] ?? null;
$state = $_POST['state'] ?? null;
$zip = $_POST['zip'] ?? null;

$cardname = $_POST['cardname'] ?? null;
$cardnumber = $_POST['cardnumber'] ?? null;
$expdate = $_POST['expdate'] ?? null;
$cvv = $_POST['cvv'] ?? null;
$sameadr = $_POST['sameadr'] ?? null;
//name validation
if (preg_match('/^[a-zA-Z]{4,}(?: [a-zA-Z]+){0,2}$/', $firstName) == 0) {
    echo "</p> Name is invalid </p>";
    $isValid = false;
}
//email validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<p> Mail is invalid </p>";
    $isValid = false;
}
//address validation
if (preg_match('/[A-Za-z0-9\'\.\-\s\,]/', $address) == 0) {
    echo "<p> Address is invalid </p>";
    $isValid = false;
}
//city validation
if (preg_match('/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/', $city) == 0) {
    echo "<p> City is invalid </p>";
    $isValid = false;
}
//zip validation
if (preg_match('/^[0-9]{5}(?:-[0-9]{4})?$/', $zip) == 0) {
    echo "<p> Zip code is invalid </p>";
    $isValid = false;
}
// name on the card validation
if (preg_match('/^[a-zA-Z]{4,}(?: [a-zA-Z]+){0,2}$/', $cardname) == 0) {
    echo "<p> Name on the card is invalid </p>";
    $isValid = false;
}
//card number validation
if (preg_match("'\d{4}-?\d{4}-?\d{4}-?\d{4}'", $cardnumber) == 0) {
    echo "<p> Card number is invalid </p>";
    $isValid = false;
}
//expiration date validation
if (preg_match('/^(0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2})$/', $expdate) == 0) {
    echo "<p> Expiration date is invalid </p>";
    $isValid = false;
}
//card security number validation
if (preg_match('/^[0-9]{3,4}$/', $cvv) == 0) {
    echo "<p> CVV is invalid </p>";
    $isValid = false;
}
if ($sameadr != null && $sameadr != "on") {
    $isValid = false;
    echo "<p> WHY WOULD YOU EVEN DO THAT??? </p>";
}

if (!$isValid) {
    echo "<p> Information provided in the form is NOT Valid </p>";
} else {
    echo "<p> Information provided in the form is Valid </p>";
    //the information will be used for a transaction
}
