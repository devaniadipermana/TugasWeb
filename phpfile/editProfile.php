<?php
include 'connection.php';
$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$website = $_POST['website'];
$bio = $_POST['bio'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];

$query = mysqli_query($conn,"UPDATE `profile` SET `name`='$name',`username`='$username',`website`='$website',`bio`='$bio',`email`='$email',`phone_number`='$phone',`gender`='$gender' WHERE `id_profile`='$id'");
if ($query >0) {
	echo "sukses";
}else{
	echo "data gagal diubah";
}
