
<?php
session_start();
include 'config.php';
include 'logincss.php';
/*echo "<form action='#' method='post'>";
echo "<input type='text' name='stnum' placeholder='Enter Student Number' minlength='3'></br>";
echo "<br><input type='password' name='stpass' placeholder='Enter Password' minlength='3'></br>";
echo "<br><input type='submit' name='login' value='Login'></br>";
echo "</form>";*/
echo "<section>";
echo  "<span></span>";
echo  "<h1><b>C-CASH LOGIN</b></h1>";
echo  "<form action='#' method='post'>";
echo    "<br><input placeholder='Student Number' type='text' name='stnum' minlength='3'></br>";
echo    "<br><input placeholder='Password' type='password' name='stpass' minlength='3'></br>";
echo "<div class='logbot'>";
echo    "<br><input value='Login' type='submit' name='login'></br>";
echo "</div>";
echo  "</form>";
echo "</section>";
if (isset($_POST['login'])){

	$_POST['stnum'] = htmlspecialchars($_POST['stnum']);
	$_POST['stpass'] = htmlspecialchars($_POST['stpass']);

	$Q = mysqli_query($con, "SELECT * from accounts where stunum='".$_POST['stnum']."' and password='".$_POST['stpass']."'");
	$QR= mysqli_num_rows($Q);
	if (!empty($_POST['stnum']) && !empty($_POST['stpass'])){
	if ($QR>0){
			$R = mysqli_fetch_array($Q);
			$_SESSION['deact'] = $R['status'];
			 $_SESSION['anti1'] = $R['stunum'];
			 $_SESSION['anti2'] = $R['stunum'];
			 $_SESSION['anti3'] = $R['stunum'];
//    $queryup0=mysqli_query($con,"UPDATE accounts set status ='online' WHERE stunum = '".$R['stunum']."'");
			if ($R['userlevel'] == 'admin'){		
		echo "<script>alert('redirecting to admin page')</script>";
		echo "<script>window.location.href='admin.php'</script>";
	}
         if ($R['userlevel']== 'user'){
         	echo "<script>alert('redirecting to home page')</script>";
		echo "<script>window.location.href='home.php'</script>";
	}
	     if($R['userlevel']== 'canteen'){
	     	echo "<script>alert('redirecting to Canteen Admin page')</script>";
	     	echo "<script>window.location.href='canteen.php'</script>";
	     }
	}
	else{
		echo "<script>alert('Invalid username or password')</script>";
	}

}
else{
	echo "<script>alert('Please Fill-Out Empty Fields')</script>";
}
}
if (isset($_SESSION['anti1'])){
    echo "<script>window.location.href='admin.php'</script>";
}
if (isset($_SESSION['anti2'])){
    echo "<script>window.location.href='home.php'</script>";
}
if (isset($_SESSION['anti3'])){
    echo "<script>window.location.href='canteen.php'</script>";
}




?>