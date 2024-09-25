<form action='#' method='post'>
<ul>
    <div class='navs'>
  <li><a><input type='submit' name='gcash' value='Gcash to Ccash'  style='background-color: transparent;color:white;font-size:12px;border:none;'></a></li>
    <li><a><input type='submit' name='Home' value='Home' style='background-color: transparent;color:white;font-size:12px;border:none'></a></li>
  <li><a><input type='submit' name='logout' value='Logout' style='background-color: transparent;color:white;font-size:12px;border:none'></a></li>
</div>
</ul>
</form>
<section>
	<?php
	echo "<h1>Student Guide</h1>";
echo "<b>".(nl2br("How To Cash-in Money to Ccash?"."</b>"."

	• Go to Cashier(not the canteen one) to Cash-in Money.



	"."<b>"."How To Use CCash to buy Something to Canteen?"."</b>"."

	• Kindly say you will pay using Ccash and surrender your ID to them to confirm your identity.



	"."<b>"."How To Use Convert Gcash to CCash?"."</b>"."

	• Press The Gcash to Ccash and you will be redirected to a google form where you will write your student ID and attach the Gcash Receipt as proof of your payment. The Confirmation will take time please be patient and wait.



	"."<b>"."Reminder:"."</b>"."

	• Ccash is only limited to Central Colleges of The Philippines and cant be used anywhere.

	• Kindly Report immediately if you encounter a bug on the website."));
	?>
</section>
<?php
session_start();
include 'manualcss.php';
include 'config.php';
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
if (isset($_POST['logout'])){
    echo "<script>alert('Successfully Logged-out')</script>";
    echo "<script>window.location.href='index.php'</script>";
    session_destroy();
}
if (!isset($_SESSION['anti2'])){
    echo "<script>alert('Please Login first!')</script>";
    echo "<script>window.location.href='index.php'</script>";
}
if (isset($_POST['Home'])){
    echo "<script>window.location.href='home.php'</script>";
}
?>