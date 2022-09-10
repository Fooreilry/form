<?
require_once 'connect.php';

$product = $_POST['product'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$_POST['contractnumber'] === '' ? $contractnumber = NULL : $contractnumber = $_POST['contractnumber'];


// запись в бд




$query = "INSERT INTO info (product, name, surname, address, phone, contract_number) VALUE ('$product','$name', '$surname', '$address', '$phone', '$contractnumber')";
$count = $connect->exec($query);
?>