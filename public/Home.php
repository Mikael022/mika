<?php
session_start();
include '../private/test1style.php';

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<!-- Load an icon library -->
<script src="https://kit.fontawesome.com/214a5a8412.js" crossorigin="anonymous"></script>


<div class="border1"></div> 

<div class="tablet1">
<form action='#' method='post'>
  <div class="button3" style="position: absolute; top:103%;left: 50%;transform: translate(-50%, -50%);">
  <button name="button123" class="button123">
  <div class="light"></div>
</button>
</div>
<?php
if ($_SESSION['anti']!="1"){
  echo "<script>alert('Please Press The Power Button First')</script>";
  echo "<script>window.location.href='index.php'</script>";
  session_destroy();

}
if (isset($_POST['button123'])){
  echo "<script>window.location.href='index.php'</script>";
  session_destroy();
}
?>
</form>
  <div class="rectangle"></div>

 

<div class="container">
<!-- The sidebar -->
 <div class="sidebar2">
  </div>
<div class="sidebar">
   <a></a>
  <a></a>
   <a></a>
  <a></a>
  <a href="Home.php"><i class="fa fa-fw fa-User"></i></a>
  <a></a>
  <a></a>
  <a href="Education.php"><i class="fa fa-fw fa-book"></i></a>
   <a></a>
  <a></a>
  <a href="sample.php"><i class="fa fa-fw fa-folder"></i></a>
   <a></a>
  <a></a>
  <a href="contact.php"><i class="fa fa-fw fa-envelope"></i></a>

</div>
</div>
</div> 

<div class="page1">
  <span class="span3"></span>
<span class="span5"></span>
<span class="span4"></span>
 <div class='bg1'>
<span class="span1"></span>
<div class="scroll-page" id="home">
  <div class="section2">
  <h1 style="margin: 0;
    position: absolute;
    top: 45%;
    left: 50%;    
    transform: translate(-50%, -50%)  ;
    ">About Myself</h1>
  </div>
<div class="section1">
  <h3>I'm Michael Kenneth B. Cometa.
  I live in Barangay U.P Campus Diliman Diliman and im 21 years old.</h3>
</div>
<div class="section3">
  <h3>My Hobbies are Gaming, Watching Anime, and Reading Manga(Anime Comics).</h3>
</div>
</div>
</div>
<?php
/*<div class="scroll-page" id="education">
  <h1>walang</h1>
</div>

<div class="scroll-page" id="samples">
  <h1>laman</h1>
</div>

<div class="scroll-page" id="contact">
  <h1>to</h1>
</div>*/?>

</div>