
<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | Le Cafe' </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/add_food_items.css">
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
 
 
      <a href="view_food_items.php" class="list-group-item ">View Product</a>
    		<a href="add_food_items.php" class="list-group-item active">Add Product</a>
    		<a href="edit_food_items.php" class="list-group-item ">Edit Product</a>
    		<a href="delete_food_items.php" class="list-group-item ">Delete Product</a>
        <a href="vieworder.php" class="list-group-item ">View Order Buyed</a>
    	</div>
    </div>
    


    
    <div class="col-xs-9">
      <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="add_food_items.php" method="POST" enctype="multipart/form-data">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> ADD PRODUCT HERE </h3>

          <div class="form-group">
            <label for="name">Your Product name</label>
            <input type="text" class="form-control" id="name" name="names" placeholder="null" required="">
          </div>     

          <div class="form-group">
            <input type="text" class="form-control" id="price" name="price" placeholder="Price (INR)" required="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="description" name="dess" placeholder="Description" required="">
          </div>

          <div class="form-group">
            <input type="file" class="form-control"  accept="application/image"  id="images_path" name="image" placeholder="Image" required="">
          </div>

          <div class="form-group">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right" value="UPLOAD"> Add Product </button>    
      </div>
        </form>

        
        </div>
      
    </div>
</div>

  </body>
</html>
<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "image";
// $conn =  mysqli_connect($servername, $username,  $password, $dbname);

//  if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

  // if(isset($_POST['submit']))
  // {
  //   $mynames=$_POST['names'];
  //      $myprice = $_POST['price'];
  //      $mydess = $_POST['dess'];
  //      $myimg = $_FILES['img']['name'];
  //      $data = file_get_contents($_FILES['img']['tmp_name']);

  //   $sql = "INSERT INTO addproduct (names,price,dess,img) VALUES ('$mynames','$myprice','$mydess','$data')";
  //   mysqli_query($conn,$sql) or die("Querry Error");
  //   // $result = mysqli_query($conn,$sql);
  //   if(1)
  //   {
  //       echo '<script>alert("Product added succesfully")</script>';
        
  //   }
   
  // }
// if (isset($_post['submit'])) 
// {
//   $file = $_FILES['image']['name'];
//   $mydata = file_get_contents($_FILES['image']['tmp_name']);

//   $query = "INSERT INTO images(images) VALUES('$mydata')";

//   $res = mysqli_query($conn,$query);
//   if($res){
//     // move_uploaded_file($_files['image']['tmp_name'], "$file");
//   }
// }9999999

session_start();
$dataBase = new PDO("mysql:host=localhost;dbname=educretinfo","root","");

if (isset($_POST['submit'])){
    $mynames = $_POST['names'];
    $myprice = $_POST['price'];
    $mydess = $_POST['dess'];
    $data = file_get_contents($_FILES['image']['tmp_name']);
    $stmt = $dataBase->prepare("insert into addproduct values('',?,?,?,?)");
    $stmt->bindParam(1,$mynames);
    $stmt->bindParam(2,$myprice);
    $stmt->bindParam(3,$mydess);
    $stmt->bindParam(4,$data);
    $stmt->execute();
    // echo "uploaded";

}





?>