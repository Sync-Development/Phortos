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
    
    <div class="pt-page-header"><!--Dit stukje code is de tekst dat wordt gedisplayed op de banner van de Fair Services-->
	<div class="container">
		<div class="pt-page-header-wrapper">
			<div class="pt-header-content">
				<h1 class="page-title">
					 Transforming data for the Internet of FAIR Data &amp; Services </h1>

				<div class="page-description">
                    <p class="page-description">FAIRification services and demonstrating FAIR data value to end user</p>
				</div>
			</div>
       </div>
	</div>
</div>
    
    
    <section class="pt-main"><!--Dit is de contentblok voor fair services-->
        <div class="container">
			
			<div class="row pt-block-grid pt-equals"> <!--Dit zorgt ervoor dat ze naast elkaar worden weergegeven-->
				
					<div class="col-md-12"><!--Dit is de eerste content blok voor de consulting pagina met de volledige breedte-->
						<div class="pt-box pt-box-consult text-center pt-equal" style="">
							<h2>FAIR Services</h2>
                            <br>
                            <p style="text-align: middle;">Phortos Consultants offers a variety of services ranging from strategic consulting, end  <a href="Fair-training" style="color:#68baa5">user training</a> and services to actively making data FAIR, providing the basis for analytics driven capabilities.</p>   
                            
                            
                        </div>
					</div>
                
            </div>
        </div>
    </section>
        
        <section class="pt-rest">  <!--Dit is de tweede rij van content blokken dat wordt weergegeven op de consulting pagina-->   
                <div class="pt-globe"></div><!--Dit is de afbeelding op de achtegrond-->
                <div class="container">
			
			<div class="row pt-block-grid pt-equals"> <!--Dit zorgt ervoor dat ze naast elkaar worden weergegeven-->
                    
                  <div class="col-md-6"><!--Dit is de tweede content blok voor de consulting pagina met de helft van de breedte-->
						<div class="pt-box pt-box-consult2 text-center pt-equal" style="">
							<h2>Strategic Consulting.</h2>
                            <br><!--De link in de tekst zal je doorverwijzen naar de go-fair website-->
                            <p style="text-align: left;">We offer a variety of strategic consulting services. PC has been instrumental in the process of developing the FAIR principles through moderating the first FAIR UNConference at the Lorentz center in 2014. Since then Phortos Consultants was intricately involved in the birth of  <a href="https://www.go-fair.org/" style="color:#68baa5">GO FAIR</a> as a kick start implementation process for the European Open Science Cloud (EOSC).</p>
                            
							
                        </div>
					</div>
                
                 <div class="col-md-6"><!--Dit is de derde content blok voor de consulting pagina met de helft van de breedte-->
						<div class="pt-box pt-box-consult2 text-center pt-equal" style="">
                            <h2>Organisational FAIR Readiness</h2>
                            <br><!--De linkjes in deze tekts zal je doorverwijzen naar twee andere pagina's van de website-->
                            <p style="text-align: left;">We offer a fully fledged FAIR Readiness program for institutions and corporations intending to join the GO FAIR ecosystem. This program involves <a href="Fair-training" style="color:#68baa5">training of internal teams</a> and organizational adoption of the FAIR principles as well as <a href="Fair-services" style="color:#68baa5">enabling services</a> such as FAIRification of data and a unique use case driven FAIR Value demonstration program.</p>
                        </div>
					</div>
            </div>
		</div>
	</section>
    <section class="pt-end">
		<div class="container">
			
			<div class="row pt-block-grid pt-equals"><!--Dit zorgt ervoor dat ze naast elkaar worden weergegeven-->
				
					<div class="col-md-12"><!--Deze contentblok loopt uit over de hele breedte van de wrapper-->
						<div class="pt-box pt-box-consult text-center pt-equal" style="">
                            <h2>FAIR Data Integration</h2>
                            <br>
							<p style="text-align: left;">Phortos Consultants, in collaboration with partners, provides a FAIRification service of your data compliant with the GO FAIR principles (to be a GO FAIR certified Service soon). This process usually includes the following steps:</p>
                             <!--Dit is de lijst met phortos consultants bullets-->
                             <ul class="Fair-list" style="color: gray; font-family: 'Tauri', sans-serif; font-size: 17px; text-align: left">
                              <li>The format of the  data will be determined and a semantic (meta)data  model will be created.</li>
                             
                              <li>Your data will be turned into FAIR Compliant RDF with reference to public domain identifiers.</li>
                             
                              <li>The results will be published as a (private or public) FAIR Data Point.</li>  
                                 
                              <li>In case of life sciences data, your FAIR data can be integrated in the <a href="http://www.euretos.com/euretos-ai-platform-for-target-and-biomarker-discovery-and-validation.php" style="color:#68baa5">Euretos AI Platform</a> for knowledge discovery.</li>  
                            </ul>
                             <!--Dit is het tweede stukje tekst van de contentblok-->
                            <h2 style="margin-top: 3%;">FAIR Data Value Event</h2>
                            <br>
                            <p style="text-align: left;">An essential aspect in making FAIR data pervasive is the question: what is the value to the end user? FAIR data is an IT concept and far removed from the reality of the researcher. In order to demonstrate the value of FAIR data, its impact needs to be experienced as early as possible in any FAIR data implementation program.</p>
                            
                            <p style="text-align: left;">To enable this value demonstration, Phortos Consultants, in collaboration with FAIR service provider Euretos, offers a so-called ‘FAIR data value demonstration event’ within the context of multi-omics, data driven target &amp; biomarker research. With limited preparation a selection of raw data sources are processed and output as FAIR data and, more importantly, automatically integrated into the Euretos AI platform for end user access. Both data specialists and researchers can then experience the value of FAIR data.
</p>
                            
                            <hr> <!--Dit is de link dat ervoor zorgt dat de PDF gedownload wordt-->
                            <a href="./images/Outline%20proposal%20FAIR%20Data%20Value%20event.pdf" download>Download PDF here</a>
                            <hr>

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

