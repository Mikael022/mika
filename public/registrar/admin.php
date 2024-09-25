<?php
session_start();
date_default_timezone_set('Asia/Manila');
$_SESSION['logintime'] = date("Ymd");
include 'stylereg.php';
include 'stylereg2.php';
include 'configreg.php';
include 'tables1.php';
echo "</div class='admv'>";
if (isset($_POST['admview'])){
    $logt=mysqli_query($con,"SELECT * from admins");
    echo "<form action='#' method='post'>";
    echo "<table border='1'>";
    echo "<th>#</th>";
    echo "<th>Username</th>";
    echo "<th>Recent Logged-in</th>";
   
    $uscounter=1;
    while ($QRl = mysqli_fetch_array($logt)){
        echo "<tr>";    
        echo "<td>{$uscounter}</td>";
        echo "<td>{$QRl['username']}</td>";
        echo "<td>{$QRl['logtime']}</td>";
    
        echo "</tr>";
        $uscounter++;
    }
}
echo "</div>";
$rowSQL = mysqli_query($con, "SELECT MAX( id ) AS max FROM `maindb`" );
    $row = mysqli_fetch_array( $rowSQL );
    $largestNumber = $row['max'];
if (isset($_POST['adds'])){
  if(!empty($_POST['rnames']) && !empty($_POST['raddress']) && !empty($_POST['rcontact']) && !empty($_POST['rtransdesc']) && !empty($_POST['rprice'])){
    $trans = $_SESSION['logintime']. $largestNumber+1;
    $queryadd=mysqli_query($con,"INSERT INTO regis1 (Transaction_no,name,address,contact_no,Transac_desc,price,admin) VALUES ('".$trans."','".$_POST['rnames']."','".$_POST['raddress']."','".$_POST['rcontact']."','".$_POST['rtransdesc']."','".$_POST['rprice']."','".$_SESSION['anti']."')");
    $queryaddMain=mysqli_query($con,"INSERT INTO maindb (Transaction_no,name,address,contact_no,Transac_desc,price,admin) VALUES ('".$trans."','".$_POST['rnames']."','".$_POST['raddress']."','".$_POST['rcontact']."','".$_POST['rtransdesc']."','".$_POST['rprice']."','".$_SESSION['anti']."')");
        echo "<script>alert('Successfully Added')</script>";
    }
   else{
           echo "<script>alert('Please fill-out empty fields')</script>";}
       }
if (isset($_POST['viewrec'])){
        $query2 = mysqli_query($con,"SELECT * from regis1");
        echo "<div class='table1'>";
echo "<form action='#' method='post'>";
echo "<table border='1'>";
echo "<th>#</th>";
echo "<th>Transaction Number</th>";
echo "<th>Name</th>";
echo "<th>Transaction Description</th>";
echo "<th>Date</th>";
echo "<th>Admin</th>";
echo "<th>Action</th>";
$counterb=1;
while ($QRb = mysqli_fetch_array($query2)){
    echo "<tr>";
    echo "<td>{$counterb}</td>";
    echo "<td>{$QRb['Transaction_no']}</td>";
    echo "<td>{$QRb['name']}</td>";
    echo "<td>{$QRb['Transac_desc']}</td>";
    echo "<td>{$QRb['dates']}</td>";
     echo "<td>{$QRb['admin']}</td>";
    echo "<td>"."<a href='landing.php?id={$QRb['id']}'><input type='button' value='View'></a>"."</td>";
    echo "</tr>";
$counterb++;
}
 echo "</div>";
}

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
        <h2><?php echo "Registrar System<br>windows 1"?></h2>
        </div>
</div>

</div>
<div class="main">

</div>
<body>

<?php
echo "<div clas='eve'>";
echo "<form action='#' method='post'>";
echo "<div class='div-11'>";
echo "<input type='submit' name='addrec' value='Add Record'>";
echo "</div>";
echo "<div class='div-22'>";
echo "<input type='submit' name='viewrec' value='View Records'>";
echo "</div>";
echo "<div class='div-33'>";
echo "<input type='submit' name='admview' value='View Admins'>";
echo "</div>";
echo "<div class='div-44'>";
echo "<input type='submit' name='logout' value='Logout'>";
echo "</div>";
echo "<div class='div-69'>";
echo "<input type='submit' name='archive' value='Archive'>";
echo "</div>";
echo "<div class='div-79'>";
echo "<input type='submit' name='Home' value='Home'>";
echo "</div>";
echo "<form>";
echo "</div>";
if (isset($_POST['archive'])){
    echo "<script>window.location.href='archivef.php'</script>";
}
if (isset($_POST['Home'])){
 echo "<script>window.location.href='windows.php'</script>";
    }
if (isset($_POST['addrec'])){
    echo "<div class='rec'>";
echo "<form action='#' method='post'>";
echo "<div class='hell'>";
echo "<br><input type='text' name='rnames' placeholder='Enter Name'></br>";
echo "<br><input type='text' name='raddress' placeholder='Enter Address'></br>";
echo "<br><input type='text' name='rcontact' placeholder='Enter Contact Number'></br>";
echo "<br><input type='text' name='rtransdesc' placeholder='Enter Transaction Description'></br>";
echo "<br><input type='text' name='rprice' placeholder='Enter Price'></br>";
echo "</div>";
echo "<div class='div-55'>";
echo "<br><input type='submit' name='adds' value='Add'>";
echo "</div>";
echo "</div>";
echo "</form>";


}
if (!isset($_SESSION['anti'])){
    echo "<script>alert('Please Login first!')</script>";
    echo "<script>window.location.href='index.php'</script>";
}
if (isset($_POST['logout'])){
    echo "<script>alert('Successfully Logged-out')</script>";
    echo "<script>window.location.href='index.php'</script>";
    session_destroy();

}

?>
</div>
    <div class='foot'>
        <f1>Mikael<f1/>
</div>

</body>