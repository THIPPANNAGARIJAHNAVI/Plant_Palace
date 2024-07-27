<?php
/*session_start();
$_SESSION["name"]=$_POST['name'];
$_SESSION["thank"]="Thank You!";
echo $_SESSION["name"].  */


$con=mysqli_connect("localhost","root","","jahnavi");
if($con){
    echo "connected successfully";
}
else{
    echo "connection failed";
}
$query="INSERT INTO `Details` VALUES (?,?,?,?,?)";
$stmt=mysqli_prepare($con,$query);
if($stmt)
{
    mysqli_stmt_bind_param($stmt,"sssss",$name,$phone,$email,$pincode,$address);
    $name=$_POST['name'];
   
    $phone=$_POST['phone'];
    $email=$_POST['mail'];
    $pincode=$_POST['pincode'];
    $address=$_POST['address'];
    mysqli_stmt_execute($stmt); 

}
?>
<html>
<body>
<center style="color:blue;padding:50px;font-size:30px" >
<?php 
session_start();
$_SESSION["name"]=$_POST['name'];
$_SESSION["thank"]="Thank You!";
echo $_SESSION["name"]." " ."THANKS FOR PLACING ORDER";
?>

</center>
</body>
</html>
