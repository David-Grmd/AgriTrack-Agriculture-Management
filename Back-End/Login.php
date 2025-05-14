<?php
$conn = mysqli_connect("localhost", "root","", "AgriTrack");
if(!$conn){
  echo("Connection Failed!");
}
if(isset($_POST['Username']) && isset($_POST['Email']) && isset($_POST['Password'])){
  $Username = $_POST['Username'];
  $Email = $_POST['Email'];
  $Password = $_POST['Password'];
$sql = "INSERT INTO AgriTrack(Username,Email,Password) VALUES('$Username','$Email','$Password')";
$result = mysqli_query($conn,$sql);
if($result){
  ?>
  <script>
     alert("Login Successfully");
  </script>
  <?php
    header('location: index.php')   
  }
}

?>