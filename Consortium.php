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
<script> 
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});
</script>   
    
    <div class="pt-page-header"><!--Dit stukje code is de tekst dat wordt gedisplayed op de banner van de Fair management-->
	<div class="container">
		<div class="pt-page-header-wrapper">
			<div class="pt-header-content">
				<h1 class="page-title">Collaborating to provide FAIR capacity, services and tools</h1>

				<div class="page-description">
                    <p class="page-description">A global consortium covering the full spectrum of FAIR capabilities</p>
				</div>
			</div>
       </div>
	</div>
</div>
    
    <section class="pt-main"><!--Dit is de contentblok dat ervoor zorgt dat alles onder elkaar zal komen te staan-->
         <div class="pt-globe-consult"></div><!--Dit is de afbeelding op de achtegrond-->
		<div class="container">
			
			<div class="row pt-block-grid pt-equals"><!--Dit zorgt ervoor dat ze naast elkaar worden weergegeven-->
				
                <div class="pt-box pt-box-consult text-center pt-equal" style="">
					  <div class="col-md-10"><!--Dit content blok wordt allemaal weergegeven met 75% breedte wat ernaast komt ook nog een knop te staan-->
						
                            <h2 id="Consortium" style="text-align: left; ">The FAIR Service Provider Consortium (FSPC)</h2>
                            <br>
                              <p style="text-align: left;">Research driven organisations are increasingly starting to appreciate the value of FAIR data. Many public and private market parties have indicated that there is an urgent need for professional FAIR services.<br><br>
                          
                                  In order to develop the tools, skills and capacity required to meet this growing demand, the <a href="https://gofairfoundation.org/"  target="_blank" style="color:#68baa5">GO FAIR Foundation</a> and Phortos Consultants have taken the initiative to form the FAIR Service Provider Consortium (FSPC). To date <a href="#Partners" style="color:#68baa5">10+ companies have joined</a> and agreed to build consulting capacity by training FAIR data stewards and ontologists and (co-)develop professional FAIR tooling. Several partners are in the process of establishing a FAIR Center of Competence.</p>
                          
                            <h2 id="Aims" style="text-align: left;">FSPC Aims</h2><br>
                          
                              <p style="text-align: left;">The partners in the FSPC have committed to adhere to the GO FAIR  <a href="https://www.go-fair.org/resources/rules-of-engagement/" target="_blank" style="color:#68baa5">Rules of Engagement</a> and implement (and co-develop) the FAIR principles and associated services and technology according to the best practices as they are formulated by the GO FAIR <a href="https://www.go-fair.org/implementation-networks/"   target="_blank" style="color:#68baa5">Implementation Networks.</a><br><br>
                          
                              The consortium’s aims are to:</p>
                             <!--Dit is de lijst met phortos consultants bullets-->
                          <ul class="Ontology-list" style="color: gray; font-family: 'Tauri', sans-serif; font-size: 17px; text-align: left">
                              <li>Enable the development of professional FAIR support capacity in terms of services and tooling </li>
                             
                              <li>Develop tooling preferably as a multi-tenant cloud-based FAIR As A Service (FAAS)</li>
                             
                              <li>Help guide the professionalisation of tools and services </li>  
                                 
                              <li>Stimulate the adoption of FAIR principles and their implementati</li> 
                              
                              <li>Co-develop market opportunities, including licensing to build or expand services portfolio</li>  
                              
                              <li>Develop best practices for FAIR implementations</li>  
                              
                              <li>Liaise with public domain parties with unique FAIR expertise</li>  
                              
                              <li>Collaborate on skill development, training, positioning and communication </li>  
                            </ul>
                          <br>
                        
                          <p style="text-align: left;">For concrete examples of tooling and services offered by current FSPC partners <a href="#Offerings" style="color:#68baa5">Click here</a> </p>
                          
                            <h2 id="Benefits" style="text-align: left;">Benefits of being a FSPC partner</h2>
                          <br>
                           <p style="text-align: left;">Joining the FSPC provides multiple benefits including:</p>
                             <ul class="Ontology-list" style="color: gray; font-family: 'Tauri', sans-serif; font-size: 17px; text-align: left">
                             <li>Develop a competitive advantage: there is at present only a limited number of companies that can offer professional FAIR services supporting the quickly emerging trend that FAIR data is highly needed in innovation which in turn increases the need for new products supporting the analytics possible with machine readable data. </li><br>
                            
                             <li>GO FAIR certification: the GO FAIR Foundation is developing and will offer certification for FAIR professionals, tooling and organizations. The consortium is able to help parties in this process.</li><br>
                                 
                             <li>Broker access to scarce FAIR expertise from front line professionals </li><br>
                                 
                             <li>Stimulate re-use and co-development with existing public sector FAIR initiatives and academic parties.</li>
                          </ul>
                          <div id="" style="background-color: #30866f ; padding: 20px; border-radius: 10px;">
                           <p style="text-align: left; color: white; font-size: 14px;">“<i>FAIR is important to Elsevier, and we were a contributor when the FAIR initiative got started. We continue to support the research community in this area, for instance by making article-data relationships available and usable (Scholix.org), standardising data availability statements in articles (the Copdess initiative) and by launching Mendeley Data. We believe it is beneficial to align with others in the FAIR Service Provider consortium to avoid reinventing the wheel and maximise the potential for collaboration</i> “ - Wouter Haak, Elsevier</p>
                           </div>
                          
                       <div class="col-md-7">   
                          <h2 id="Membership" style="text-align: left;">Joining the FSPC</h2><br>
                        
                          <p style="text-align: left;">We expected the following of parties that join the consortium: </p>
                          <!--Dit is de lijst met phortos consultants bullets-->
                          
                          
                          
                                <ul class="Ontology-list" style="color: gray; font-family: 'Tauri', sans-serif; font-size: 17px; text-align: left">
                                    
                              <li>Agree to the GO FAIR Rules of Engagement</li>
                             
                              <li>Allow permission to add the logo</li>
                             
                              <li>Engage in consortium meetings</li>  
                                 
                              <li>Contribute to help develop and grow the consortium</li> 
                                    
                              <li>Share experiences and approaches regarding development <br>of FAIR competence</li> 
                            </ul>
                </div>
                          <div id="Quote-1" class="col-md-4" style="background-color: #30866f ; padding: 20px; border-radius: 10px; width: 40%; margin-top: 8%;">
                           <p style="text-align: left; color: white; font-size: 13px;">“<i>In a world where every interaction is becoming a digital transaction it becomes critical to organize trust to share data between individuals, companies and institutions. But without the right ecosystem to collaborate, protect and share this data, organisations are faced with increasing and exponentially increasing risks. At INNOPAY we see FAIR data as an essential building block to organize this trust and the consortium provides the important capabilities to realize this.</i> “ - Douwe Lycklama, Innopay </p>
                           </div>
                          
                          
                          
                          <br>
                           <div class="col-md-12">   
                          <p style="text-align: left;">For more information or if you want to join the consortium, please <a href="Contact" style="color:#68baa5">contact us here</a>.</p>
                               
                               <div id="Quote-mobiel" style="background-color: #30866f ; padding: 20px; border-radius: 10px;">
                           <p style="text-align: left; color: white; font-size: 14px;">“<i>In a world where every interaction is becoming a digital transaction it becomes critical to organize trust to share data between individuals, companies and institutions. But without the right ecosystem to collaborate, protect and share this data, organisations are faced with increasing and exponentially increasing risks. At INNOPAY we see FAIR data as an essential building block to organize this trust and the consortium provides the important capabilities to realize this.</i> “ - Douwe Lycklama, Innopay </p>
                           </div>
                         
                            <h2 id="Offerings" style="text-align: left;">Examples of activities and offerings of current FSPC partners</h2><br>
                          
                             <p style="text-align: left;">FAIR tools and services have already been created by FSPC partners. As part of the consortium additional (types of) services and tools can be (co)developed or initiated. Also collaboration opportunities based on combining portfolios or (sub)licensing are available.</p>
                          
                           <!--Dit is de lijst met phortos consultants bullets-->
                          <ul class="Ontology-list" style="color: gray; font-family: 'Tauri', sans-serif; font-size: 17px; text-align: left">
                                    
                              <h4>Services</h4><br>
                              
                              
                              <li>FAIR Readiness Requirements studies</li>
                             
                              <li>FAIR Data Stewardship Planning</li>
                             
                              <li>FAIRificationservices</li>  
                                 
                              <li>Semantic and Ontology Modeling</li> 
                              
                              <li>FAIR Metadata for Machines workshops</li> 
                              
                              <li>Analytics based upon integration of FAIR public and proprietary data</li>  
                              
                              <li>FAIR Readiness training courses (off-site or on-site)</li>  
                              
                              <li>FAIR Metrics Evaluation</li>  
                              
                              <li>FAIR Readiness Implementation and Vision Plan of Approach</li>  
                              
                              <li>FAIR Value Events</li>  
                              
                              <h4>Tooling</h4><br>
                              
                              
                              <li>Co-development of FAIR tooling</li>  
                              
                              <li>Data Steward Wizard - Create a FAIR compliant stewardship plan</li>  
                              
                              <li>OntoUML - Find and build semantic (meta)data models</li>  
                              
                              <li>FAIRifier - Transform (meta)data records into FAIR RDF</li>  
                              
                              <li>FAIR Data Point - Make FAIR data accessible and findable</li>  
                              
                              <li>FAIR search engine - Find FAIR Data Points</li> 
                              
                              <li>FAIR Metrics Evaluator - Determine the level of FAIRness of data sets</li>  
                            </ul>
                         <br> 
                          
                            <h2 id="Partners" style="text-align: left;">Current partners</h2><br></div>
                          
                          <!-- de eerste rij van partners -->
                         <div class="col-md-4"><a href="https://www.purplepolarbear.nl/" target="_blank"><img src="images/Partners/logo%20-%20purple%20polar%20bears.jpeg" style="width: 250px; height: 250px; object-fit:scale-down;"></a></div>
                          
                          <div class="col-md-4"><a href="http://www.micelio.be/" target="_blank"><img src="images/Partners/logo%20-%20micelio.png" style="width: 250px;
                          height: 250px; object-fit:scale-down;"></a></div>
                          
                          <div class="col-md-4"><a href="https://www.mobiquity.com/" target="_blank"><img src="images/Partners/logo%20-%20mobiquity.png" style="width: 250px;
                          height: 250px; object-fit:scale-down;"></a></div>
                          
                          
                          <!-- de tweede rij van partners -->
                          
                          <div class="col-md-4"><a href="http://www.phortosconsultants.com/" target="_blank"><img src="images/Logo.svg" style="width: 250px;
                          height: 250px; object-fit:scale-down;"></a></div>
                          
                          
                          <div class="col-md-4"><a href="https://www.accenture.com" target="_blank"><img src="images/Partners/logo%20-%20accenture2.jpg" style="width: 250px;
                          height: 250px; object-fit:scale-down;"></a></div>
                          
                          
                          <div class="col-md-4"><a href="https://gofairfoundation.org/" target="_blank"><img src="images/Partners/logo%20-%20gofair%20foundation.png" style="width: 250px; height: 250px; object-fit:scale-down;"></a></div>
                          
                          
                          <!-- de derde rij van partners -->
                          
                          <div class="col-md-4"><a href="https://thehyve.nl/" target="_blank"><img src="images/Partners/logo%20-%20the%20hyve.png" style="width: 250px;
                          height: 250px; object-fit:scale-down;"></a></div>
                          
                          
                          <div class="col-md-4"><a href="https://www.euretos.com/" target="_blank"><img src="images/Partners/logo%20-%20euretos.png" style="width: 250px;
                          height: 250px; object-fit:scale-down;"></a></div>
                          
                          
                          <div class="col-md-4"><a href="https://home.kpmg/nl/en/home.html" target="_blank"><img src="images/Partners/logo%20-%20KPMG.png" style="width: 250px; height: 250px; object-fit:scale-down;"></a></div>

                          
                          <!-- de vierde rij van partners -->
                          
                          <div class="col-md-4"><a href="https://www.taxonic.com/en/" target="_blank"><img src="images/Partners/logo%20-%20taxonic.png" style="width: 250px;
                          height: 250px; object-fit:scale-down;"></a></div>
                          
                          
                          <div class="col-md-4"><a href="https://www.innopay.com/en" target="_blank"><img src="images/Partners/logo%20-%20innopay.png" style="width: 250px;
                          height: 250px; object-fit:scale-down;"></a></div>
                          
                          
                          <div class="col-md-4"><a href="http://codevence.com/" target="_blank"><img src="images/Partners/logo%20-%20codevence.png" style="width: 250px; height: 250px; object-fit:scale-down;"></a></div>
                          
                          <!-- de vijfde rij van partners -->
                          <div class="container-fluid">

                           <div class="col-md-4" ><a href="https://www.elsevier.com/" target="_blank"><img src="images/Partners/logo%20-%20elsevier.png" style="width: 250px;
                          height: 250px; object-fit:scale-down; "></a></div><br>
                          
                          
                          <div class="col-md-4"><a href="https://www.castoredc.com/" target="_blank"><img src="images/Partners/logo%20-%20castor.png" style="width: 250px; height: 250px; object-fit:scale-down; margin-bottom: 25%;"></a></div>
                          
                          </div>
                          
                          
                          
                          
                          
                           <h4 style="text-align: left;">For more information or if you want to join the consortium, please <a href="Contact" style="color:#68baa5">contact us here</a>.</h4>
                          

                       </div>

                     <div class="col-md-2"><br><!--Dit de andere 25% met de knop en de datum voor events wat eerder werdt vermeld-->
                      
                         <a href="Contact" class="btn btn-success" style="padding: 5px 56px; font-size: 20px; margin-top: 20%;  ">Join</a><!--Dit de contact knop--></p>
                         
                         <p style="text-align: left;"><b><a href="#Consortium" style="color:#68baa5">Consortium</a></b></p>
                         <p style="text-align: left;"><b><a href="#Aims" style="color:#68baa5">Aims</a></b></p>
                         <p style="text-align: left;"><b><a href="#Benefits" style="color:#68baa5">Benefits</a></b></p>
                         <p style="text-align: left;"><b><a href="#Membership" style="color:#68baa5">Membership</a></b></p>
                         <p style="text-align: left;"><b><a href="#Offerings" style="color:#68baa5">Offerings</a></b></p>
                         <p style="text-align: left;"><b><a href="#Partners" style="color:#68baa5">Partners</a></b></p>
                         
                   </div>
              </div>
          </div>
        </div>
    <br> <br> <br>
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
<!--Copyright begint hier-->

<div class="copyright">
        
  
    <p> <a href="https://creativecommons.org/licenses/by/4.0/ ">CC BY</a> 2019 - Phortos Consultants | Created by <a href="http://www.sync-development.nl/">Sync Development</a></p>
</div>



         
</div>
</body>   
</html>

