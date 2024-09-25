<?php
session_start();
include '../private/contactstyle.php';

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
  <div class="button3" style="position: absolute; top:105%;left: 50%;transform: translate(-50%, -50%);">
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
  <span class="span12"></span>
 <span class="span10"></span>
  

  <span class="span7"></span>
  <span class="span6"></span>

  <span class="span5"></span>
  <span class="span4"></span>

  
<div class="scroll-page" id="home">
  <div class="section2" style="text-align: center;">
  <h1 style="margin: 0;
    position: absolute;
    top: 45%;
    left: 50%;    
    transform: translate(-50%, -50%)  ;
    ">Contact Informations</h1>
  </div>
<form action='#' method='post'>
  <div class="section3">
    <h2 style="text-align:center;">Gmail Accounts</h2>
    <p style="text-align:center;"><b>Gmail#1:</b></p>
    <div class="href1" style="position: absolute; top:50%; left: 20%; transform: translate(-50%, -50%);">
    <br><a href="https://mail.google.com/mail/u/0/?fs=1&to=michaelkennethcometa@ccp.edu.ph&su=&body=&bcc=&tf=cm"target="_blank">michaelkennethcometa@ccp.edu.ph</a></br>
  </div>
  <p style="text-align:center;position: absolute; top:65%; left: 50%; transform: translate(-50%, -50%);"><b>Gmail#2:</b></p>
    <div class="href2" style="position: absolute; top:80%; left: 27%; transform: translate(-50%, -50%);">
    </br><a href="https://mail.google.com/mail/u/0/?fs=1&to=rinkimeku0102@gmail.com&su=&body=&bcc=&tf=cm"target="_blank">rinkimeku0102@gmail.com</a>
  </div>
</form>

</div>
<form action='#' method='post'>
<div class="section4">
  <h2>Facebook Accounts</h2>
   <p style="text-align:center;"><b>FB#1:</b></p>
   <div class="href3" style="position: absolute; top:50%; left: 25%  ; transform: translate(-50%, -50%);">
    <br><a href="https://www.facebook.com/mitsuru.suisei/"target="_blank">facebook.com/mitsuru.suisei/</a></br>
  </div>
    <p style="text-align:center;position: absolute; top:65%; left: 50%; transform: translate(-50%, -50%);"><b>FB#2:</b></p>
    <div class="href4" style="position: absolute; top:80%; left: 20%; transform: translate(-50%, -50%);">
    </br><a href="https://www.facebook.com/michaelkenneth0102"target="_blank">facebook.com/michaelkenneth0102</a>
  </div>
    
</div>
</form>

<form action='#' method='post'>
<div class="section5">
  <h2>Mobile Number</h2>
   <p style="text-align:center;"><b>Mobile Number #1:</b></p>
   
    <p style="text-align: center; position: absolute; top: 46%; left: 50%; transform:translate(-50%, -50%);">+63 9289240384</p>

    <p style="text-align:center;position: absolute; top:65%; left: 50%; transform: translate(-50%, -50%);"><b>Mobile Number #2:</b></p>
    
      <p style="text-align: center; position: absolute; top: 80%; left: 50%; transform:translate(-50%, -50%);">+69 9270059648</p>
  </div>
    
</form>

