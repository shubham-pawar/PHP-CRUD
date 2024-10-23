<?php include './includes/connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Display Data</title>
    <link rel="stylesheet" href="style.css?va=1" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
  </head>
  <body>
    <h2>Display User Details</h2>
    <div class="table_container">
      <table class="table">
        
        <tbody>
          <?php 
            $select_query="select * from crud";
            $result=mysqli_query($con, $select_query);
            $i=1;
            //echo mysqli_num_rows($result);
            if($result){
              if(mysqli_num_rows($result)>0){
                echo "
                  <thead>
                  <tr>
                    <th>Sr No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Place</th>
                    <th>Action</th>
                  </tr>
                </thead>
                ";
              while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $username=$row['username'];
                $email=$row['email'];
                $phone=$row['phone'];
                $place=$row['place']; 

                echo "
                <tr>
                      <td>$i</td>
                      <td>$username</td>
                      <td>$email</td>
                      <td>$phone</td>
                      <td>$place</td>
                      <td>
                        <a href='update.php?update_id=$id'
                          ><i class='fa-solid fa-pen-to-square'></i
                        ></a>
                        <a href='delete.php?delete_id=$id'><i class='fa-solid fa-trash'></i></a>
                      </td>
                </tr>      
                "; 
                $i++;
                } 
              }else{
                echo "<h3 class='no_records'>No records found!</h3>";
              }
            }else{
              die(mysqli_error($con));
            }
          ?>
          
        </tbody>
      </table>
    </div>
    <div class="footer">
      <p>All right reserved ®</p>
    </div>
  </body>
</html>
