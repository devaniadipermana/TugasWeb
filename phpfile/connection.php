<?php

$conn = mysqli_connect('localhost', 'root', '','vietgram-master');
if (!$conn) {
	echo "database error";
}