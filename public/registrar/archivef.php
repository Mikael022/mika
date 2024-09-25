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
<style>
    table{
 width: 35%;
    height:50%;
      margin: 0;
    position: absolute;
    display: block;
    top: 50%;
    left: 50%;    
    transform: translate(-50%, -50%)  ;
    }
    </style>
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


       <h2><?php echo "Registrar System<br>Archive"?></h2>

</div>
</div>
<body>
<?php
           $query2 = mysqli_query($con,"SELECT * from archive");
echo "<form action='#' method='post'>";
echo "<div class='div-44'>";
echo "<input type='submit' name='logout' value='Logout'>";
echo "</div>";
echo "<div class='div-69'>";
echo "<input type='submit' name='Home' value='Home'>";
echo "</div>";
echo "<div class='div-11'>";
echo "<input type='submit' name='back' value='Back'>";
echo "</div>";
echo "<table border='1'>";
echo "<th>#</th>";
echo "<th>Transaction Number</th>";
echo "<th>Name</th>";
echo "<th>Transaction Description</th>";
echo "<th>Date</th>";
echo "<th>Admin</th>";
echo "<th>Action</th>";
$counter=1;
while ($QRb = mysqli_fetch_array($query2)){
        echo "<tr>";
    echo "<td>{$counter}</td>";
    echo "<td>{$QRb['Transaction_no']}</td>";
    echo "<td>{$QRb['name']}</td>";
    echo "<td>{$QRb['Transac_desc']}</td>";
    echo "<td>{$QRb['dates']}</td>";
     echo "<td>{$QRb['admin']}</td>";
    echo "<td>"."<a href='landing2.php?id={$QRb['id']}'><input type='button' value='View'></a>"."</td>";
    echo "</tr>";
$counter++;


    }

if (isset($_POST['logout'])){
    echo "<script>alert('Successfully Logged-out')</script>";
    echo "<script>window.location.href='index.php'</script>";
    session_destroy();
}
if (isset($_POST['Home'])){
    if ($_SESSION['win'] == '2'){
    echo "<script>window.location.href='admin2.php'</script>";}
      if ($_SESSION['win'] == '1'){
    echo "<script>window.location.href='admin.php'</script>";}
      if ($_SESSION['win'] == '3'){
    echo "<script>window.location.href='admin3.php'</script>";}
}

if (isset($_POST['back'])){
    echo "<script>window.location.href='admin.php'</script>";
}



?>


</div>
    <div class='foot'>
        <f1>Mikael<f1/>
</div>

</body>