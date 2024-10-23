<?php include './includes/connect.php'; 
if(isset($_GET['update_id'])){
  $uid=$_GET['update_id'];
//  echo $uid;

  // select
  $select_query="select * from crud where id=$uid";
  $result=mysqli_query($con,$select_query);
  if($result){
    $row=mysqli_fetch_assoc($result);
    $username=$row['username'];
    $email=$row['email'];
    $phone=$row['phone'];
    $place=$row['place']; 

    // update query
    if(isset($_POST['update'])){
      $username_update=$_POST['username'];
      $email_update=$_POST['email'];
      $phone_update=$_POST['number'];
      $place_update=$_POST['place'];
    

    $update_query = "update crud set username='$username_update', 
    email='$email_update', phone='$phone_update', place='$place_update'
    where id='$uid' ";
    
    $result=mysqli_query($con,$update_query);
    if($result){
      // echo "updated data successfully!";
      echo "<script>alert('Data updated successfully!')</script>";
      //Redirect to display page
      header('Location: display.php');
    }else{
      die(mysqli_error($con));
    }
  }
}
  
    else{
    die(mysqli_error($con));
  }

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Data in PHP</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="form_container">
      <form action="" method="post">
        <fieldset>
          <legend>Edit Details</legend>
          <label for="username">Username</label>
          <input type="text" 
          name="username" 
          autocomplete="off" 
          value="<?php echo $username ?>"/>

          <label for="email">Email</label>
          <input type="email" 
          name="email" 
          autocomplete="off"
          value="<?php echo $email ?>"/>

          <label for="phone">Mobile</label>
          <input type="number" 
          name="number" 
          autocomplete="off"
          value="<?php echo $phone ?>"/>

          <label for="place">Place</label>
          <input type="text" 
          name="place" 
          autocomplete="off" 
          value="<?php echo $place ?>"/>

          <input
            type="submit"
            class="submit_btn"
            name="update"
            value="Update"
          />
        </fieldset>
      </form>
    </div>
    <div class="footer">
      <p>All right reserved ®</p>
    </div>
  </body>
</html>
