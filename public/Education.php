<?php
session_start();
include '../private/educationstyle.php';

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



<span class="span2"></span> 

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

<div class='page1'>

 <div class='bg1'>
  <span class="span9"></span>
  <span class="span8"></span>

  <span class="span7"></span>
  <span class="span6"></span>

  <span class="span5"></span>
  <span class="span4"></span>

  <span class="span3"></span>
  <span class="span11"></span>
<div class="scroll-page" id="home">
  <div class="section2">
  <h1 style="margin: 0;
    position: absolute;
    top: 45%;
    left: 50%;    
    transform: translate(-50%, -50%)  ;
    ">Education Background</h1>
  </div>

  <div class="section1">
     <h3>Graduated From Project 3 Elementary School in 2015.</h3>
</div>
<div class="section3">
  <h3>Moved-Up From Quirino High School in 2019.</h3>
</div>
<div class="section4">
  <h3>Moved-Up to Asian College and Graduated as Senior High School Student in 2021.</h3>
</div>
<div class="section5">
  <h3>And Currently Studying at Central Colleges of The Philippines as 4th Year BSIT Student.</h3>
</div>


</div>