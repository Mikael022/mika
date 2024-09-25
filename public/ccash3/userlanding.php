
<form action='#' method='post'>
<ul>
    <div class='navs'>
  <li><a><input type='submit' name='home' value='Home'  style='background-color: transparent;color:white;font-size:12px;border:none;'></a></li>
</div>
</ul>
</form>
<?php
include 'config.php';
include 'userlandingcss.php';
if (isset($_POST['home'])){
     echo "<script>window.location.href='admin.php'</script>";
}
echo "<div class='div-5'>";
    $query = mysqli_query($con,"SELECT * from accounts where id='".$_GET['id']."'");
$counter=1;
echo "<form action='#' method='post'>";
echo "<table border='1'>";
echo "<th>#</th>";
echo "<th>Student Number</th>";
echo "<th>Password</th>";
echo "<th>User Level</th>";
echo "<th>Balance</th>";
echo "<th>action</th>";
while ($QR = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>{$counter}</td>";
    echo "<td>"."<input type='text' name='usnum' value='{$QR['stunum']}'>"."</td>";
    echo "<td>"."<input type='text' name='uspass' value='{$QR['password']}'>"."</td>";
    echo "<td>"."<input type='text' name='ususer' value='{$QR['userlevel']}'>"."</td>";
    echo "<td>"."<input type='text' name='usbal' value='{$QR['balance']}'>"."</td>";
    echo "<td><input type='submit' name='upd' value='Update'><input type='submit' name='dlt' value='Delete' onclick='return confirm(\'Are you sure you want to delete this person?\')'><input type='submit' name='deact' value='Deactivate'><input type='submit' name='act' value='Activate'></td>";
    echo "<tr>";
    $counter++;
}
echo "</table>";
if (isset($_POST['dlt'])){
  $query2 = mysqli_query($con,"SELECT * from accounts where id='".$_GET['id']."'");
  $QR2 = mysqli_fetch_array($query2);
  $querymove=mysqli_query($con,"INSERT INTO archive(stunum,password,balance) VALUES ('".$QR2['stunum']."','".$QR2['password']."','".$QR2['balance']."')");
   $querydel=mysqli_query($con,"DELETE from accounts where id='".$_GET['id']."'");
  echo "<script>alert('Successfully Removed')</script>";
  echo "<script>window.location.href='admin.php'</script>";
}
if (isset($_POST['upd'])){
$queryup0=mysqli_query($con,"UPDATE accounts set stunum ='".$_POST['usnum']."'WHERE id = '".$_GET['id']."'");
$queryup3=mysqli_query($con,"UPDATE accounts set password ='".$_POST['uspass']."'WHERE id = '".$_GET['id']."'");
$queryup4=mysqli_query($con,"UPDATE accounts set userlevel ='".$_POST['ususer']."'WHERE id = '".$_GET['id']."'");
$queryup4=mysqli_query($con,"UPDATE accounts set balance ='".$_POST['usbal']."'WHERE id = '".$_GET['id']."'");
echo "<script>alert('Successfully Updated')</script>";
echo "<script>window.location.href='admin.php'</script>";
}
if (isset($_POST['deact'])){
$deacts = 'deactivated';
$queryup0=mysqli_query($con,"UPDATE accounts set status ='".$deacts."'WHERE id = '".$_GET['id']."'");

echo "<script>alert('Successfully Deactivated')</script>";
echo "<script>window.location.href='admin.php'</script>";
}
if (isset($_POST['act'])){
$acti = 'active';
$queryup010=mysqli_query($con,"UPDATE accounts set status ='".$acti."'WHERE id = '".$_GET['id']."'");

echo "<script>alert('Successfully Activated')</script>";
echo "<script>window.location.href='admin.php'</script>";
}
echo "</form>";
echo "</div>";

?>