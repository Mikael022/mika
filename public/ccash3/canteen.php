<form action='#' method='post'>
<ul>
    <div class='navs'>
    <li><a><input type='submit' name='canteenlog' value='Purchase History' onClick="document.sales1.submit();" style='background-color: transparent;color:white;font-size:12px;border:none'/></a></li>
        <li><a><input type='submit' name='invent' value='Inventory' onClick="document.sales1.submit();" style='background-color: transparent;color:white;font-size:12px;border:none'/></a></li>
    <li><a><input type='submit' name='logout' value='Logout' onClick="document.sales1.submit();" style='background-color: transparent;color:white;font-size:12px;border:none'/></a></li>
</div>
</ul>
</form>
<?php
session_start();
date_default_timezone_set('Asia/Manila');
$_SESSION['logintime1'] = date("Ymd");
include 'config.php';
include 'canteencss.php';


if (isset($_POST['logout'])){
    echo "<script>alert('Successfully Logged-out')</script>";
    echo "<script>window.location.href='index.php'</script>";
    session_destroy();
}
if (!isset($_SESSION['anti3'])){
    echo "<script>alert('Please Login first!')</script>";
    echo "<script>window.location.href='index.php'</script>";
}
if (isset($_POST['canteenlog'])){
    echo "<script>window.location.href='canteenhistory.php'</script>";
}
if (isset($_POST['invent'])){
    echo "<script>window.location.href='inventory.php'</script>";
}
?>
<script language="javascript">var p = false;</script>
<form action='#' method='post' name='sales1'>
<div class='div-infos'>;
<input type="text" id="bcvalue" name="barcodedata"  placeholder='Enter Product Code' value = "" onkeypress="return (event.charCode > 47 && event.charCode < 58)"style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>
<input type="text" name="quan"  placeholder='Enter Quantity' value = "" onkeypress="return (event.charCode > 47 && event.charCode < 58)"style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>
</div>
<input type='submit' name='additem' value='Add Item'onClick="document.sales1.submit();" style='border-color: maroon;
box-shadow: 10px 10px 20px black;  margin: 0;
    position: absolute;
    top: 19.3%;
    left: 65.4%;    
    transform: translate(-50%, -50%) ;'/>

</form>
<?php

if (isset($_POST['additem'])){
    if (!empty($_POST['barcodedata']) && !empty($_POST['quan'])){
    $QR1ss=mysqli_query($con,"SELECT * FROM inventory where product_code='".$_POST['barcodedata']."'");
    $Q1s2s=mysqli_fetch_array($QR1ss);
   
    $totalprice0=$Q1s2s['price']*$_POST['quan'];
$conf = mysqli_query($con,"INSERT INTO canteen(product_code,quantity,product_name,price) values ('".$Q1s2s['product_code']."','".$_POST['quan']."','".$Q1s2s['product_name']."','".$totalprice0."')");
}
else{
    echo "<script>alert('Fill-Out Empty Fields!')</script>";
}
}

$QR1s=mysqli_query($con,"SELECT * FROM canteen where status='1' ");
    echo "<form action='#' method='post'>";
    echo "<table class='subm' cellpadding='5' border='1' style='border-collapse: collapse'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Product Code</th>";
        echo "<th>Product Name</th>";
        echo "<th>Quantity</th>";
        echo "<th>Price</th>";
        echo "</tr>";
    $ctr=1;
    while ($Q1s2=mysqli_fetch_array($QR1s)){
        echo "</tr>";
        echo "<td>{$ctr}</td>";
        echo "<td>{$Q1s2['product_code']}</td>";
        echo "<td>".$Q1s2['product_name']."</td>";
        echo "<td>{$Q1s2['quantity']}</td>";
        echo "<td>{$Q1s2['price']}</td>";
        $ctr++;

        echo "</tr>";   
    }
    /*$QRSS1=mysqli_query($con,"SELECT  SUM(price) from canteen");
    $qrs123=mysqli_($QRSS1);
    echo $qrs123;*/
    $result1= mysqli_query($con,"SELECT SUM(price) AS price FROM canteen");
    $row = mysqli_fetch_assoc($result1); 
    $sum = $row['price'];
    echo "<tr class='tols'>";
    echo "<th></th>";
    echo "<th></th>";
    echo "<th></th>";
    echo "<th>Total=</th>";
    echo "<th>{$sum}</th>";
    echo "</tr>";
    echo "</table>";
    echo "</form>";

?>
<script language="javascript">var p = false;</script>
<form action='#' method='post' name='sales12'>
    <h1 style=' margin: 0;
    position: absolute;
    top: 80%;
    left: 31.5%;    
    transform: translate(-50%, -50%)  ;'>C-Cash Payment:</h1>
<div class="checkbox-wrapper-3">
  <input type="checkbox" name='ccashpay'id="cbx-3" />
  <label for="cbx-3" class="toggle"><span></span></label>
</div>
<div class='ccashpay2'>
<br><input type="text" name="stupay"  placeholder='Enter Student Number' value = "" onkeypress="return (event.charCode > 47 && event.charCode < 58)"style='border-color: maroon;
box-shadow: 10px 10px 20px black;'></br>
</div>;
<br><input type='submit' name='pay' value='Purchase'onClick="document.sales12.submit();" style='border-color: maroon;
box-shadow: 10px 10px 20px black; margin: 0;
    position: absolute;
    top: 80.2%;
    left: 68%;    
    transform: translate(-50%, -50%)  ;
'/>

</form>
<?php

if (isset($_POST['pay'])){
    if (isset($_POST['ccashpay'])){
        if (!empty($_POST['stupay'])){
        $rowSQL = mysqli_query($con, "SELECT MAX( id ) AS max FROM `canteenlog`" );
    $row1 = mysqli_fetch_array( $rowSQL );
    $largestNumber = $row1['max'];
        $QR1sz=mysqli_query($con,"SELECT * FROM accounts where stunum='".$_POST['stupay']."' ");
        $Q1s2z=mysqli_fetch_array($QR1sz);
        $total23 = $Q1s2z['balance'] - $sum;
        $totalup = mysqli_query($con,"UPDATE accounts set balance ='".$total23."' WHERE stunum = '".$_POST['stupay']."'");

        $can1=mysqli_query($con,"SELECT * FROM canteen where status='1' ");
        while ($can2=mysqli_fetch_array($can1)){
        $total234=$can2['product_code'];
        //echo $total234;}
        $quan1=mysqli_query($con,"SELECT * FROM inventory where product_code='".$total234."' ");
        $quan2=mysqli_fetch_array($quan1);
        $total231 = $quan2['stocks'] - $can2['quantity'];
        $up2 = mysqli_query($con,"UPDATE inventory set stocks='".$total231."' WHERE product_code='".$total234."' ");
        $tran = $_SESSION['logintime1'].$largestNumber+1;
        $ins = mysqli_query($con,"INSERT INTO canteenlog(transaction_no,product_code,product_name,quantity,price,stunum) values ('".$tran."','".$can2['product_code']."','".$can2['product_name']."','".$can2['quantity']."','".$can2['price']."','".$_POST['stupay']."')");
    $minus="-";
    $log = mysqli_query($con,"INSERT into logs(transaction,stnum,amount,addsub) values ('".$tran."','".$_POST['stupay']."','".$total231."','".$minus."')");
     


    }
        $removeall = mysqli_query($con,"DELETE from canteen where status='1'");
        echo "<script>alert('Successfully Purchased!')</script>";
        echo "<script>window.location.href='canteen.php'</script>";
    
}
else{
    echo "<script>alert('Fill-Uut Empty Fields!')</script>";
}
}

    else{
        $rowSQL1 = mysqli_query($con, "SELECT MAX( id ) AS max FROM `canteenlog`" );
    $row2 = mysqli_fetch_array( $rowSQL1 );
    $largestNumber1 = $row2['max'];       
       $can1=mysqli_query($con,"SELECT * FROM canteen where status='1' ");
        while ($can2=mysqli_fetch_array($can1)){
        $total234=$can2['product_code'];
        //echo $total234;}
        $quan1=mysqli_query($con,"SELECT * FROM inventory where product_code='".$total234."' ");
        $quan2=mysqli_fetch_array($quan1);
        $total231 = $quan2['stocks'] - $can2['quantity'];
        $up2 = mysqli_query($con,"UPDATE inventory set stocks='".$total231."' WHERE product_code='".$total234."' ");
        $tran1 = $_SESSION['logintime1'].$largestNumber1+1;
     $ins1 = mysqli_query($con,"INSERT INTO canteenlog(transaction_no,product_code,product_name,quantity,price) values ('".$tran1."','".$can2['product_code']."','".$can2['product_name']."','".$can2['quantity']."','".$can2['price']."')");
        $removeall = mysqli_query($con,"DELETE from canteen where status='1'");
        echo "<script>alert('Successfully Purchased!')</script>";
        echo "<script>window.location.href='canteen.php'</script>";
    }
}
}


?>
