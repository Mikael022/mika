<form action='#' method='post'>
<ul>
    <div class='navs'>
  <li><a><input type='submit' name='gcash' value='Gcash to Ccash'  style='background-color: transparent;color:white;font-size:12px;border:none;'></a></li>
    <li><a><input type='submit' name='guide' value='User Guide/Manual' style='background-color: transparent;color:white;font-size:12px;border:none'></a></li>
  <li><a><input type='submit' name='logout' value='Logout' style='background-color: transparent;color:white;font-size:12px;border:none'></a></li>
</div>
</ul>
</form>
<?php
session_start();
include 'config.php';
include 'homecss.php';

        $QR1s=mysqli_query($con,"SELECT * FROM logs where stnum='".$_SESSION['anti2']."'");
    echo "<form action='#' method='post'>";
    echo "<table class='subm' cellpadding='5' border='1' style='border-collapse: collapse'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Transaction No.</th>";
        echo "<th>Amount</th>";
        echo "<th>Date</th>";
        echo "</tr>";
    $ctr=1;
    while ($Q1s2=mysqli_fetch_array($QR1s)){
        echo "<td>{$ctr}</td>";
        echo "<td>{$Q1s2['transaction']}</td>";
        echo "<td>".$Q1s2['addsub'].$Q1s2['amount']."</td>";
        echo "<td>{$Q1s2['date1']}</td>";
        $ctr++;       
        echo "</tr>";   
    }
    echo "</table>";
    echo "</form>";

$Q123 = mysqli_query($con,"SELECT * from accounts where stunum = '".$_SESSION['anti2']."'");
$Q1234=mysqli_fetch_array($Q123);
echo "<form action='#' method='post'>";
echo "<div class='div-balance'>";

echo "Balance:{$Q1234['balance']}";

echo "</div>";
echo "</form>";
if (isset($_POST['logout'])){
    echo "<script>alert('Successfully Logged-out')</script>";
    echo "<script>window.location.href='index.php'</script>";
    session_destroy();
}
if (!isset($_SESSION['anti2'])){
    echo "<script>alert('Please Login first!')</script>";
    echo "<script>window.location.href='index.php'</script>";
}
if (isset($_POST['gcash'])){
    $Q = mysqli_query($con,"SELECT * from accounts where stunum = '".$_SESSION['anti2']."'");
$R=mysqli_num_rows($Q);
     if ($R==0){
        echo "<script>alert('You are not Enrolled!')</script>";
     }
     else{
        echo "<script>alert('Redirecting to Gcash to Ccash Validation form')</script>";
        echo "<script>window.location.replace('https://docs.google.com/forms/d/e/1FAIpQLSfgiTkWoI1YMr2VuC6OhlhQGCgPeU3AIdKZ14czVxHDvi4ocA/viewform')</script>";
        //header('Location: https:docs.google.com/forms/d/e/1FAIpQLSfM-JiNdUxq8OjFjhpDp-90SkQ6PO-k9-TOxMnhy5xTD2JDcQ/viewform?usp=sf_link');
     }

}
if (isset($_POST['guide'])){
    echo "<script>window.location.href='usermanual.php'</script>";
}


?>