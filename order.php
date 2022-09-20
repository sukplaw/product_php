<?php
session_start();
$echo $_POST["fname"];
$echo $_POST["lname"];
$echo $_POST["address"];
$echo $_POST["mobile"];
$servername="localhost";
$username="root";
$password="12345678";
$dbname="shop";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con) die("Connnect mysql database fail!!".mysqli_connect_error());
echo "Connect mysql successfully!";
$sql="INSERT INTO order_product(fname,lname,address,mobile)"
$sql.="VALUES('$fname','$lname','$address','$mobile');";
echo $sql;
if (mysqli_query($con,$sql)){
    $last_id = mysql_insert_id($con);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
    //loop
    $sql1="INSERT INTO order_details (detail_id,order_id,product_id)";
    for($i=0;$i<count($_SESSION["cart"]);$i++){
        $item_id=$_SESSION["cart"][$i]['id'];
        $sql1.="('$last_id''"
    }
}
$result=mysqli_query($con,$sql);
$numrow=mysqli_num_rows($result);
?>
