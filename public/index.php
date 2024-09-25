<?php
session_start();
include '../private/indexstyle.php';


?>
  <div class="rectangle"></div>

  <form action='#' method='post'>
  <div class="button3" style="position: absolute; top:103%;left: 50%;transform: translate(-50%, -50%);">
  <button name="button123" class="button123">
	<div class="light"></div>
</button>
</div>
<?php
$_SESSION['anti']="";
if (isset($_POST['button123'])){
  $_SESSION['anti']="1";
echo "<script>window.location.href='Home.php'</script>";
}

?>
</form>