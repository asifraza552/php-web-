
<?php

$server = "localhost";
$name = "root";
$password = "";
$dbname = "foodtest";


$con = mysqli_connect($server,$name,$password,$dbname);

if ($con) {
    echo "yesssssss";
}
// start//
$name =$_POST['name'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];
$massage =$_POST['massage'];

$sql ="INSERT INTO `foodtable`(`name`, `email`, `mobile`, `massage`) VALUES ('$name ','$email','$mobile','$massage')";

$result = mysqli_query($con , $sql);

if ($result) {
    echo "ddaattaa yessssss";
}
else{
    "data/noooooooooo";
};
?>
