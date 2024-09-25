<form action='#' method='post'>
<ul>
    <div class='navs'>
    	<li><a><input type='submit' name='home' value='Home' onClick="document.sales1.submit();" style='background-color: transparent;color:white;font-size:12px;border:none'/></a></li>
    <li><a><input type='submit' name='canteenlog' value='Purchase History' onClick="document.sales1.submit();" style='background-color: transparent;color:white;font-size:12px;border:none'/></a></li>
    <li><a><input type='submit' name='logout' value='Logout' onClick="document.sales1.submit();" style='background-color: transparent;color:white;font-size:12px;border:none'/></a></li>
</div>
</ul>
</form>
<?php
session_start();
include 'canteencss.php';
include 'config.php';
if (isset($_POST['home'])){
    echo "<script>window.location.href='canteen.php'</script>";
}
if (isset($_POST['canteenlog'])){
    echo "<script>window.location.href='canteenhistory.php'</script>";
}

echo "<form action='#' method='post'>";
?>
<div class='search30'>
<input type='text' name='addprod' placeholder='Enter Product Code' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'></br>
<br><input type='text' name='prodnam' placeholder='Enter Product Name' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'></br>
<br><input type='text' name='prodpri' placeholder='Enter Product Price' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'></br>
</div>
<br><input type='submit' name='addproduct' Value='Add Product' style='border-radius: 1px;
border-color: maroon;
box-shadow: 10px 10px 20px black;
margin: 0;position: absolute;top: 61.5%;left: 11.5%;transform: translate(-50%, -50%);'></br>  

<div class='search40'>
<input type='text' name='stockcode' placeholder='Enter Product Code' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'></br>
<br><input type='text' name='stocks' placeholder='Enter Stock Quantity' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'></br>
</div>
<br><input type='submit' name='addstock' Value='Add Stock' style='border-radius: 1px;
border-color: maroon;
box-shadow: 10px 10px 20px black;
margin: 0;position: absolute;top: 55%;left: 88%;transform: translate(-50%, -50%);'></br>  

<div class='search20'>
<input type='text' name='search7' placeholder='Product Code' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>
</div>

<input type='submit' name='subsearch7' Value='Search' style='border-radius: 1px;
border-color: maroon;
box-shadow: 10px 10px 20px black;
margin: 0;position: absolute;top: 19.3%;left: 60%;transform: translate(-50%, -50%);'>  
<?php
echo "</form>";
$QR1s=mysqli_query($con,"SELECT * FROM inventory ");
    echo "<form action='#' method='post'>";
    echo "<table class='subm' cellpadding='5' border='1' style='border-collapse: collapse'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Product Code</th>";
        echo "<th>Product Name</th>";
        echo "<th>Stocks</th>";
        echo "<th>Price</th>";
        echo "<th>Action</th>";
        echo "</tr>";
    $ctr=1;
    while ($Q1s2=mysqli_fetch_array($QR1s)){
    	$stid="Delete ID:".$Q1s2['id'];
        echo "</tr>";
        echo "<td>{$ctr}</td>";
        echo "<td>{$Q1s2['product_code']}</td>";
        echo "<td>{$Q1s2['product_name']}</td>";
        echo "<td>{$Q1s2['stocks']}</td>";
        echo "<td>".$Q1s2['price']."</td>";
        echo "<td><input type='submit' name='deldel' value='{$stid}'></td>";
        $ctr++;

        echo "</tr>";   
    }
    if (isset($_POST['subsearch7'])){
    if (!empty($_POST['search7'])){
 echo "<form action='#' method='post'>";

?>
<div class='search20'>
<input type='text' name='search7' placeholder='Enter Product Code' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>
</div>


<input type='submit' name='subsearch7' Value='Search' style='border-radius: 1px;
border-color: maroon;
box-shadow: 10px 10px 20px black;
margin: 0;position: absolute;top: 19.3%;left: 60%;transform: translate(-50%, -50%);'>  
<?php
echo "</form>";
    $query1234 = mysqli_query($con,"SELECT * from inventory where product_code='".$_POST['search7']."'");
    echo "<form action='#' method='post'>";
    echo "<table border='1'>";
     echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Product Code</th>";
        echo "<th>Product Name</th>";
        echo "<th>Stocks</th>";
        echo "<th>Price</th>";
        echo "<th>Action</th>";
        echo "</tr>";
$counter=1;
while ($Q1s23=mysqli_fetch_array($query1234)){
	$stid="Delete ID:".$Q1s23['id'];
     echo "<td>{$counter}</td>";
        echo "<td>{$Q1s23['product_code']}</td>";
        echo "<td>{$Q1s23['product_name']}</td>";
        echo "<td>{$Q1s23['stocks']}</td>";
        echo "<td>".$Q1s23['price']."</td>";
        echo "<td><input type='submit' name='deldel' value='{$stid}'></td>";
        $counter++;       
        echo "</tr>";   
    }
echo "</table>";
echo "</form>";
}
 
else{
    echo "<form action='#' method='post'>";
        ?>
<div class='search20'>
<input type='text' name='search7' placeholder='Enter Product Code' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>
</div>


<input type='submit' name='subsearch7' Value='Search' style='border-radius: 1px;
border-color: maroon;
box-shadow: 10px 10px 20px black;
margin: 0;position: absolute;top: 19.3%;left: 60%;transform: translate(-50%, -50%);'>  
<?php
    $QR1s345=mysqli_query($con,"SELECT * FROM inventory");
    echo "<form action='#' method='post'>";
    echo "<table class='subm' cellpadding='5' border='1' style='border-collapse: collapse'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Product Code</th>";
        echo "<th>Product Name</th>";
        echo "<th>Stocks</th>";
        echo "<th>Price</th>";
        echo "<th>Action</th>";
        echo "</tr>";
    $ctr=1;
    while ($Q1s2323=mysqli_fetch_array($QR1s345)){
    	$stid="Delete ID:".$Q1s2323['id'];
        echo "<td>{$ctr}</td>";
       echo "<td>{$Q1s2323['product_code']}</td>";
        echo "<td>{$Q1s2323['product_name']}</td>";
        echo "<td>{$Q1s2323['stocks']}</td>";
        echo "<td>".$Q1s2323['price']."</td>";
        echo "<td><input type='submit' name='deldel' value='{$stid}'></td>";
        $ctr++;       
        echo "</tr>";   
    }
    echo "</table>";
    echo "</form>";
}
}
if (isset($_POST['addproduct'])){
	if (!empty($_POST['addprod']) && !empty($_POST['prodnam']) && !empty($_POST['prodpri'])){
		$querymove=mysqli_query($con,"INSERT INTO inventory(product_code,product_name,price) VALUES ('".$_POST['addprod']."','".$_POST['prodnam']."','".$_POST['prodpri']."')");
			echo "<script>alert('Product Successfully added')</script>";
			echo "<script>window.location.href='inventory.php'</script>";
	}
	else{
		echo "<script>alert('Please Fill-Out Empty Field')</script>";
	}
}
if (isset($_POST['addstock'])){
	if (!empty($_POST['stocks']) && !empty($_POST['stockcode'])){
		$QR1s345=mysqli_query($con,"SELECT * FROM inventory where product_code='".$_POST['stockcode']."'");
		$Q1234=mysqli_fetch_array($QR1s345);
		$totalstock = $Q1234['stocks'] + $_POST['stocks'];
		$queryup033=mysqli_query($con,"UPDATE inventory set stocks ='".$totalstock."' WHERE product_code = '".$_POST['stockcode']."'");
		echo "<script>alert('Product Successfully Restocked!')</script>";
		echo "<script>window.location.href='inventory.php'</script>";
	}
	else{
		echo "<script>alert('Please Fill-Out Empty Field')</script>";
	}
}
if (isset($_POST['deldel'])){
	$stid=str_replace("Delete ID:", "", $_POST['deldel']);
 $querydel123=mysqli_query($con,"DELETE from inventory where id='".$stid."'");
 echo "<script>alert('Product Successfully Deleted')</script>";
 echo "<script>window.location.href='inventory.php'</script>";
}
?>