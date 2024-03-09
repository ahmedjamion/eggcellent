<?php

require '../../config.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$contactno = $_POST['contactno'];
$username = $_POST['username'];
$password = $_POST['password'];
$emptype = $_POST['emptype'];
$role = $_POST['role'];

echo $emptype;

$sql = "INSERT INTO employee(first_name, last_name, address, contact_number, user_name, password, type_id, role) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

if ($stmt = $mysqli->prepare($sql)) {
    $stmt->bind_param("ssssssis", $param_firstname, $param_lastname, $param_address, $param_contactno, $param_username, $param_password, $param_emptype, $param_role);

    $param_firstname = $firstname;
    $param_lastname = $lastname;
    $param_address = $address;
    $param_contactno = $contactno;
    $param_username = $username;
    $param_password = password_hash($password, PASSWORD_DEFAULT);
    $param_emptype = $emptype;
    $param_role = $role;

    if ($stmt->execute()) {
        echo '<script>alert("Success!")</script>';
    }
}
