<?php

if(isset($_POST['create'])){
    include "db_conn.php";

// Function to validate and sanitize input
function validateInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Validate and sanitize form data
$firstName = validateInput($_POST['FirstName']);
$middleName = validateInput($_POST['MiddleName']);
$lastName = validateInput($_POST['LastName']);
$age = validateInput($_POST['Age']);
$gender = validateInput($_POST['Gender']);
$birthdate = validateInput($_POST['BirthDate']);
$idType = validateInput($_POST['IdType']);
$idnum = validateInput($_POST['IdNum']);
$issuedname = validateInput($_POST['IssuedName']);
$issuedstate = validateInput($_POST['IssuedState']);
$issuedate = isset($_POST['IssuedDate']) ? validateInput($_POST['IssuedDate']) : '';
$expirydate = validateInput($_POST['ExpiryDate']);
$addresstype = validateInput($_POST['AddressType']);
$nationality = validateInput($_POST['Nationality']);
$province = validateInput($_POST['Province']);
$city = validateInput($_POST['City']);
$street = validateInput($_POST['Street']);
$housenumber = validateInput($_POST['HouseNum']);
$emergencycontact = validateInput($_POST['EmergencyContNum']);
$nameofcontact = validateInput($_POST['ContactName']);
$relationship = validateInput($_POST['Relationship']);
$bloodtype = isset($_POST['BloodType']) ? validateInput($_POST['BloodType']) : '';
$status = validateinput($_POST['Status']);

// ... add more variables for other form fields

// Validate input
$errors = [];
if (empty($firstName)) {
    $errors[] = "First name is required.";
}

if (empty($middleName)) {
    $errors[] = "Middlename is required.";
}

if (empty($lastName)) {
    $errors[] = "Last name is required.";
}

if (empty($age)) {
    $errors[] = "age is required.";
}

if (empty($gender)) {
    $errors[] = "gender is required.";
}

if (empty($birthdate)) {
    $errors[] = "birthdate is required.";
}

if (empty($idType)) {
    $errors[] = "id type is required.";
}

if (empty($idnum)) {
    $errors[] = "id number is required.";
}

if (empty($issuedname)) {
    $errors[] = "issued name is required.";
}

if (empty($issuedstate)) {
    $errors[] = "issued state is required.";
}

if (empty($issuedate)) {
    $errors[] = "issued date is required.";
}

if (empty($expirydate)) {
    $errors[] = "expiry date is required.";
}

if (empty($addresstype)) {
    $errors[] = "address type is required";
}

if (empty($nationality)) {
    $errors[] = "nationality is required";
}

if (empty($province)) {
    $errors[] = "province is required";
}

if (empty($city)) {
    $errors[] = "city is required";
}

if (empty($street)) {
    $errors[] = "street is required";
}

if (empty($housenumber)) {
    $errors[] = "housenumber is required";
}

if (empty($emergencycontact)) {
    $errors[] = "emergency contact is required";
}

if (empty($nameofcontact)) {
    $errors[] = "name of contact is required";
}

if (empty($relationship)) {
    $errors[] = "relationship is required";
}

if (empty($bloodtype)) {
    $errors[] = "bloodtype is required";
}

if (empty($status)) {
    $errors[] = "status is requires";
}
// ... add validation rules for other fields

// Check for errors
if (!empty($errors)) {
    // Display errors and stop execution
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    $conn->close();
    exit();
}

// Prepare and execute the SQL statement
$sql = "INSERT INTO tblscreg (FirstName, MiddleName, LastName, Age, Gender, BirthDate,
IdType, IdNum, IssuedName, IssuedState, IssuedDate, ExpiryDate, AddressType, Nationality, Province, 
City, Street, HouseNum, EmergencyContNum, ContactName, Relationship, BloodType, Status) 
VALUES ('$firstName', '$middleName', '$lastName', '$age', '$gender', '$birthdate', '$idType', '$idnum',
'$issuedname', '$issuedstate', '$issuedate' , '$expirydate', '$addresstype', '$nationality', '$province', '$city', '$street', 
'$housenumber', '$emergencycontact', '$nameofcontact', '$relationship', '$bloodtype','$status')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}