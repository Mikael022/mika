<?php
session_start();
include 'configreg.php';
include 'stylereg.php';
include 'stylereg2.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>

            <div class='header'>
          <a>
 </a>
          <a> 
 </a>
  <div class="header-right">
             <a>
 </a>
             <a >
 </a>

</div>

<div class='okies'>
        <h2><?php echo "Registrar System<br>windows"?></h2>
        </div>
</div>

</div>
<div class="main">

</div>
<body>

<?php
echo "<div class='contains'>";
echo "<form action='#' method='post'>";
echo "<div class='div-uno'>";
echo "<input type='submit' name='window1' value='Window 1'>";
echo "</div>";
echo "<div class='div-dos'>";
echo "<input type='submit' name='window2' value='Window 2'>";
echo "</div>";
echo "<div class='div-tres'>";
echo "<input type='submit' name='window3' value='Window 3'>";
echo "</div>";
echo "</form>";
echo "</div>";
echo "<form action='#' method='post'>";
echo "<div class='div-44'>";
echo "<input type='submit' name='logout' value='Logout'>";
echo "</div>";
echo "</form>";
if (isset($_POST['logout'])){
    echo "<script>alert('Successfully Logged-out')</script>";
    echo "<script>window.location.href='index.php'</script>";
    session_destroy();

}
if (isset($_POST['window1'])){
    if ($_SESSION['win']='1'){
           echo "<script>alert('Redirecting to Window 1')</script>";
    echo "<script>window.location.href='admin.php'</script>";
    }
}
if (isset($_POST['window2'])){
    if ($_SESSION['win']='2'){
           echo "<script>alert('Redirecting to Window 2')</script>";
    echo "<script>window.location.href='admin2.php'</script>";
    } 
} 
if (isset($_POST['window3'])){
    if ($_SESSION['win']='3'){
           echo "<script>alert('Redirecting to Window 3')</script>";
    echo "<script>window.location.href='admin3.php'</script>";
    } 
} 
if (!isset($_SESSION['anti'])){
    echo "<script>alert('Please Login first!')</script>";
    echo "<script>window.location.href='index.php'</script>";
}
?>
</div>
    <div class='foot'>
        <f1>Mikael<f1/>
</div>
</body>