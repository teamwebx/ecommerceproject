
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Website title - bootstrap html template</title>

<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

<!-- jQuery -->
<script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="boot.css" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="css1.css" rel="stylesheet" type="text/css"/>
<link href="cssdbms.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<!-- custom javascript -->
<script src="java.js" type="text/javascript"></script>

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

}); 
// jquery end
</script>





<style>
.table{
	text-align:center;
	border = "1" ;
	
}



</style>
</head>
<body style="text-align:center;">

<center>
<div>

<tr>

<th>Name   &nbsp&nbsp</th>
<th>Price   &nbsp&nbsp</th>
<th>dess   &nbsp&nbsp</th>
<th>Product Image   &nbsp&nbsp</th>
<th>checkbox   &nbsp&nbsp</th>
</tr>


</div>
</center>



<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "educretinfo";
$conn =  mysqli_connect($servername, $username,  $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }
$fetchQuery="SELECT * from addproduct";
$run=mysqli_query($conn,$fetchQuery);
while($row=mysqli_fetch_array($run))
{
?>

<div class="table"></div>
 <form method="POST" action="">
<!-- <tr>	<td>	<?php echo $row['id']; ?> &nbsp  &nbsp&nbsp</td> </tr> -->
<tr>	<td>	<?php echo $row['names']; ?> &nbsp  &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
<input type="hidden" name="names[]" value="<?php echo $row['names']; ?>"/>
</td> </tr>
<tr>	<td>	<?php echo $row['price']; ?> &nbsp  &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp</td> </tr>
<input type="hidden" name="price[]" value="<?php echo $row['price']; ?>"/>
<tr>	<td>	<?php echo $row['dess']; ?> &nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td> </tr>
<tr>	<td>	<?php echo "<img src='data:image/png;base64,".base64_encode($row['img'])."'width='50px'/> "; ?></td> </tr>
<tr>     <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input type="checkbox"  value="<?php echo $row['id']; ?>" name="chv[]" />                          </td>     </tr>
<br><br><br>

 <?php
 }
?>
<button name="button" type="submit" id="submit" class="btn btn-primary pull-right" value="UPLOAD">  Buy      </button> 

</form> 

</div>
<?php


if(isset($_POST['button']))
{
  $names=$_POST['names'];
	 $price=$_POST['price'];
	 $id=$_POST['chv'];
     $key=0;
	 foreach($id as $key=>$val)
	 {
		 $fid= $id[$key];
		 if($fid !="")
		 {
		  $quf="SELECT * from addproduct where id='$fid'";
		 // echo $quf;
		  $ro=mysqli_query($conn,$quf);
		  $fro=mysqli_fetch_array($ro);
		$na=$fro['names'];
		$pr=$fro['price'];
$sql = "INSERT INTO customerorderplaced (names,price,id) VALUES ('$na','$pr','$fid')";
//echo $sql;
mysqli_query($conn,$sql) or die("Querry Error");
		 }
	 }





}
?>

























<footer class="section-footer border-top">
	<div class="container">
		<section class="footer-top padding-y">
			<div class="row">
				<aside class="col-md col-6">
					<h6 class="title">Brands</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Adidas</a></li>
						<li> <a href="#">Puma</a></li>
						<li> <a href="#">Reebok</a></li>
						<li> <a href="#">Nike</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Company</h6>
					<ul class="list-unstyled">
						<li> <a href="#">About us</a></li>
						<li> <a href="#">Career</a></li>
						<li> <a href="#">Find a store</a></li>
						<li> <a href="#">Rules and terms</a></li>
						<li> <a href="#">Sitemap</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Help</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Contact us</a></li>
						<li> <a href="#">Money refund</a></li>
						<li> <a href="#">Order status</a></li>
						<li> <a href="#">Shipping info</a></li>
						<li> <a href="#">Open dispute</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Account</h6>
					<ul class="list-unstyled">
						<li> <a href="#"> User Login </a></li>
						<li> <a href="#"> User register </a></li>
						<li> <a href="#"> Account Setting </a></li>
						<li> <a href="#"> My Orders </a></li>
					</ul>
				</aside>
				<aside class="col-md">
					<h6 class="title">Social</h6>
					<ul class="list-unstyled">
						<li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
						<li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
						<li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
						<li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
					</ul>
				</aside>
			</div> <!-- row.// -->
		</section>	<!-- footer-top.// -->

		<section class="footer-bottom border-top row">
			<div class="col-md-2">
				<p class="text-muted"> &copy 2019 Company name </p>
			</div>
			<div class="col-md-8 text-md-center">
				<span  class="px-2">info@pixsellz.io</span>
				<span  class="px-2">+879-332-9375</span>
				<span  class="px-2">Street name 123, Avanue abc</span>
			</div>
			<div class="col-md-2 text-md-right text-muted">
				<i class="fab fa-lg fa-cc-visa"></i>
				<i class="fab fa-lg fa-cc-paypal"></i>
				<i class="fab fa-lg fa-cc-mastercard"></i>
			</div>
		</section>
	</div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->

</body>
</html>