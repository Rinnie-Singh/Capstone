<?php
$email = filter_input(INPUT_POST, 'email');
$psw = filter_input(INPUT_POST, 'psw');
$gender = filter_input(INPUT_POST, 'gender');
$phone = filter_input(INPUT_POST, 'phone');
if (!empty($email)){
if (!empty($psw)){
if (!empty($gender)){
if (!empty($phone)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "form";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO register_table (email, psw, gender, phone)
values ('$email','$psw','$gender','$phone')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully We Will Contact You soon.";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
}
else{
echo "Username should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}

?>