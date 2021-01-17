
<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | Le Cafe' </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/myrestaurant.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>


    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

 






    
    	<div class="col-xs-3" style="text-align: center;">

    	<div class="list-group">
    		<a href="view_food_items.php" class="list-group-item ">View Food Items</a>
    		<a href="add_food_items.php" class="list-group-item ">Add Food Items</a>
    		<a href="edit_food_items.php" class="list-group-item ">Edit Food Items</a>
    		<a href="delete_food_items.php" class="list-group-item ">Delete Food Items</a>
    	</div>
    </div>
    
	<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "educretinfo";
$conn =  mysqli_connect($servername, $username,  $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }
$fetchQuery="SELECT * from contact";
mysqli_query($conn,$fetchQuery) or die("Querry Error");
$run=mysqli_query($conn,$fetchQuery);
while($row=mysqli_fetch_array($run))
{
?>
<center>
<table border="1px"; padding="10px";>
  <h1>Contact form</h1>
  <tr>
    <th>
      Names
    </th>
    <th>
    &nbsp&nbsp&nbsp&nbsp&nbsp Subject
    </th>
  </tr>
 <tr >
 	<td>	<?php echo $row['names']; ?></td>
 	<td>&nbsp&nbsp&nbsp&nbsp&nbsp	<?php echo $row['subject']; ?></td>&nbsp&nbsp&nbsp&nbsp&nbsp

 </tr>
 </center>
 <?php
 }
?>

</table>

    
 

  </body>
</html>