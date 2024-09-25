<?php
session_start();
include 'configreg.php';
include 'stylereg.php';
date_default_timezone_set('Asia/Manila');
$_SESSION['logindate'] = date("Y-m-d H-i-s");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
</head>

<body>

<?php
echo "<div class='login'>";
echo "<body>";
echo   "<section class='container'>";
echo       "<div class='login-container'>";
echo          "<div class='circle circle-one'></div>";
echo            "<div class='form-container'>";

echo                "<h1 class='opacity'>LOGIN</h1>";
echo                "<form action='#' method='post'>";
echo                    "<input type='text' name='usname' placeholder='Enter Username' minlength='4' />";
echo                    "<input type='password' name='pass' placeholder='Enter Password' minlength='4' />";
echo                   "<input type='submit' name='login' value='Login'>";
echo                "</form>";
echo            "<div class='circle circle-two'></div>";
echo        "</div>";
echo        "<div class='theme-btn-container'></div>";
echo    "</section>";
echo "</body>";


if (isset($_POST['login'])){
    echo $_SESSION['logindate'];
        $Q = mysqli_query($con, "SELECT * from admins where username='".$_POST['usname']."' and password ='".$_POST['pass']."'");
    $N= mysqli_num_rows($Q);
    if(!empty($_POST['usname']) && !empty($_POST['pass'])){
    
    if ($N>0){
        $R = mysqli_fetch_array($Q);
         $_SESSION['anti'] = $R['username'];
         $_SESSION['win'] = $R['windows'];
         $logs=mysqli_query($con,"UPDATE admins set logtime='".$_SESSION['logindate']."' WHERE username='".$_POST['usname']."' and password='".$_POST['pass']."'");
  echo "<script>alert('Redirecting to Admin Page')</script>";
  echo "<script>window.location.href='windows.php'</script>";
    
    }
    else{
        echo "<script>alert('Incorrect Username/Password')</script>";
    }
    }
    if(empty($_POST['usname']) && empty($_POST['pass'])){
        echo "<script>alert('Please fill-out empty fields!')</script>";
    }
    }
    echo "<div>";
?>
</body>