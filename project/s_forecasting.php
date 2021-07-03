<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
  body{
    height: 100vh;
    background-size: cover;
    background-position: center;
    background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.7)), url(../blur-chef-close-up-262978.jpg);
    color: #588c7e;
    font-family: monospace;
    font-size: 20px;
  }
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 20px;
text-align: center;
margin-top: : 20px;
margin-right: 20px;
margin-left: 20px;
margin-bottom: 20px;
}
.tabcontent{
	font-family: monospace;
	outline: 1;
	background: #f2f2f2;
	width: auto;
	border: 0;
	margin: 0 0 15px;
	padding: 8px;
	box-sizing: border-box;
	font-size: 14px;
	border-radius: 15px;


}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
	<h1>	<center>Order Forecasting</center> </h1><br><br>
	<div id="Order Forecasting" class="tabcontent"><br>
			   
			   <form action="s_forecasting.php" method="post">
			   <center> <input type="text" placeholder="Time From" name="time1" required>
			    <input type="text" placeholder="Time to" name="time2"  required>
			    <button type="submit" class="registerbtn" name="a_predict">Predict</button>
			    </center>
			   </form>
			    
        </div>
        <br><br>

<table>
<tr>
<th>Id</th>
<th>Student ID</th>
<th>name</th>
<th>Product ID</th>
<th>Quantity</th>
<th>Amount</th>
<th>Address</th>
<th>Phone No</th>
<th>order_status</th>
<th>order_at</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "shopping_cart");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['a_predict']))
{
	$time1=$_POST['time1'];
	$time2=$_POST['time2'];

$sql ="SELECT  tbl_order.id,tbl_order.customer_id,tbl_order.name,tbl_order_item.product_id,tbl_order_item.quantity,tbl_order.amount,tbl_order.address,tbl_order.phone_no,tbl_order.order_status,tbl_order.order_at
    FROM tbl_order
    INNER JOIN tbl_order_item ON ( tbl_order.id=tbl_order_item.order_id)
    HAVING tbl_order.order_at BETWEEN '".$time1."' AND '".$time2."' ";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row

while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]."</td><td>" . $row["customer_id"] . "</td><td>" . $row["name"] . "</td><td>". $row["product_id"] . "</td><td>" . $row["quantity"] . "</td><td>" . $row["amount"] . "</td><td>"
. $row["address"]. "</td><td>" . $row["phone_no"] ."</td><td>" . $row["order_status"] . "</td><td>" . $row["order_at"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();


}

?>
</table>
</body>
</html>