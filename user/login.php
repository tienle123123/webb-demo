<!DOCTYPE html>
<html lang="en">
<head>
    <link href="stylelogin.css"  rel="stylesheet" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    <a href="http://localhost/WebFinal/user/signup.php"> <h2 class="inactive underlineHover" >Sign Up </h2> <a>

    <!-- Login Form -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <input type="email" id="login" class="fadeIn second iput" name="email" placeholder="Email">
      <input type="password" id="password" class="fadeIn third iput" name="password" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>
</div>
<div id="annoulogin" style="margin-top: 1rem;">
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$servername = "localhost";
$database = "dangnhap";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$inemail=test_input($_POST['email']);
$inpassword=test_input($_POST['password']);
$sql ="SELECT `name`,`email`, `password` FROM `user`";
$result = mysqli_query($conn,$sql);
if(!$result){
    die('LỖI' .mysqli_error($conn) );
}
$kt=0;
if(strlen($inemail)==0||strlen($inpassword)==0) {
  echo 'Vui long nhap day du thong tin';
}
else{
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        if($row["email"]==$inemail && $row["password"]==$inpassword){
            $_SESSION['name']=$row["name"];
            $kt=1;
            header('location: '.$_SESSION['href']);
        }
    }
}
if($kt==0){
    echo "Email hoac mat khau sai!!";
    $_SESSION["email"]=$inemail;
}
}
}
?>
  </div>

</body>
</html>