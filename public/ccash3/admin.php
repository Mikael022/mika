<form action='#' method='post'>
<ul>
    <div class='navs'>
  <li><a><input type='submit' name='acc' value='Accounts'  style='background-color: transparent;color:white;font-size:12px;border:none;'></a></li>
  <li><a><input type='submit' name='add' value='Add User' style='background-color: transparent;color:white;font-size:12px;border:none'></a></li>
  <li><a><input type='submit' name='addbal' value='Cash to Ccash' style='background-color: transparent;color:white;font-size:12px;border:none'></a></li>
  <li><a><input type='submit' name='request' value='Requests' style='background-color: transparent;color:white;font-size:12px;border:none'></a></li>
  <li><a><input type='submit' name='transactions' value='Transactions' style='background-color: transparent;color:white;font-size:12px;border:none'></a></li>
  <li><a><input type='submit' name='archive' value='Archive' style='background-color: transparent;color:white;font-size:12px;border:none'></a></li>
  <li><a><input type='submit' name='logout' value='Logout' style='background-color: transparent;color:white;font-size:12px;border:none'></a></li>
</div>
</ul>
</form>

<?php
session_start();
date_default_timezone_set('Asia/Manila');
$_SESSION['logintime'] = date("Ymd");
include 'config.php';
include 'admincss.php';

if (isset($_POST['logout'])){
    echo "<script>alert('Successfully Logged-out')</script>";
    echo "<script>window.location.href='index.php'</script>";
    session_destroy();
}
if (!isset($_SESSION['anti1'])){
    echo "<script>alert('Please Login first!')</script>";
    echo "<script>window.location.href='index.php'</script>";
}
if ($_SESSION['deact'] == '1'){
    echo "<script>alert('Account is currently not active')</script>";
    echo "<script>window.location.href='index.php'</script>";
    session_destroy();
}
if (isset($_POST['acc'])){
$query = mysqli_query($con,"SELECT * from accounts where userlevel='user'");
echo "<form action='#' method='post'>";
?>
<div class='search1'>
<input type='text' name='search' placeholder='Enter Student Number' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>
</div>

<input type='submit' name='subsearch' Value='Search' style='border-radius: 1px;
border-color: maroon;
box-shadow: 10px 10px 20px black;
margin: 0;position: absolute;top: 19.3%;left: 60%;transform: translate(-50%, -50%);'>  
<?php

echo "<table border='1'>";
echo "<th>#</th>";
echo "<th>Student Number</th>";
echo "<th>User Level</th>";
echo "<th>Balance</th>";
echo "<th>Status</th>";
echo "<th>Action</th>";
$counter=1;
while ($QR = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>{$counter}</td>";
    echo "<td>{$QR['stunum']}</td>";
    echo "<td>{$QR['userlevel']}</td>"; 
    echo "<td>{$QR['balance']}</td>";
    echo "<td>{$QR['status']}</td>";
    echo "<td>"."<a href='userlanding.php?id={$QR['id']}'><input type='button' value='View'></a>"."</td>";
$counter++;
echo "</tr>";

}
echo "</table>";
echo "</form>";
}
if (isset($_POST['subsearch'])){
 echo "<form action='#' method='post'>";
ECHO "<div class='search1'>";
echo "<input type='text' name='search' placeholder='Enter Student Number'>";
echo "</div>";
?>
<div class='search2'>
<input type='submit' name='subsearch' Value='Search' style='margin: 0;position: absolute;top: 19.3%;left: 60%;transform: translate(-50%, -50%);box-shadow: 10px 10px 20px black;'>  
</div>
<?php
echo "</form>";
    $query1234 = mysqli_query($con,"SELECT * from accounts where userlevel='user' and stunum='".$_POST['search']."'");
    echo "<form action='#' method='post'>";
    echo "<table border='1'>";
echo "<th>#</th>";
echo "<th>Student Number</th>";
echo "<th>User Level</th>";
echo "<th>Balance</th>";
echo "<th>Status</th>";
echo "<th>Action</th>";
$counter=1;
while ($QR = mysqli_fetch_array($query1234)){
    echo "<tr>";
    echo "<td>{$counter}</td>";
    echo "<td>{$QR['stunum']}</td>";
    echo "<td>{$QR['userlevel']}</td>"; 
    echo "<td>{$QR['balance']}</td>";
    echo "<td>{$QR['status']}</td>";
    echo "<td>"."<a href='userlanding.php?id={$QR['id']}'><input type='button' value='View'></a>"."</td>";
$counter++;
echo "</tr>";

}
echo "</table>";
if (empty($_POST['search'])){
    $query = mysqli_query($con,"SELECT * from accounts where userlevel='user'");
echo "<form action='#' method='post'>";
?>
<div class='search1'>
<input type='text' name='search' placeholder='Enter Student Number' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>
</div>

<input type='submit' name='subsearch' Value='Search' style='border-radius: 1px;
border-color: maroon;
box-shadow: 10px 10px 20px black;
margin: 0;position: absolute;top: 19.3%;left: 60%;transform: translate(-50%, -50%);'>  
<?php

echo "<table border='1'>";
echo "<th>#</th>";
echo "<th>Student Number</th>";
echo "<th>User Level</th>";
echo "<th>Balance</th>";
echo "<th>Status</th>";
echo "<th>Action</th>";
$counter=1;
while ($QR = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>{$counter}</td>";
    echo "<td>{$QR['stunum']}</td>";
    echo "<td>{$QR['userlevel']}</td>"; 
    echo "<td>{$QR['balance']}</td>";
    echo "<td>{$QR['status']}</td>";
    echo "<td>"."<a href='userlanding.php?id={$QR['id']}'><input type='button' value='View'></a>"."</td>";
$counter++;
echo "</tr>";

}
echo "</table>";
}
echo "</form>";
}
echo "<form action='#' method='post'>";
if (isset($_POST['add'])){
    echo "<section>";
    echo "<div class='div-add'>";
    echo "<h1><b>Add User</b><h1>";
    echo "<br><input type='text' name='num' placeholder='Enter Student Number'></br>";
    echo "<br><input type='password' name='pass' placeholder='Enter Password'></br>";
    echo "<br><input type='password' name='confirm' placeholder='Confirm Password'></br>";
    echo "</div>";
    echo "</section>";
?>
 <div class='div-add2'>
    <br><input type='submit' name='adds' value='Add User' style=' margin: 0;position: absolute;top: 73%;left: 50%;transform: translate(-50%, -50%);'></br>
    </div>
<?php
}

if (isset($_POST['adds'])){
if (!empty($_POST['num']) && !empty($_POST['pass']) && !empty($_POST['confirm'])){
if ($_POST['confirm'] == $_POST['pass']){
     $queryadd=mysqli_query($con,"INSERT INTO accounts(stunum,password) VALUES ('".$_POST['num']."','".$_POST['confirm']."')");
        echo "<script>alert('Successfully Added')</script>";
}
else{
    echo "<script>alert('Confirm password did not match to your password entered')</script>";
}
}
else{
    echo "<script>alert('Please Fill-Out Empty Fields')</script>";
}
}

if (isset($_POST['addbal'])){
    echo "<section>";
    echo "<div class='div-addbal'>";
    echo "<h1><b>Cash to C-Cash</b></h1>";
    echo "<br><input type='text' name='num' placeholder='Enter Student Number'></br>";
    echo "<br><input type='text' name='amount' placeholder='Enter Amount'></br>";
    echo "</div>";
    echo "</section>";
?>
    <input type='submit' name='addbalance' value='Add' style=' margin: 0;position: absolute;top: 68%;left: 50%;transform: translate(-50%, -50%);'>
<?php
}
if (isset($_POST['addbalance'])){
    if (!empty($_POST['num']) && !empty($_POST['amount'])){
        $QR =mysqli_query($con,"SELECT * from accounts where stunum = '".$_POST['num']."'");
        $Qz = mysqli_fetch_array($QR);
         $rowSQL = mysqli_query($con, "SELECT MAX( id ) AS max FROM `logs`" );
    $row = mysqli_fetch_array( $rowSQL );
    $largestNumber = $row['max'];
        $tran = $_SESSION['logintime'].$largestNumber+1;
        $total = $_POST['amount'] + $Qz['balance'];  
    $queryup0=mysqli_query($con,"UPDATE accounts set balance ='".$total."' WHERE stunum = '".$_POST['num']."'");
    $plus="+";
    $log = mysqli_query($con,"INSERT into logs(transaction,stnum,amount,addsub) values ('".$tran."','".$_POST['num']."','".$_POST['amount']."','".$plus."')");
    $log2 = mysqli_query($con,"INSERT into adminlog(transaction,stnum,amount,addsub) values ('".$tran."','".$_POST['num']."','".$_POST['amount']."','".$plus."')");
    echo "<script>alert('Successfully Added To Balance')</script>";
}
 else{
    echo "<script>alert('Please Fill-Out Empty Fields')</script>";}
}

if (isset($_POST['request'])){
    //put our CSV on a variable     
$CSV = "https://docs.google.com/spreadsheets/d/e/2PACX-1vTrIoO_Ud91WnJ5IbMvXEqFpdmlELcrHM_BJg1QjOhy_Xd3UghkWx5uxTpqYeXaXIfDf6yoFGIFXw88/pub?gid=791806717&single=true&output=csv"; 
//Get CSV contents
$GCSV = file_get_contents($CSV); //file_get_contents(filename)
//Explode is used to Break a string into an array
$Cell = explode("\r\n", $GCSV); //explode(delimiter, string)
//temporary container
$data = array();
$row = 0;
$ctr = 0; //counter
$ctr = 0; //counter
//------------------------------------------------------------------------
//Table for displaying the user inputs
echo "<div class='scroll'>";

echo "<table class='subm' cellpadding='5' border='1' style='border-collapse: collapse'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Student Number</th>";
        echo "<th>Receipt</th>";
        echo "<th>Action</th>";
        echo "</tr>";
//foreach loop is perfect for looping an array

foreach ($Cell as $value) {
     if($Cell!=NULL){//test if si value ay Not Empty
        $row++;
        if ($row==1){continue;} //Skip the first row
        $data = str_getcsv($value); //str_getcsv(input)
        $Tstamp = $data[0];

        $stnumber = $data[2];
        $_SESSION['stnumb'] = $stnumber; 
        $receipt = $data[3];
        $link = substr($receipt, 33); 
        $_SESSION['receipts'] = $link;
        $links = "https://drive.google.com/file/d/{$link}/preview";
        $_SESSION['linkss'] = $links;
        $Qzz1 = mysqli_query($con, "SELECT * from pending where stnum='".$_SESSION['stnumb']."' and receipts='".$_SESSION['receipts']."'");
        $QRzz1= mysqli_num_rows($Qzz1);
        $Qzz1s = mysqli_query($con, "SELECT * from confirmed where stnum='".$_SESSION['stnumb']."' and receipts='".$_SESSION['receipts']."'");
        $QRzz1s= mysqli_num_rows($Qzz1s);
        if ($QRzz1<=0){
             
                if ($QRzz1s>=1){

                   
        }
        else{
            $conf = mysqli_query($con,"INSERT INTO pending(stnum,receipts) values ('".$_SESSION['stnumb']."','".$_SESSION['receipts']."')");
        }
                }
        else{

        }
$QR1s=mysqli_query($con,"SELECT * FROM pending");
}
}
echo "<tr>";
while ($Q1s2=mysqli_fetch_array($QR1s)){
    $stid="Confirm".$Q1s2['id'];
        echo "<td>{$ctr}</td>";
        echo "<td>{$Q1s2['stnum']}</td>";
        echo "<td><iframe src='https://drive.google.com/file/d/{$Q1s2['receipts']}/preview' width='150' height='150'></iframe></td>";
        echo "<td><input type='submit' name='Confirmed' value='{$stid}'></td>";
        $ctr++;       
        echo "</tr>";   
    }
    ?>

    </table>
    </div>
    <div class='requestsend'>
    <input type='text' name='numnum' placeholder='Enter Student Number' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>
    <input type='text' name='amou' placeholder='Enter Amount' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>
    </div>
    <div class='subsend'>
    <input type='submit' name='send' value='Send Ccash' style='border-color: maroon;
box-shadow: 10px 10px 20px black;margin: 0;position: absolute;top: 87%;left: 50%;transform: translate(-50%, -50%)  ;'>
    </div>
    <?php
        }//if value is not null 

    //}//foreach
if (isset($_POST['send'])){
    $rowSQL = mysqli_query($con, "SELECT MAX( id ) AS max FROM `logs`" );
    $row = mysqli_fetch_array( $rowSQL );
    $largestNumber = $row['max'];
    if (!empty($_POST['numnum']) && !empty($_POST['amou'])){
        $QR2 =mysqli_query($con,"SELECT * from accounts where stunum = '".$_POST['numnum']."'");
        $Qz2 = mysqli_fetch_array($QR2);
        $total1 = $_POST['amou'] + $Qz2['balance']; 
        $tran = $_SESSION['logintime'].$largestNumber+1;
        $totalup = mysqli_query($con,"UPDATE accounts set balance ='".$total1."' WHERE stunum = '".$_POST['numnum']."'");
        $plus1="+";
        $log = mysqli_query($con,"INSERT into logs(transaction,stnum,amount,addsub) values ('".$tran."','".$_POST['numnum']."','".$_POST['amou']."','".$plus1."')");
        $log2 = mysqli_query($con,"INSERT into adminlog(transaction,stnum,amount,addsub) values ('".$tran."','".$_POST['num']."','".$_POST['amount']."','".$plus."')");
    echo "<script>alert('Successfully Added Sent')</script>";
}
}
   if (isset($_POST['Confirmed'])){ 
        $stid=str_replace("Confirm", "", $_POST['Confirmed']);
        $Qzz = mysqli_query($con, "SELECT * from confirmed where receipts='".$_SESSION['linkss']."'");
        $QRzz= mysqli_num_rows($Qzz);
        if ($QRzz<1){
            $querydel = mysqli_query($con,"DELETE from pending where id='".$stid."'");
$conf1 = mysqli_query($con,"INSERT INTO confirmed(stnum,receipts) values ('".$_SESSION['stnumb']."','".$_SESSION['receipts']."')");
echo "<script>alert('Successfully Confirmed')</script>";
        }
        else{

        }
        
    }
    if (isset($_POST['transactions'])){
        ?>
<div class='search8'>
<input type='text' name='search8' placeholder='Enter Transaction Number' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>
</div>
<div class='search7'>
<input type='text' name='search7' placeholder='Enter Student Number' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>
</div>

<input type='submit' name='subsearch7' Value='Search' style='border-radius: 1px;
border-color: maroon;
box-shadow: 10px 10px 20px black;
margin: 0;position: absolute;top: 19.3%;left: 69%;transform: translate(-50%, -50%);'>  
<?php
    $QR1s=mysqli_query($con,"SELECT * FROM adminlog");
    echo "<form action='#' method='post'>";
    echo "<table class='subm' cellpadding='5' border='1' style='border-collapse: collapse'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Transaction No.</th>";
        echo "<th>Student Number</th>";
        echo "<th>Amount</th>";
        echo "<th>Date</th>";
        echo "</tr>";
    $ctr=1;
    while ($Q1s2=mysqli_fetch_array($QR1s)){
        echo "<td>{$ctr}</td>";
        echo "<td>{$Q1s2['transaction']}</td>";
        echo "<td>{$Q1s2['stnum']}</td>";
        echo "<td>".$Q1s2['addsub'].$Q1s2['amount']."</td>";
        echo "<td>{$Q1s2['datelogs']}</td>";
        $ctr++;       
        echo "</tr>";   
    }
    echo "</table>";
    echo "</form>";
 }

if (isset($_POST['subsearch7'])){
    if (!empty($_POST['search7']) && empty($_POST['search8'])){
 echo "<form action='#' method='post'>";

?>
<div class='search8'>
<input type='text' name='search8' placeholder='Enter Transaction Number' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>
</div>
<div class='search7'>
<input type='text' name='search7' placeholder='Enter Student Number' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>
</div>
<div class='search2'>
<input type='submit' name='subsearch7' Value='Search' style='border-radius: 1px;
border-color: maroon;
box-shadow: 10px 10px 20px black;
margin: 0;position: absolute;top: 19.3%;left: 69%;transform: translate(-50%, -50%);'>   
</div>
<?php
echo "</form>";
    $query1234 = mysqli_query($con,"SELECT * from adminlog where stnum='".$_POST['search7']."'");
    echo "<form action='#' method='post'>";
    echo "<table border='1'>";
       echo "<th>#</th>";
        echo "<th>Transaction No.</th>";
        echo "<th>Student Number</th>";
        echo "<th>Amount</th>";
        echo "<th>Date</th>";
        echo "</tr>";
$counter=1;
while ($Q1s2=mysqli_fetch_array($query1234)){
     echo "<td>{$counter}</td>";
        echo "<td>{$Q1s2['transaction']}</td>";
        echo "<td>{$Q1s2['stnum']}</td>";
        echo "<td>".$Q1s2['addsub'].$Q1s2['amount']."</td>";
        echo "<td>{$Q1s2['datelogs']}</td>";
        $counter++;       
        echo "</tr>";   
    }
echo "</table>";
echo "</form>";
}
else{
  ?>
<div class='search8'>
<input type='text' name='search8' placeholder='Enter Transaction Number' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>
</div>
<div class='search7'>
<input type='text' name='search7' placeholder='Enter Student Number' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>
</div>
<div class='search2'>
<input type='submit' name='subsearch7' Value='Search' style='border-radius: 1px;
border-color: maroon;
box-shadow: 10px 10px 20px black;
margin: 0;position: absolute;top: 19.3%;left: 69%;transform: translate(-50%, -50%);'>   
</div>
<?php
echo "</form>";
    $query1234 = mysqli_query($con,"SELECT * from adminlog where transaction='".$_POST['search8']."'");
    echo "<form action='#' method='post'>";
    echo "<table border='1'>";
       echo "<th>#</th>";
        echo "<th>Transaction No.</th>";
        echo "<th>Student Number</th>";
        echo "<th>Amount</th>";
        echo "<th>Date</th>";
        echo "</tr>";
$counter=1;
while ($Q1s2=mysqli_fetch_array($query1234)){
     echo "<td>{$counter}</td>";
        echo "<td>{$Q1s2['transaction']}</td>";
        echo "<td>{$Q1s2['stnum']}</td>";
        echo "<td>".$Q1s2['addsub'].$Q1s2['amount']."</td>";
        echo "<td>{$Q1s2['datelogs']}</td>";
        $counter++;       
        echo "</tr>";   
    }
echo "</table>";
echo "</form>";  
}
if (empty($_POST['search7']) && empty($_POST['search8'])){
    echo "<form action='#' method='post'>";
        ?>
<div class='search8'>
<input type='text' name='search8' placeholder='Enter Transaction Number' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>
</div>
<div class='search7'>
<input type='text' name='search7' placeholder='Enter Student Number' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>
</div>

<input type='submit' name='subsearch7' Value='Search' style='border-radius: 1px;
border-color: maroon;
box-shadow: 10px 10px 20px black;
margin: 0;position: absolute;top: 19.3%;left: 69%;transform: translate(-50%, -50%);'>  
<?php
    $QR1s=mysqli_query($con,"SELECT * FROM adminlog");
    echo "<form action='#' method='post'>";
    echo "<table class='subm' cellpadding='5' border='1' style='border-collapse: collapse'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Transaction No.</th>";
        echo "<th>Student Number</th>";
        echo "<th>Amount</th>";
        echo "<th>Date</th>";
        echo "</tr>";
    $ctr=1;
    while ($Q1s2=mysqli_fetch_array($QR1s)){
        echo "<td>{$ctr}</td>";
        echo "<td>{$Q1s2['transaction']}</td>";
        echo "<td>{$Q1s2['stnum']}</td>";
        echo "<td>".$Q1s2['addsub'].$Q1s2['amount']."</td>";
        echo "<td>{$Q1s2['datelogs']}</td>";
        $ctr++;       
        echo "</tr>";   
    }
    echo "</table>";
    echo "</form>";
}
}
if (isset($_POST['archive'])){
        ?>
<div class='search1'>
<input type='text' name='search10' placeholder='Enter Student Number' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>
</div>

<input type='submit' name='subsearch11' Value='Search' style='border-radius: 1px;
border-color: maroon;
box-shadow: 10px 10px 20px black;
margin: 0;position: absolute;top: 19.3%;left: 60%;transform: translate(-50%, -50%);'>
<?php
    $QR1s3=mysqli_query($con,"SELECT * FROM archive");
    echo "<form action='#' method='post'>";
    echo "<table class='subm' cellpadding='5' border='1' style='border-collapse: collapse'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Student Number</th>";
        echo "<th>Password</th>";
        echo "<th>Balance</th>";
        echo "<th>Action</th>";
        echo "</tr>";
    $ctr=1;
    while ($Q1s23=mysqli_fetch_array($QR1s3)){
        $stid3="Recover ID:".$Q1s23['id'];
        $stid4="Delete ID:".$Q1s23['id'];
        echo "<td>{$ctr}</td>";
        echo "<td>{$Q1s23['stunum']}</td>";
        echo "<td>{$Q1s23['password']}</td>";
        echo "<td>".$Q1s23['balance'];
        echo "<td><input type='submit' name='recover' value='{$stid3}'><input type='submit' name='perma' value='{$stid4}'></td>";
        $ctr++;       
        echo "</tr>";   
    }
    echo "</table>";
    echo "</form>";
}
if (isset($_POST['subsearch11'])){
    if (!empty($_POST['search10'])){
 echo "<form action='#' method='post'>";

?>
<div class='search1'>
<input type='text' name='search10' placeholder='Enter Student Number' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>
</div>

<input type='submit' name='subsearch11' Value='Search' style='border-radius: 1px;
border-color: maroon;
box-shadow: 10px 10px 20px black;
margin: 0;position: absolute;top: 19.3%;left: 60%;transform: translate(-50%, -50%);'>
</div>
<?php
echo "</form>";
    $query1234 = mysqli_query($con,"SELECT * from archive where stunum='".$_POST['search10']."'");
    echo "<form action='#' method='post'>";
    echo "<table border='1'>";
      echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Student Number</th>";
        echo "<th>Password</th>";
        echo "<th>Balance</th>";
        echo "<th>Action</th>";
        echo "</tr>";
$counter=1;
while ($Q1s23=mysqli_fetch_array($query1234)){
    $stid3="Recover ID:".$Q1s23['id'];
    $stid4="Delete ID:".$Q1s23['id'];
     echo "<td>{$counter}</td>";
        echo "<td>{$Q1s23['stunum']}</td>";
        echo "<td>{$Q1s23['password']}</td>";
        echo "<td>".$Q1s23['balance'];
        echo "<td><input type='submit' name='recover' value='{$stid3}'><input type='submit' name='perma' value='{$stid4}'></td>";
        $counter++;       
        echo "</tr>";   
    }
echo "</table>";
echo "</form>";
}
 
else{
    echo "<form action='#' method='post'>";
        ?>
<div class='search1'>
<input type='text' name='search10' placeholder='Enter Student Number' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>
</div>

<input type='submit' name='subsearch11' Value='Search' style='border-radius: 1px;
border-color: maroon;
box-shadow: 10px 10px 20px black;
margin: 0;position: absolute;top: 19.3%;left: 60%;transform: translate(-50%, -50%);'>
<?php
    $QR1s345=mysqli_query($con,"SELECT * FROM archive");
    echo "<form action='#' method='post'>";
    echo "<table class='subm' cellpadding='5' border='1' style='border-collapse: collapse'>";
          echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Student Number</th>";
        echo "<th>Password</th>";
        echo "<th>Balance</th>";
        echo "<th>Action</th>";
        echo "</tr>";
    $ctr=1;
    while ($Q1s2323=mysqli_fetch_array($QR1s345)){
        $stid3="Recover ID:".$Q1s2323['id'];
        $stid4="Delete ID:".$Q1s2323['id'];
        echo "<td>{$ctr}</td>";
        echo "<td>{$Q1s2323['stunum']}</td>";
        echo "<td>{$Q1s2323['password']}</td>";
        echo "<td>".$Q1s2323['balance'];
        echo "<td><input type='submit' name='recover' value='{$stid3}'><input type='submit' name='perma' value='{$stid4}'></td>";
        $ctr++;       
        echo "</tr>";   
    }
    echo "</table>";
    echo "</form>";
}
}
if (isset($_POST['recover'])){
    $stid3=str_replace("Recover ID:", "", $_POST['recover']);
        $query2 = mysqli_query($con,"SELECT * from archive where id='".$stid3."'");
  $QR2 = mysqli_fetch_array($query2);
  $querymove234=mysqli_query($con,"INSERT INTO accounts(stunum,password,balance) VALUES ('".$QR2['stunum']."','".$QR2['password']."','".$QR2['balance']."')");
   $querydel234=mysqli_query($con,"DELETE from archive where id='".$stid3."'");
  echo "<script>alert('Successfully Recovered')</script>";
  echo "<script>window.location.href='admin.php'</script>";
    }

if (isset($_POST['perma'])){
    $stid4=str_replace("Delete ID:", "", $_POST['perma']);
        $query223 = mysqli_query($con,"SELECT * from archive where id='".$stid4."'");
  $QR223 = mysqli_fetch_array($query223);
  $querydel23423=mysqli_query($con,"DELETE from archive where id='".$stid4."'");
  echo "<script>alert('Successfully Permenently Deleted')</script>";
  echo "<script>window.location.href='admin.php'</script>";
    }


?>

