<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link href="stylesignup.css" type="text/css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>


<script>
    </script>
  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <div style="display:flex; flex-direction: row; justify-content: center;">
    <a href="http://localhost/WebFinal/user/login.php"> <h2  class="inactive underlineHover">  Sign In </h2> </a>
    <h2 class="active">Sign Up </h2> 
    </div>

    <!-- Login Form -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <input type="text" id="login" class="fadeIn second iput" name="name" placeholder="Name">
      <input type="email" id="login" class="fadeIn second iput" name="email" placeholder="Email">
      <input type="password" id="password" class="fadeIn third iput" name="password" placeholder="Password">
      <input type="password" id="login" class="fadeIn second iput" name="confirm-password" placeholder="Confirm-Password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

</div>
<div id="annousignup" style="color:red;margin-top: 1rem;">
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $servername = "localhost";
        $database = "dangnhap";
        $username = "root";
        $password = "";
        $conn = new mysqli($servername, $username, $password, $database);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }

        $inname=test_input($_POST['name']);
        $inemail=test_input($_POST['email']);
        $inpassword=test_input($_POST['password']);
        $incf_pass=test_input($_POST['confirm-password']);
        if(strlen($inname)==0||strlen($inemail)==0||strlen($inpassword)==0||strlen($incf_pass)==0) echo "Vui long nhap day du thong tin";
        else {
        if($incf_pass!=$inpassword){
            echo "Mat khau khong hop vui long nhap lai!";
        }
        else{
        $kt=0;
        $sql ="SELECT `email` FROM `user`";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                if($row["email"]==$inemail){
                    echo "Dia chi email da co nguoi su dung <br> Vui long dang ky bang dia chi email khac!";
                    $kt=1;
                }
            }
        }
        if($kt==0){
        $query ="INSERT INTO user(`name`,`email`,`password`) VALUES('".$inname."','".$inemail."','".$inpassword."')";
        mysqli_query($conn, $query);
        echo "<script type='text/javascript'>alert('Đăng Ký Thành Công!');</script>";
        }
        $conn->close();
        }
    } 
}
function slep(){
  
}
?>

</div>
</div>
</body>
</html>