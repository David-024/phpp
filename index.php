<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post"> <br>
        <input name= "name" id="name" type="text" placeholder="enter name"> <br>
        <input name= "mobile" id="mobile"  type="text" placeholder="enter mobile number"> <br>
        <input name= "city" id="city" type="text" placeholder="enter city"> <br>
        <input name= "school" id="school" type="text" placeholder="enter school">
        <button name="submit">submit</button>
    </form> 

<?php
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";
$con= mysqli_connect($server,$username,$password);
if(!$con){
    echo("connection failed");
}
error_reporting(0);
// echo"successfully connected";
// if(isset($_POST['submit'])){
$name =$_POST ['name'];
$mobile =$_POST['mobile'];
$school =$_POST['school'];
$city =$_POST['city'];
$sql=" INSERT INTO `shreeramdata`.`data`(`name`, `city`, `mobile`, `school`) VALUES ('$name','$city','$mobile','$school');";
//  echo $sql;
 if($con->query($sql)==true){
echo" data submitted successfully !";
 }
 else{
    echo"error";
 }
}
// }
?>

</body>
</html>
