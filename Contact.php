<!doctype html>
<html>
<head>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107535912-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-107535912-1');
</script>

<meta charset="UTF-8">

<meta name="keywords" content="waddinxveen website, website stijling, alphen website, gouda website, leiden website, website, website bouwen, goedkoop website, snel website, mobiel">
<meta name="description" content="Sync Development is gelokaliseerd in Alphen ad Rijn met het 3 in 1 pakket voor de startende ondernemer, Niet naar 3 verschillende bedrijven hoeven te gaan voor deze diensten no nonsense!">      
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PhortosConsultants</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="landscape.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet"  media="(max-width: 690px) and (orientation: portrait)" href="mobile.css">
<link rel="stylesheet" media="(max-width: 750px) and (orientation: landscape)" href="css/mobile-landscape.css">
<link rel="stylesheet" media="(min-width: 760px) and (orientation: portrait)" href="css/ipad.css">

<link rel="stylesheet" media="(max-width: 1370px) and (orientation: landscape)" href="css/Ipad-landscape.css">
<link href="https://fonts.googleapis.com/css?family=Tauri" rel="stylesheet"> 
</head>
<body>

<div class="pt-site-wrapper">

    

    
<div class="navbar navbar-default navbar-static-top">
<div class="container-fluid">
<div class="navbar-header">
    <a href="index.html"><img class="logo" src="images/Logo.svg"></a>
    <a href="index.html"><img class="logomobile" src="images/Sync_Development_Alphen_ad_Rijn_Logo_icon_mobiel.png"></a>
<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
<div id="nav-icon3">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</div>
</button>
<script>
$(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
});
    </script>  
    
    
<a class="navbar-brand" href="#"></a>
    </div>

<div class="collapse navbar-collapse navbar-responsive-collapse">
<ul class="nav navbar-nav navbar-right">
<li>
<a  class="active2" href="index.html"><strong>Home</strong></a>
</li>
<li class="dropdown">
   
<li>
 <a  class="active2" href="Consulting.html"><strong>Consulting</strong></a>
</li>

<li>
<a  class="active2" href="Fair-training.html"><strong>FAIR training</strong></a>
</li>
    
<li>
<a  class="active2" href="Fair-services.html"><strong>FAIR services</strong></a>
</li>

<li>
<a  class="active2" href="Euretos.html"><strong>Euretos</strong></a>
</li>
    
<li>
<a  class="active2" href="Customers.html"><strong>Customers</strong></a>
</li>
    
<li>
<a  class="active2" href="About-us.html"><strong>About Us</strong></a>
 </li>

<li>
<a  class="active2" href="Contact.php"><strong>Contact</strong></a>
 </li>

</ul>
   <!--De class zort ervoor dat dit menu wordt gelinked met de animatie in de css-->
</div>
</div>
</div>


 

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
</script>
    
<script>
   
    $(".carousel").on("touchstart", function(event){
        var xClick = event.originalEvent.touches[0].pageX;
    $(this).one("touchmove", function(event){
        var xMove = event.originalEvent.touches[0].pageX;
        if( Math.floor(xClick - xMove) > 5 ){
            $(".carousel").carousel('next');
        }
        else if( Math.floor(xClick - xMove) < -5 ){
            $(".carousel").carousel('prev');
        }
    });
    $(".carousel").on("touchend", function(){
            $(this).off("touchmove");
    });
});
    </script>
    <div class="pt-page-header">
	<div class="container">
		<div class="pt-page-header-wrapper pt-full">
			<div class="pt-header-content">
				<h1 class="page-title">
					Customers</h1>

				<div class="page-description">
				</div>
			</div>
       </div>
	</div>
</div>
    
    <section class="pt-main">
        <div class="pt-globe-consult"></div>
		<div class="container">
			
			<div class="row pt-block-grid pt-equals">
				
					<div class="col-md-12">
						<div class="pt-box pt-box-consult text-center pt-equal" style="">
							<h2>Contact</h2>

                            
<? include('form_process.php'); ?>                            
<link rel="stylesheet" href="bootstrap.css" type="text/css">             <div class="container">  
  <form id="contact" action="<?=$_SERVER['PHP_SELF']; ?>" method="post">
    <h3>Direct Contact</h3>
    <h4>Wij nemen zo spoedig mogelijk contact met u op!</h4>
    <fieldset>
      <input placeholder="Uw naam" type="text" tabindex="1" name="name" value="<? $name ?>" autofocus> <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Uw E-mail" type="text" name="email" value="<? $email ?>"tabindex="2"> <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Telefoonnummer" type="text" name="phone" value="<? $phone ?>" tabindex="3"> <span class="error"><?= $phone_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Uw website begint met http://" type="text" name="url" value="<? $url ?>" tabindex="4"> <span class="error"><?= $url_error ?></span>
    </fieldset>
    <fieldset>
      <textarea placeholder="Schrijf hier uw bericht" type="text" name="message" value="<? $message ?>" tabindex="5"></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Verstuur uw bericht</button>
    </fieldset>
    <div class ="success"><?= $success; ?></div>
  </form>
 
  
</div>

<p style="text-align: left;">Hier komt contact form
                            </p>
                            
                            <p style="text-align: left;"><br><br><br><br><br><br><br><br><br><br><br><br></p>
                        </div>
					</div>
                
            </div>
        </div>
   </section>             
<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<!--footer start from here-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6 footer-col">
        <div class="logofooter"> Contact </div>
        <p>Wij zijn telefonisch te bereiken van ma t/m vr van 09:00 - 18:00.</p>
        <p><i class="fa fa-map-pin"></i> Antonie van Leeuwenhoekweg 14, Alphen aan den Rijn</p>
        <p><i class="fa fa-phone"></i> Tel: 0611129593</p>
        <p><i class="fa fa-envelope"></i> E-mail: infosyncdevelopment@gmail.com</p>
          
    </div>
   </div>     
  </div>
</footer>
<!--footer start from here-->
<div class="copyright3">
<div class="copyright">
  <div class="container"  >
    <div class="col-md-6">
        
  
    <p>  © 2017 - Sync-development </p>
     <ul class="footer-social1">
          <li> <a target="_blank" href="https://www.linkedin.com/company/25033050/"><i class="fa fa-linkedin social-icon linked-in" aria-hidden="true"></i></li>
          <li> <a target="_blank" href="https://www.facebook.com/sync4webdevelopment/"><i class="fa fa-facebook social-icon facebook" aria-hidden="true"></i></li>
          <li><i class="fa fa-twitter social-icon twitter" aria-hidden="true"></i></li>
          <li><i class="fa fa-google-plus social-icon google" aria-hidden="true"></i></li>
        </ul>
      </div>
    </div>
       <div class="col-md-3 col-sm-6 footer-col">
        <h6 class="heading7">Social Media</h6>
           
    <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"><img class="scrollup" src="images/Sync_Development_Alphen_ad_Rijn_Scroll.png"> </i></a>
<script>
// When the user scrolls down 30px from the top of the document, show the button
$(window).scroll(function() {
    if ($(this).scrollTop() >= 10) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
           </script>
       
    <div class="col-md-6">
      <ul class="bottom_ul">
        <li><a href="#">prabuuideveloper.com</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Faq's</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a href="#">Site Map</a></li>
      </ul>
    </div>
  </div>
</div>

    </div>



         
</div>
</body>   
</html>

