<?php


$servername="localhost";
$username="root";
$password="";
$dbname="form";

//create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
//check connection

if(!$conn){
    echo"connection failed";
}
//echo "connection established";
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    // echo "hello";
    $a = $b = $c = '';
    $a=$_POST['myname'];
    //echo $a;
    $b=$_POST['myemail'];
    //echo $b;
    $c=$_POST['mysubject'];
    //echo $c;
    $d=$_POST['mymessage'];
    //echo $d;
    $temp = "INSERT INTO formdata(Name, Email, Subject, Message) VALUES ('$a','$b','$c','$d')";
    mysqli_query($conn,$temp) or die("query failed");
}





mysqli_close($conn);
echo '<script>alert("Data submitted successfully!")</script>';
header("Refresh:1; url=index.php");

?>