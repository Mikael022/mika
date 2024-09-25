<form action='#' method='post'>
<ul>
    <div class='navs'>
    <li><a><input type='submit' name='Home' value='Home' onClick="document.sales1.submit();" style='background-color: transparent;color:white;font-size:12px;border:none'/></a></li>
        <li><a><input type='submit' name='invent' value='Inventory' onClick="document.sales1.submit();" style='background-color: transparent;color:white;font-size:12px;border:none'/></a></li>
    <li><a><input type='submit' name='logout' value='Logout' onClick="document.sales1.submit();" style='background-color: transparent;color:white;font-size:12px;border:none'/></a></li>
</div>
</ul>
</form>
<?php
session_start();
include 'canteencss.php';
include 'config.php';
if (isset($_POST['Home'])){
    echo "<script>window.location.href='canteen.php'</script>";
}
if (isset($_POST['invent'])){
    echo "<script>window.location.href='inventory.php'</script>";
}
if (isset($_POST['logout'])){
    echo "<script>alert('Successfully Logged-out')</script>";
    echo "<script>window.location.href='index.php'</script>";
    session_destroy();
}
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
echo "</form>";
$QR1s=mysqli_query($con,"SELECT * FROM canteenlog ");
    echo "<form action='#' method='post'>";
    echo "<table class='subm' cellpadding='5' border='1' style='border-collapse: collapse'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Transaction Number</th>";
        echo "<th>Student Number</th>";
        echo "<th>Product Code</th>";
        echo "<th>Product Name</th>";
        echo "<th>Quantity</th>";
        echo "<th>Price</th>";
        echo "<th>Date</th>";
        echo "</tr>";
    $ctr=1;
    while ($Q1s2=mysqli_fetch_array($QR1s)){
        echo "</tr>";
        echo "<td>{$ctr}</td>";
        echo "<td>{$Q1s2['Transaction_no']}</td>";
        echo "<td>{$Q1s2['stunum']}</td>";
        echo "<td>{$Q1s2['product_code']}</td>";
        echo "<td>".$Q1s2['product_name']."</td>";
        echo "<td>{$Q1s2['quantity']}</td>";
        echo "<td>{$Q1s2['price']}</td>";
        echo "<td>{$Q1s2['canteendate']}</td>";
        $ctr++;

        echo "</tr>";   
    }
    if (isset($_POST['subsearch7'])){
    if (!empty($_POST['search7']) && empty($_POST['search8'])){

    $query1234 = mysqli_query($con,"SELECT * from canteenlog where stunum='".$_POST['search7']."'");
    echo "<form action='#' method='post'>";
    echo "<table class='subm' cellpadding='5' border='1' style='border-collapse: collapse'>";
          echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Transaction Number</th>";
        echo "<th>Student Number</th>";
        echo "<th>Product Code</th>";
        echo "<th>Product Name</th>";
        echo "<th>Quantity</th>";
        echo "<th>Price</th>";
        echo "<th>Date</th>";
        echo "</tr>";
$counter=1;
while ($Q1s2=mysqli_fetch_array($query1234)){
     echo "</tr>";
        echo "<td>{$counter}</td>";
        echo "<td>{$Q1s2['Transaction_no']}</td>";
        echo "<td>{$Q1s2['stunum']}</td>";
        echo "<td>{$Q1s2['product_code']}</td>";
        echo "<td>".$Q1s2['product_name']."</td>";
        echo "<td>{$Q1s2['quantity']}</td>";
        echo "<td>{$Q1s2['price']}</td>";
        echo "<td>{$Q1s2['canteendate']}</td>";
        $counter++;       
        echo "</tr>";   
    }
echo "</table>";
echo "</form>";
}
else{
    $query1234 = mysqli_query($con,"SELECT * from canteenlog where transaction_no='".$_POST['search8']."'");
    echo "<form action='#' method='post'>";
    echo "<table border='1'>";
       echo "<th>#</th>";
        echo "<th>Transaction Number</th>";
        echo "<th>Student Number</th>";
        echo "<th>Product Code</th>";
        echo "<th>Product Name</th>";
        echo "<th>Quantity</th>";
        echo "<th>Price</th>";
        echo "<th>Date</th>";
        echo "</tr>";
$counter=1;
while ($Q1s2=mysqli_fetch_array($query1234)){
	echo "<tr>";
     echo "<td>{$counter}</td>";
       echo "<td>{$Q1s2['Transaction_no']}</td>";
        echo "<td>{$Q1s2['stunum']}</td>";
        echo "<td>{$Q1s2['product_code']}</td>";
        echo "<td>".$Q1s2['product_name']."</td>";
        echo "<td>{$Q1s2['quantity']}</td>";
        echo "<td>{$Q1s2['price']}</td>";  
        echo "<td>{$Q1s2['canteendate']}</td>";    
        echo "</tr>";   
    }
echo "</table>";
echo "</form>";  
}
if (empty($_POST['search7']) && empty($_POST['search8'])){
    echo "<form action='#' method='post'>";
    $QR1s=mysqli_query($con,"SELECT * FROM canteenlog");
    echo "<form action='#' method='post'>";
    echo "<table class='subm' cellpadding='5' border='1' style='border-collapse: collapse'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Transaction Number</th>";
        echo "<th>Student Number</th>";
        echo "<th>Product Code</th>";
        echo "<th>Product Name</th>";
        echo "<th>Quantity</th>";
        echo "<th>Price</th>";
        echo "</tr>";
    $ctr=1;
    while ($Q1s2=mysqli_fetch_array($QR1s)){
    	echo "<tr>";
    	echo "<td>{$ctr}</td>";
      echo "<td>{$Q1s2['Transaction_no']}</td>";
        echo "<td>{$Q1s2['stunum']}</td>";
        echo "<td>{$Q1s2['product_code']}</td>";
        echo "<td>".$Q1s2['product_name']."</td>";
        echo "<td>{$Q1s2['quantity']}</td>";
        echo "<td>{$Q1s2['price']}</td>";
        $ctr++;       
        echo "</tr>";   
    }
    echo "</table>";
    echo "</form>";
}
}
?>