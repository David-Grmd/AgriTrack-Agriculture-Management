<?php
include('insert.php');
if(isset($_POST['Username']) && isset($_POST['Email']) && isset($_POST['Password'])){
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];


    $sql = mysqli_query($connect,"SELECT * FROM AgriTrack WHERE Username = '$Username'");
    if(mysqli_num_rows($sql)>0){
           
          while($row=mysqli_fetch_assoc($sql)){
                    if($Password==$row['Password']){
                        header('location: index.php');   
                    }else{
                        ?>
                          <script>
                              alert('Incorrect Password!')
                          </script>
                        <?php
                        require_once('index.php');
                    }
          }
      
    }else{
      ?>
        <script>
          alert('You are not registered!');
        </script>
      <?php
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>AgriTrack-Agriculture Management</title>
<link rel="icon" type="image/x-icon" href="leaf_fluttering_in_wind_48px.png">
<style>
body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
  background-color: #f0f0f0; /* Light background */
}

.form-container {
  width: 300px; /* Adjust as needed */
  border: 1px solid #ccc;
  padding: 20px;
  background-color: white; /* White form background */
}

.form-container h2 {
  text-align: center;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 15px;
}

.form-group label {
  display: block;
  margin-bottom: 5px;
}

.form-group input {
  width: calc(100% - 12px); /* Adjust for padding and border */
  padding: 5px;
  border: 1px solid #ccc;
}
.form-control a{
  margin-left: 39px;
  margin-bottom: 10px;
  margin-top: 30px;
  justify-content: center;
  text-decoration: none;
  color: black;
}
.form-control a:hover{
  color: rgb(113, 186, 3);
}
.form-group button{
 border: none;
 background-color: rgb(113, 186, 3);
 color: aliceblue;
 width: 50%;
 height: 30px;
 margin-left: 23%;
 margin-top: 15px;
 font-size: 15px;
 font-family: Arial, Helvetica, sans-serif;
 }
 .form-group button:hover{
  background-color: rgb(2, 143, 2);
 }
 img{
  width: 100px;
  height: 100px;
  margin: 0 auto 20px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  }
</style>
</head>
<body>

<div class="form-container">
  <img src="leaf_fluttering_in_wind_48px.png" alt="icon">
  <h2>AgriTrack</h2>
  <form>
    <div class="form-group">
      <label for="name">Username</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div class="form-control">
      <a href="#">Forgot Password</a>
      <a href="#">Sign Up</a>
    </div>
    <div class="form-group">
      <button type="submit">Submit</button>
    </div>
  </form>
</div>

</body>
</html>