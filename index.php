<?php include './includes/connect.php'; 

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $place = $_POST['place'];

  $insert_query="insert into crud(username,email,phone,place) 
                  values ('$username','$email','$phone','$place')";

  $result=mysqli_query($con, $insert_query);

  if($result){
    echo "<script>alert('Data updated successfully!')</script>";
    echo "<script>window.open('index.php','_self')</script>";
  }else{
    die(mysqli_error($con));
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP - CRUD Operation</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="form_container">
      <form action="" method="POST">
        <fieldset>
          <legend>Personal Details</legend>
          <label for="username"></label>
          <span>Name <span class="required">*</span></span
          ><input
            type="text"
            placeholder="Enter your Username"
            autocomplete="off"
            name="username"
            required
          />

          <label for="email"></label>
          <span>Email <span class="required">*</span></span
          ><input
            type="email"
            placeholder="Enter your Email"
            autocomplete="off"
            name="email"
            required
          />

          <label for="phone"></label>
          <span>Phone <span class="required">*</span></span
          ><input
            type="number"
            placeholder="Enter your Mobile"
            autocomplete="off"
            name="phone"
            required
          />

          <label for="place"></label>
          <span>Place <span class="required">*</span></span
          ><input
            type="text"
            name="place"
            placeholder="Enter your Place"
            autocomplete="off"
            name="place"
            required
          />

          <input type="submit" class="submit_btn" name="submit" />

          <a href="display.php" class="view_data">Details</a>
      
        </fieldset>
      </form>
    </div>

    <div class="footer">
      <p>All right reserved ®</p>
    </div>
  </body>
</html>
