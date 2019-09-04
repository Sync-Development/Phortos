<!doctype html>
<html>
<head>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107535912-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-107535912-1');
</script>

<meta charset="UTF-8">

<meta name="keywords" content="phortos, netherlands consulting, phortos waddinxveen, fair, professional consulting, euretos, consulting, fair-training, fair-service">
<!--Deze woorden zullen ervoor zorgen dat iemand een van deze woorden opzoekt het verschijnt in google-->
<meta name="description" content="Phortos Consultants: Professional consulting, training and services to help realise the Internet of FAIR Data & Services">
<!--Dit beschrijft de site-->   
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PhortosConsultants</title><!--Dit is de titel van de website-->  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="landscape.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet"  media="(max-width: 690px) and (orientation: portrait)" href="mobile.css">
<link rel="stylesheet" media="(max-width: 750px) and (orientation: landscape)" href="css/mobile-landscape.css">
<link rel="stylesheet" media="(max-width: 780px) and (orientation: portrait)" href="css/ipad.css">
<link rel="stylesheet" media="(min-width: 790px) and (orientation: portrait)" href="css/ipad-pro.css">
<link rel="stylesheet" media="(max-width: 1370px) and (orientation: landscape)" href="css/Ipad-landscape.css">
<link href="https://fonts.googleapis.com/css?family=Tauri" rel="stylesheet"> 
</head>
<body>

<div class="pt-site-wrapper"><!--Dit zorgt ervoor dat alles in een bepaalde breedte blijft-->

    

    
<div class="navbar navbar-default navbar-static-top"><!--Dit zorgt ervoor dat de navbar boven blijft staan-->
<div class="container-fluid">
<div class="navbar-header">
    <a href="index"><img class="logo" src="images/Logo.svg"></a><!--Dit is het logo-->
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
 <!--Dit is voor de navbar-->
<div class="collapse navbar-collapse navbar-responsive-collapse">
<ul class="nav navbar-nav navbar-right">
<li class="list">
<a  class="active2" href="index"><strong>Home</strong></a>
</li>
   
<li class="list">
 <a  class="active2" href="Fair-services"><strong>FAIR Services</strong></a>
</li>

<li class="list">
<a  class="active2" href="Fair-training"><strong>FAIR Training</strong></a>
</li>
    
<li class="list">
<a  class="active2" href="Consortium"><strong>FAIR Consortium</strong></a>
</li>

<li class="list"> <a  class="active2" href="#"><strong>About Us</strong></a>
<ul class="submenu">
<li class="list">
<a  class="dropactive" href="Euretos"><strong>Euretos</strong></a>
</li>
    
<li class="list">
<a  class="dropactive" href="Customers"><strong>Customers</strong></a>
</li>
    
<li class="list">
<a  class="dropactive" href="About-us"><strong>About Us</strong></a>
 </li>
</ul>   
</li>
    
<li class="list">
<a  class="active2" href="Contact"><strong>Contact</strong></a>
 </li>

</ul>
   <!--De class zort ervoor dat dit menu wordt gelinked met de animatie in de css-->
</div>
</div>
</div>


 

<script>
/*Wanneer de gebruiker op de knop klikt wordt de dropdown content weergegeven*/
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
    
    <div class="pt-page-header"><!--Dit stukje code is de tekst dat wordt gedisplayed op de banner van de contact pagina-->
	<div class="container">
		<div class="pt-page-header-wrapper pt-full">
			<div class="pt-header-content">
				<h1 class="page-title">
					Contact Us</h1>

				<div class="page-description">
				</div>
			</div>
       </div>
	</div>
</div>
    
    <section class="pt-main"> <!--Dit is de sectie waar de contentblok voor Contact in geplaatst zal worden-->
        <div class="pt-globe-consult"></div> <!--Dit is de afbeelding op de achtegrond-->
		<div class="container">
			
			<div class="row pt-block-grid pt-equals"> <!--Dit zorgt ervoor dat ze naast elkaar worden weergegeven-->
				
					<div class="col-md-12"><!--Dit is de contentblok voor het contactform met de volledige breedte-->
						<div class="pt-box pt-box-consult text-center pt-equal" style="">

<!--Dit is het formulier dat ingevuld word-->                            
<? include('form_process.php'); ?>                            
<link rel="stylesheet" href="form.css" type="text/css">             
<div class="container">  
  <form id="contact" action="<?=$_SERVER['PHP_SELF']; ?>" method="post">
    <h4> Please fill out this form and we will contact you as soon as possible.</h4>
    <div class="row">
    <div class="col-xs-6"><fieldset><!--Vul hier voornaam in-->
    <input placeholder="First Name" type="text" tabindex="1" name="name" value="<? $name ?>" autofocus> <span class="error"><?= $name_error ?></span>
    </fieldset>
    </div>
    
    <div class="col-xs-6"><fieldset><!--Vul hier achternaam in-->
    <input placeholder="Last Name" type="text" name="last_name" value="<? $last_name ?>"tabindex="2"> <span class="error"><?= $last_name_error ?></span>
    </fieldset>
    </div>
      </div>
    <fieldset><!--Vul hier email in-->
      <input placeholder="E-mail" type="text" name="email" value="<? $email ?>" tabindex="3"> <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset><!--Plaats hier je bericht-->
      <textarea placeholder="Write your message here.." type="text" name="message" value="<? $message ?>" tabindex="5"></textarea>
    </fieldset><!--dit is de recaptcha-->
      <div class="g-recaptcha" data-sitekey="6Lfx8oMUAAAAALx3zcAWup4jVjSIiEDT7r464MTz"></div>
    <fieldset><!--Dit is de submit knop-->
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Send</button>
    </fieldset>
    <div class ="success"><?= $success; ?></div>
  </form>
 
  
</div>
                        </div>
					</div>
                
            </div>
        </div>
   </section>             
<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<!--footer begint hier-->
<footer>
    <ul>
       
            <li><strong>Home</strong></li>
        <li><a href="index">Phortos Consultants</a></li>
    </ul>
    <ul>
        <li><strong>FAIR Data</strong></li>
        <li><a href="Fair-services">FAIR Services</a></li>
        <li><a href="Fair-training">FAIR Training</a></li>
        <li><a href="Consortium">FAIR Consortium</a></li>
    </ul>
    <ul>
        <li><strong>About Us</strong></li>
        <li><a href="Customers">Customers</a></li>
        <li><a href="Euretos">Euretos</a></li>
        <li><a href="About-us">About Us</a></li>
    </ul>
    <ul>
        <li><strong>Contact Us</strong></li>
        <li><a href="mailto:info@phortosconsultants.com">Email Us</a></li>
        <li><a href="Contact">Send a Message</a></li>
        <li><a href="https://www.linkedin.com/company/phortos-consultants/">Follow Us</a></li>
    </ul>
</footer>
<!--copyright begint hier-->

<div class="copyright">
        
  
    <p> <a href="https://creativecommons.org/licenses/by/4.0/ ">CC BY</a> 2019 - Phortos Consultants | Created by <a href="http://www.sync-development.nl/">Sync Development</a></p>
</div>



         
</div>
</body>   
</html>

