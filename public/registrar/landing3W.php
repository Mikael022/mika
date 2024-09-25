<?php
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

      margin: 0;
    position: absolute;
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
        <h2><?php echo "Registrar System<br>Viewing and Action"?></h2>
</div>
<body>

<?php
        $query2 = mysqli_query($con,"SELECT * from regis3 where id='".$_GET['id']."'");
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
echo "<th>Transaction Number</th>";
echo "<th>Name</th>";
echo "<th>Address</th>";
echo "<th>Contact Number</th>";
echo "<th>Transaction Description</th>";
echo "<th>Date</th>";
echo "<th>Price</th>";
echo "<th>Admin</th>";
echo "<th>Action</th>";
//echo "<tbody>";
while ($QRb = mysqli_fetch_array($query2)){
    echo "<tr>";
     echo "<td>"."<input type='text' name='ustra' value='{$QRb['Transaction_no']}'>"."</td>";
    echo "<td>"."<input type='text' name='usname' value='{$QRb['name']}'>"."</td>";
    echo "<td>"."<input type='text' name='usadd' value='{$QRb['address']}'>"."</td>";
    echo "<td>"."<input type='text' name='uscont' value='{$QRb['contact_no']}'>"."</td>";
    echo "<td>"."<input type='text' name='ustrandes' value='{$QRb['Transac_desc']}'>"."</td>";
    echo "<td>{$QRb['dates']}</td>";
    echo "<td>"."<input type='text' name='usprice' value='{$QRb['price']}'>"."</td>";
    echo "<td>"."<input type='text' name='usadm' value='{$QRb['admin']}'>"."</td>";
    echo "<td><input type='submit' name='update' value='Update'><input type='submit' name='remove' value='Remove'></td>";
    echo "</tr>";
}
if (isset($_POST['update'])){
$queryup0=mysqli_query($con,"UPDATE regis3 set name ='".$_POST['usname']."'WHERE id = '".$_GET['id']."'");
$queryup1=mysqli_query($con,"UPDATE regis3 set address ='".$_POST['usadd']."'WHERE id = '".$_GET['id']."'");
$queryup2=mysqli_query($con,"UPDATE regis3 set contact_no ='".$_POST['uscont']."'WHERE id = '".$_GET['id']."'");
$queryup2=mysqli_query($con,"UPDATE regis3 set transac_desc ='".$_POST['ustrandes']."'WHERE id = '".$_GET['id']."'");
$queryup3=mysqli_query($con,"UPDATE regis3 set price ='".$_POST['usprice']."'WHERE id = '".$_GET['id']."'");
echo "<script>alert('Successfully Updated')</script>";
}
if (isset($_POST['remove'])){
    $QRa = mysqli_fetch_array($query2);
      $queryarc=mysqli_query($con,"INSERT INTO archive (Transaction_no,name,address,contact_no,Transac_desc,price,admin) VALUES ('".$_POST['ustra']."','".$_POST['usname']."','".$_POST['usadd']."','".$_POST['uscont']."','".$_POST['ustrandes']."','".$_POST['usprice']."','".$_POST['usadm']."')");
    $querydel=mysqli_query($con,"DELETE FROM regis3 WHERE id='".$_GET['id']."'");
  echo "<script>alert('Successfully Removed')</script>";
  echo "<script>window.location.href='admin3.php'</script>";
}
if (isset($_POST['logout'])){
    echo "<script>alert('Successfully Logged-out')</script>";
    echo "<script>window.location.href='index.php'</script>";
    session_destroy();
}
if (isset($_POST['Home'])){
    echo "<script>window.location.href='admin3.php'</script>";
}
if (isset($_POST['back'])){
    echo "<script>window.location.href='admin3.php'</script>";
}
?>
</div>
    <div class='foot'>
        <f1>Mikael<f1/>
</div>

</body>