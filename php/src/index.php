
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration form</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div>
    <?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
      $First_name= $_POST['First_name'];
      $last_name =$_POST['last_name'];
      $Email=$_POST['Email'];
      $Phone_no=$_POST['Phone_no'];

      $servername="db";
      $db_user="root";
      $db_pass="MYSQL_ROOT_PASSWORD";
      $db_name="userAccount";

      $conn = new mysqli($servername,$db_user, $db_pass,$db_name);

      if(!$conn){
        echo "Error";
      }
      else{
        $sql="INSERT INTO `user` (`First_name`,`last_name`,`Email`,`Phone_no`) VALUES('$First_name','$last_name','$Email','$Phone_no')";
        $result = mysqli_query($conn,$sql);
        if($result){
          echo 'Success';
        }else{
          echo "Err";
        }
        }
    }
?>
    </div>
    <form action="index.php" method="post">
      <div class="user-details">
        <div class="input-box">
          <span class="details">First Name</span>
          <input
            type="text"
            placeholder="Enter your First name"
            name="First_name"
            required
          />
        </div>
        <div class="input-box">
          <span class="details">Last Name</span>
          <input
            type="text"
            placeholder="Enter your Last name"
            name="last_name"
            required
          />
        </div>
        <div class="input-box">
          <span class="details">Email</span>
          <input
            type="text"
            placeholder="Enter your email"
            name="Email"
            required
          />
        </div>
        <div class="input-box">
          <span class="details">Phone Number</span>
          <input
            type="text"
            placeholder="Enter your number"
            name="Phone_no"
            required
          />
        </div>
      </div>
      <div class="button">
        <input type="submit" value="submit" />
      </div>
    </form>
  </body>
</html>
