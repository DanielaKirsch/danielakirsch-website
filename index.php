

<!DOCTYPE html>
    <html lang="de" itemscope itemtype="http://schema.org/Article">
    <head>
        <meta charset="utf-8">
        <title>Daniela Kirsch - I write code</title>

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <meta name="author" content="Daniela Kirsch" />
        <meta name="robots" content="index, follow" />
        <meta name="keywords" content="react.js, react, react native,web engineering, web development, javascript, backbone.js" />
        <meta name="description" content="NYC Freelance Full Stack Web Developer - React.JS, JavaScript, Node.JS, Backbone.JS, PHP, Wordpress, Drupal, HTML & CSS" />
        
        <!--facebook meta -->
        <meta property="og:title" content="Daniela Kirsch - I write code." />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://danielakirsch.com" />
        <meta property="og:description" content="NYC Freelance Full Stack Web Developer - React.JS, JavaScript, Node.JS, Backbone.JS, PHP, Wordpress, Drupal, HTML & CSS" />
        <meta property="og:image" content="http://danielakirsch.com/images/daniela-kirsch_web3.jpg" />

        <!--twitter meta -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="fixed" />
        <meta name="twitter:url" content="http://danielakirsch.com" />
        <meta name="twitter:title" content="Daniela Kirsch - I write code" />
        <meta name="twitter:description" content="" />
        <meta name="twitter:image" content="http://danielakirsch.com/images/daniela-kirsch_web3.jpg" />


        <!-- schema for google plus -->

        <meta itemprop="name" content="">
        <meta itemprop="description" content="NYC Freelance Full Stack Web Developer - React.JS, JavaScript, Node.JS, Backbone.JS, PHP, Wordpress, Drupal, HTML & CSS">
        <meta itemprop="image" content="http://danielakirsch.com/images/daniela-kirsch_web3.jpg">


        <link href='http://fonts.googleapis.com/css?family=Montserrat:700|Open+Sans' rel='stylesheet' type='text/css'>
      
        <link rel="stylesheet" media="all" type="text/css" href="css/style.min.css">

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
       
        
        <script type="text/javascript" src="js/modernizr.js"></script>

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    
         <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58343440-1', 'auto');
  ga('send', 'pageview');




</script>



   
  </head>


  <?php

  $message = "";

  if(isset($_POST) && isset($_POST['submit']) && isset($_POST['email'])) {

    $email = $_POST['email'];
    $submit = $_POST['submit'];
    if($email != "") {

        $to = "daniela@nameface.com";
        $subject = "DanielaKirsch.com Contact!!!";
        $txt = $email;
        $headers = "From: daniela@nameface.com" . "\r\n";

        mail($to,$subject,$txt,$headers);




        $message = "Thank you! I'll get in touch with you as soon as possible!";



    }
    
    // $_POST = array();
    //unset($_POST['email']);

  }



  ?>
  <body>

<!-- <nav>

   <div class="row">


        <div class="small-12 columns">
            <ul class="vertical medium-horizontal menu">
              <li><a href="#tech">Technical Expertise</a></li>
              
              <li><a href="#nameface">NameFace.com</a></li>
              
              <li><a href="#projects">Projects</a></li>
              <li><a href="#press">Press</a></li>
              <li><a href="#events">Events</a></li>
              <li><a href="#events">Contact</a></li>
             
            </ul>
            </div>
            </div>


</nav> -->

<header class="marketing-hero home-large-hero">
    <div class="row">
        <div class="small-8 medium-6 medium-offset-1 large-offset-2 end columns">
            <p class="hero-main-header">Hey, I'm</p>
            <h1 class="hero-main-header">Daniela Kirsch</h1>
            
        </div>
    </div>

    <div class="row">
        <div class="small-6 medium-offset-1 large-offset-2 end columns">
            <p class="hero-main-header">NYC Freelance Full Stack Web-Developer <br>& Founder of <a href='http://nameface.com' >NameFace.com</a></p>
             
        </div>
    </div>
</header>

<div class="hireme-box">
    
   

    

    <?php 

    if(isset($message) && $message == "") {



    ?>

     <h4>Need a Freelance Coder?</h4>
    <h4>Contact Me!</h4>

    <form action="index.php" method="post" id="submitform">
        
    <input type="text" name="email" placeholder="Your Email">

   

    <input type="submit" name="submit" value="Send" class="button small" id="sendemail" onClick="fbq('track', 'Lead');">

    <p class="fontsmall">Daniela Kirsch <br>
    Long Beach, NY<br>
    718 679 8799<br>
    daniela@nameface.com</p>

    </form>

    <?php

    }
    else {
    ?>


<p class="message"><?php print($message); ?></p>
 <?php

    }
    
    ?>

</div>



<main>

    <div class="row">


        <div class="small-12 medium-4 columns">

            <img src="images/i-love-coding.jpg" alt="I love coding!">

        </div>

        <div class="small-12 medium-8 end columns">
          
            <p>Full Stack Web-Developer with over 17+ years experience in coding, planning, overseeing and managing web projects in the startup, ad agency, and entertainment industry. Proven record of 50+ web projects from zero to online.</p>

            <p>I'm a fast learner, very adaptable, hands-on mentality, always curious, strong work ethic, dedicated, excel in time-sensitive projects, organized, cosmopolitan, social media savvy.</p>

        </div>

        <div class="small-12 end columns">

            
            <p class="text-center">I'm looking forward to working on your projects!</p>

            <p class="text-center">Contact me: <a href="mailto:daniela@nameface.com">daniela@nameface.com</a></p>
            
        </div>
    </div>
    
    <div class="row">
        <div class="small-12 end columns">

        <h2 class="text-center">Technical Expertise</h2>

            <p>I'm an expert in JavaScript Development, Web Development in general and I started coding Apps with React Native a while ago. I also do PHP backend and MySQL development.</p>
        </div>


        <div class="small-12 medium-6 columns">
          
            <ul class="technical">

                    <li>React.js</li>
                    <li>React Native</li>
                    <li>App Development</li>
                    <li>JavaScript</li>
                    <li>JQuery</li>
                    <li>Backbone.js</li>
                    <li>Node.js</li>
                    <li>Express.js</li>
                    <li>D3.js</li>
                    <li>HTML</li>
                    <li>Microformats, schema.org</li>
                    <li>SEO-Optimization</li>
                    <li>Cross-Browser-Optimization</li>
                    <li>Grunt, Bower, Brunch</li>
                     <li>Drupal Commerce</li>
                    <li>GIT</li>
            </ul>
        </div>


        <div class="small-12 medium-6 columns">


            <ul class="technical">

                    <li>CSS</li>
                    <li>Amazon Web Services</li>
                    <li>SVG</li>      
                    <li>WordPress Themes and Plugin Development</li>
                    <li>Drupal Themes und Module Development</li>
                    <li>SASS, LESS, Stylus</li>
                    <li>Mobile First, Responsive Design, Progressive Enhancement</li>
                    <li>Mobile &amp; Smartphone-Optimization for iPhone, Android, iPad</li>
                    <li>PHP</li>
                    <li>BITV 2.0 valid Code</li>
                    <li>W3C valid HTML-Code</li>
                    <li>Wordpress WooCommerce</li>
                   
                    <li>Jira, Confluence</li>

                </ul>
            
        </div>
    </div>

    <div class="row">
        <div class="small-12 end columns">
          
            <h2 class="text-center">I'm based in New York City & Puerto Rico and I'm originally from Berlin, Germany.</h2>

            <p class="text-center">I have a valid working permit for the USA! (just in case you were wondering...)</p>
            
        </div>

        <div class="small-12 medium-4 columns">
            <img src="images/puerto-rico.jpg" alt="Daniela in Puerto Rico">
             <img src="images/puerto-rico2.jpg" alt="Daniela in Puerto Rico">
              <img src="images/coding.jpg" alt="Daniela coding">
        </div>

        <div class="small-12 medium-4 columns">
        <img src="images/newyork.jpg" alt="Daniela in New York City">
        <img src="images/party.jpg" alt="Daniela at a concert">
      
        </div>

        <div class="small-12 medium-4 columns">
        <img src="images/amazon.jpg" alt="Daniela with an Amazon Snowball">
        <img src="images/running.jpg" alt="Daniela running Half Marathon in San Juan">
        
         
        </div>




    </div>
<!-- 
    <div class="row">
         <div class="small-12 end columns">
          
            <h2 class="text-center">Here's what I've done so far</h2>
            
        </div>

        <div class="small-12 end columns">
          
            <h4 class="work">Web Developer and Founder NameFace</h4>
            <p>August 2015 to Current</p>
            <p>New York City</p>
            <ul>
                <li>NameFace is a web service for event photographers to name the celebrities in their photos with facial recognition.</li>
                <li>Coding the backend and frontend of NameFace from scratch, developing an App with React Native</li>
                <li>Building a startup with employees in New York City, relocating to the USA, attaining a working permit through a convincing business plan (E2 working VISA, valid Nov 2015 - Nov 2020)</li>
                <li>Finding investors successfully</li>
                <li>Marketing and acquiring customers (800 plus users)</li>
                <li>Covering New York Fashion Week, red carpets, galas and celebrity parties with a team of photographers and distributing photos internationally through SIPA USA, AP Images and Rex/Shutterstock</li>
                <li>NameFace was covered in Page Six, British Vogue, The Sun, Re/Code and many more publications: http://nameface.com/in-the-press</li>


            </ul>
            
        </div>
    </div>
 -->
    <div class="row">
         <div class="small-12 end columns">
          
            <h2 class="text-center">Daniela on Social Media</h2>
            
        </div>


       <div class="small-6 medium-2 columns">     
          <a class="socialmedia" href="https://www.facebook.com/danielakirsch" target="new">

            <img src="images/logos/fb.png" alt="https://www.facebook.com/danielakirsch">
            <span class="text-center">Facebook</span>
          </a>


        </div>


        <div class="small-6 medium-2 columns">       
          <a class="socialmedia" href="https://twitter.com/daniela" target="new">

            <img src="images/logos/twitter.png" alt="https://twitter.com/daniela">
            <span class="text-center">Twitter</span>
          </a>


        </div>

        <div class="small-6 medium-2 columns">       
          <a class="socialmedia" href="https://instagram.com/danielakirsch" target="new">

            <img src="images/logos/instagram.png" alt="https://instagram.com/danielakirsch">
            <span class="text-center">Instagram</span>
          </a>


        </div>

        <div class="small-6 medium-2 columns">     
          <a class="socialmedia" href="https://github.com/DanielaKirsch" target="new">

            <img src="images/logos/github.png" alt="https://github.com/DanielaKirsch">
            <span class="text-center">Github</span>
          </a>


        </div>

        <div class="small-6 medium-2 columns">       
          <a class="socialmedia" href="https://www.linkedin.com/in/danielakirsch/" target="new">

            <img src="images/logos/linkedin.png" alt="https://www.linkedin.com/in/danielakirsch">
            <span class="text-center">LinkedIn</span>
          </a>


        </div>

       <div class="small-6 medium-2 columns">          
          

            <img src="images/logos/snapchat.png" alt="NameFacePhotos">
            
          


        </div>



    </div>

    <div class="row">
        <div class="small-12 end columns">
          
            <h2 class="text-center">NameFace.com - Identify Celebrities in Photos with Facial Recognition</h2>
        
        </div>

        <div class="small-12 medium-5 columns">
            <img src="images/nameface-kick.jpg" alt="NameFace Facial Recognition">
        </div>

         <div class="small-12 medium-7 columns">
            <p>I started <a href="http://nameface.com" target="new">NameFace</a> in 2015 together with co-founder Steve Eichner, who is a fashion and celebrity photographer in New York City. NameFace uses facial recognition to identify celebrities, socialites and public personalities in photos.</p>
            <p>I coded the backend and frontend of NameFace from scratch and developed and App with React Native.</p>
        </div>

    </div>

    <div class="row">
       

         <div class="small-12 columns">
            <p>I started <a href="http://nameface.com" target="new">NameFace</a> in 2015 together with co-founder Steve Eichner, who is a fashion and celebrity photographer in New York City. NameFace uses facial recognition to identify celebrities, socialites and public personalities in photos.</p>
            <p>I coded the backend and frontend of NameFace from scratch and developed and App with React Native.</p>
        </div>

    </div>

     <div class="row">
        <div class="small-12 medium-5 columns">
            <img src="images/namefacegrowth.jpg" alt="NameFace growth">
        </div>

         <div class="small-12 medium-7 columns">
            <p>NameFace has around 800 recurring customers in the event, public relations, magazines and photographer industry. We have been features in Page Six, Vogue, The Sun, Re/Code and many more.</p>

            <p>NameFace is used at events like the Oscars, the Met Gala and New York Fashion Week.</p>
        </div>

    </div>   

    <div class="row">
        <div class="small-12 columns">
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/5zCSwTYWK5A" frameborder="0" allowfullscreen></iframe>   
        </div>

    </div>   
            
    

    <div class="row">
        <div class="small-12 end columns">
          
            <h2 class="text-center">Web Browser Animation for SMART - Mercedes Benz</h2>
            
            <p>I develped this fully responsive, internationalized Backbone.js frontend with SVG, D3.js and Greensock animations.</p>

            <iframe width="100%" height="500" src="https://www.youtube.com/embed/olb5sDMY1qk" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

     <div class="row">
         <div class="small-12 end columns">
          
            <h2 class="text-center">Customers I worked for</h2>
            
        </div>
    </div>

    <div class="row">
        <div class="small-12 large-4 columns">

            <img src="images/customers/smart.png" alt="SMART">

        </div>

        <div class="small-12 large-8 columns">

            <h3>SMART</h3>
            <p>Creating a large Single-Page-Website in Backbone.js. Drupal backend with a REST-API, internationalized in 7-languages, fully responsive, contents via Ajax, SVG animations, D3.js animations, Greensock animations.</p>
          
            
        </div>
    </div>

    <div class="row">

        <div class="small-12 large-4 columns">

            <img src="images/customers/mercedesbenz.png" alt="Mercedes Benz">

        </div>

        <div class="small-12 large-8 columns">

            <h3>Mercedes Benz</h3>
            <p>Developing web frontends, technical concepts and consulting in multiple web projects.</p>         
        </div>
    </div>

    <div class="row">

        <div class="small-12 large-4 columns">

            <img src="images/customers/telekom.png" alt="Telekom">

        </div>

        <div class="small-12 large-8 columns">

            <h3>Telekom</h3>
            <p>Developing web frontends with parallax and scroll animations for marketing websites.</p>         
        </div>

    </div>

    <div class="row">

        <div class="small-12 large-4 columns">

            <img src="images/customers/mtv.png" alt="MTV">

        </div>

        <div class="small-12 large-8 columns">

            <h3>MTV</h3>
            <p>Technical project management of a gaming platform for kids, concept development adequate and suitable for children, coordination of the team programming the platform.</p>         
        </div>
    </div>

    <div class="row">

        <div class="small-12 large-4 columns">

            <img src="images/customers/bbdo.png" alt="BBDO">

        </div>

        <div class="small-12 large-8 columns">

            <h3>BBDO</h3>
            <p>Technical concept creation for international projects of a premium automotive manufacturer, for publishing on international YouTube channel, in a blog and iPhone-app.</p>         
        </div>

    </div>

    <div class="row">

        <div class="small-12 large-4 columns">

            <img src="images/customers/adidas.png" alt="adidas">

        </div>

        <div class="small-12 large-8 columns">

            <h3>adidas</h3>
            <p>Development of ecommerce frontend templates in multiple projects.</p>         
        </div>

    </div>

    <div class="row">

        <div class="small-12 large-4 columns">

            <img src="images/customers/grey.png" alt="GREY">

        </div>

        <div class="small-12 large-8 columns">

            <h3>Grey</h3>
            <p>Development of frontend templates for a large German bank, optimization of templates to suit Internet Explorer down to version 6, template development for a Facebook-app, integrating jqGrid to display complex charts.</p>         
        </div>

    </div>

    <div class="row">

        <div class="small-12 large-4 columns">

            <img src="images/customers/axelspringer.png" alt="Axel Springer">

        </div>

        <div class="small-12 large-8 columns">

            <h3>Axel Springer</h3>
            <p>Creating web-frontends with Backbone.js in multiple projects for one of the highly-circulated daily newspapers in Germany.</p>         
        </div>

    </div>

    <div class="row">

        <div class="small-12 large-4 columns">

            <img src="images/customers/bayer.png" alt="Bayer">

        </div>

        <div class="small-12 large-8 columns">

            <h3>Bayer</h3>
            <p>Providing a website in Wordpress for a well-known medical product.</p>         
        </div>

    </div>

    <div class="row">
        <div class="small-12 large-4 columns">

            <img src="images/customers/jungvonmatt.png" alt="Jung von Matt">

        </div>

        <div class="small-12 large-8 columns">

            <h3>Jung Von Matt</h3>
            <p>Technical concepts in multiple projects: Facebook-apps, iPad-apps, magazine website.</p>         
        </div>
    </div>

    <div class="row">

        <div class="small-12 large-4 columns">

            <img src="images/customers/electronicarts.png" alt="Electronic Arts">

        </div>

        <div class="small-12 large-8 columns">

            <h3>Electronic Arts</h3>
            <p>FIFA Marketing: developing a quiz-app for marketing EA's new game FIFA 2011.</p>         
        </div>

    </div>

    <div class="row">

        <div class="small-12 large-4 columns">

            <img src="images/customers/interactivetools.png" alt="Interactive Tools">

        </div>

        <div class="small-12 large-8 columns">

            <h3>Interactive Tools</h3>
            <p>Frontend and backend development in multiple projects, pixel-perfect coding of templates and Javascript animations, tying an existing frontend to a Drupal backend.</p>         
        </div>

    </div>

    <div class="row">

        <div class="small-12 large-4 columns">

            <img src="images/customers/universum.png" alt="Universum">

        </div>

        <div class="small-12 large-8 columns">

            <h3>Universum AG</h3>
            <p>Drupal and WordPress development in multiple projects, coding of a website for a political party of the German Federal Government, event page for a political foundation.</p>         
        </div>

    </div>
    <div class="row">

        <div class="small-12 large-4 columns">

            <img src="images/customers/saintelmos.png" alt="Saint Elmos">

        </div>

        <div class="small-12 large-8 columns">

            <h3>Saint Elmo's</h3>
            <p>Backend development for an international pharmaceutical company, programming the backend for the redemption of 50,000 coupon codes sent to customers by mail.</p>         
        </div> 

    </div>



    



    <div class="row">
         <div class="small-12 end columns">
          
            <h2 class="text-center">In the Press</h2>
            
        </div>

    </div>

     <div class="row">
  
        <div class="small-12 medium-4 large-3 columns press">

            
            <a href="http://pagesix.com/2015/12/22/celeb-photographer-launches-the-shazam-of-faces" target="new" title="Celeb Photographer launches the Shazam of Faces"><img src="images/press/pagesix.png" alt="PageSix"></a>

         
            <h5>Page Six - New York Post</h5>
            <p class="smaller"><a href="http://pagesix.com/2015/12/22/celeb-photographer-launches-the-shazam-of-faces" target="new" title="Celeb Photographer launches the Shazam of Faces">Celeb Photographer launches the Shazam of Faces</a></p>

          </div>


          <div class="small-12 medium-4 large-3 columns press">

             <a href="http://recode.net/2015/12/23/shazam-for-photos-ids-famous-faces-for-paparazzi" target="new" title="Shazam for Photos ID's famous faces for paparazzi"><img src="images/press/recode.png" alt="Re/Code"></a>

              <h5>Re/Code</h5>
                <p class="smaller"><a href="http://recode.net/2015/12/23/shazam-for-photos-ids-famous-faces-for-paparazzi" target="new" title="Shazam for Photos ID's famous faces for paparazzi">Shazam for Photos ID's famous faces for paparazzi</a></p>


          </div>

           <div class="small-12 medium-4 large-3 columns press">

                 <a href="http://www.vogue.co.uk/news/2015/12/23/celebrities-who-look-alike---shazam-for-faces-nameface" target="new" title="Shazam for Faces"><img src="images/press/britishvogue.png" alt="British Vogue"></a>

                 <h5>British Vogue</h5>
            <p class="smaller"><a href="http://www.vogue.co.uk/news/2015/12/23/celebrities-who-look-alike---shazam-for-faces-nameface" target="new" title="Celebrities who look alike - Shazam for Faces">Shazam for Faces</a></p>


            </div>

            <div class="small-12 medium-4 large-3 columns press">

              <a href="http://www.thesun.co.uk/sol/homepage/showbiz/6832769/We-compare-Hollywood-doppelgangers.html" target="new" title="New facial recognition app can help us sort out who’s who in Hollywood"><img src="images/press/thesun.jpg" alt="The Sun UK"></a>

              <h5>The Sun</h5>
                <p class="smaller"><a href="http://www.thesun.co.uk/sol/homepage/showbiz/6832769/We-compare-Hollywood-doppelgangers.html" target="new" title="New facial recognition app can help us sort out who’s who in Hollywood">New facial recognition app can help us sort out who’s who in Hollywood</a></p>

             </div>

    </div>

     <div class="row">

         

          <div class="small-12 medium-4 large-3 columns press">

            <a href="http://t3n.de/news/nameface-shazam-fuer-fotos-hat-667505/" target="new" title="t3n"><img src="images/press/t3n.png" alt="NameFace: Das „Shazam für Fotos“ hat Berliner Wurzeln"></a>

           <h5>Germany t3n</h5>
            <p class="smaller"><a href="http://t3n.de/news/nameface-shazam-fuer-fotos-hat-667505/" target="new" title="NameFace: Das „Shazam für Fotos“ hat Berliner Wurzeln">NameFace: Das „Shazam für Fotos“ hat Berliner Wurzeln</a></p>


         </div>

          <div class="small-12 medium-4 large-3 columns press">

           <a href="http://webwereld.nl/security/91074-dit-is-een-van-de-engste-ontwikkelingen-van-het-jaar" target="new" title="Dit is een van de engste ontwikkelingen van het jaar"><img src="images/press/webwereld.png" alt="Webwereld.nl"></a>

            <h5>Netherlands Webwereld</h5>
            <p class="smaller"><a href="http://webwereld.nl/security/91074-dit-is-een-van-de-engste-ontwikkelingen-van-het-jaar" target="new" title="Dit is een van de engste ontwikkelingen van het jaar">Dit is een van de engste ontwikkelingen van het jaar</a></p>

         </div>

          <div class="small-12 medium-4 large-3 columns press">
             <a href="http://www.iltamakasiini.fi/artikkeli/349639-valokuvaaja-kehitti-uudenlaisen-kasvojen-tunnistuspalvelun-nettiin" target="new" title="Valokuvaaja kehitti uudenlaisen kasvojen tunnistuspalvelun nettiin"><img src="images/press/iltamakasiini.png" alt="Iltamakasiini"></a>

              <h5>Finland Iltamakasiini</h5>
            <p class="smaller"><a href="http://www.iltamakasiini.fi/artikkeli/349639-valokuvaaja-kehitti-uudenlaisen-kasvojen-tunnistuspalvelun-nettiin" target="new" title="Valokuvaaja kehitti uudenlaisen kasvojen tunnistuspalvelun nettiin">Valokuvaaja kehitti uudenlaisen kasvojen tunnistuspalvelun nettiin</a></p>


         </div>

         <div class="small-12 medium-4 large-3 columns press">
            <a href="http://pcworld.bg/25004_paparashka_radost__sajt_za_avtomatichno_razpoznavane_na_znamenitosti" target="new" title="PC WORLD» ЦИФРОВА ФОТОГРАФИЯ
Папарашка радост – сайт за автоматично разпознаване на знаменитости"><img src="images/press/pcworldbulgaria.png" alt="PC World Bulgaria"></a>

 <h5>PC World Bulgaria</h5>
            <p class="smaller"><a href="http://pcworld.bg/25004_paparashka_radost__sajt_za_avtomatichno_razpoznavane_na_znamenitosti" target="new" title="ЦИФРОВА ФОТОГРАФИЯ
Папарашка радост – сайт за автоматично разпознаване на знаменитости">ЦИФРОВА ФОТОГРАФИЯ
Папарашка радост – сайт за автоматично разпознаване на знаменитости</a></p>


         </div>

    </div>

    <div class="row">

         

          <div class="small-12 medium-4 large-3 columns press">

             <a href="http://www.3dnews.ru/925836" target="new" title="Запущен сервис по определению лиц знаменитостей"><img src="images/press/russia3dnews.png" alt="3D News Russia"></a>

               <h5>3D News Russia</h5>
            <p class="smaller"><a href="http://www.3dnews.ru/925836" target="new" title="Запущен сервис по определению лиц знаменитостей">Запущен сервис по определению лиц знаменитостей</a></p>


         </div>

          <div class="small-12 medium-4 large-3 columns press">
             <a href="http://technews.bg/article-87694.html#.VoKAE3XhAgs" target="new" title="ЗОнлайн услуга разпознава известните лица"><img src="images/press/technews.png" alt="Tech News Bulgaria"></a>
               <h5>Tech News Bulgaria</h5>
            <p class="smaller"><a href="http://technews.bg/article-87694.html#.VoKAE3XhAgs" target="new" title="Онлайн услуга разпознава известните лица">Онлайн услуга разпознава известните лица</a></p>
         </div>

          <div class="small-12 medium-4 large-3 columns press end">
              <a href="http://www.economic.bg/bg/news/6/sazdadoha-sajt-za-razpoznavane-na-izvestni-litsa.html" target="new" title="Създадоха сайт за разпознаване на известни лица"><img src="images/press/economic.png" alt="Economic Bulgaria"></a>

               <h5>Economic Bulgaria</h5>
            <p class="smaller"><a href="hhttp://www.economic.bg/bg/news/6/sazdadoha-sajt-za-razpoznavane-na-izvestni-litsa.html" target="new" title="Създадоха сайт за разпознаване на известни лица">Създадоха сайт за разпознаване на известни лица</a></p>

         </div>

    </div>




    <div class="row">
         <div class="small-12 end columns">
          
            <h2 class="text-center">New York City Events</h2>
            
        </div>
        

        

        <div class="small-12 medium-6 large-4 columns">      
         <div class="getty embed image" style="background-color:#fff;display:inline-block;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;color:#a7a7a7;font-size:11px;width:100%;max-width:452px;"><div style="padding:0;margin:0;text-align:left;"><a href="http://www.gettyimages.com/detail/518072578" target="_blank" style="color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;">Embed from Getty Images</a></div><div style="overflow:hidden;position:relative;height:0;padding:131.415929% 0 0 0;width:100%;"><iframe src="//embed.gettyimages.com/embed/518072578?et=TDiFvrhQQ6d0cl-rRs_qLw&tld=com&viewMoreLink=on&sig=xWuT2XTrCml5znZJjBciudTbWlKDzHh02Z8QHXdjoVM=&caption=true" width="452" height="594" scrolling="no" frameborder="0" style="display:inline-block;position:absolute;top:0;left:0;width:100%;height:100%;margin:0;"></iframe></div><p style="margin:0;"></p></div>

         <p class="smaller">'The Real Housewives Of New York City' Season 8 Premiere Party at Beautique, NYC</p>
        </div>

        <div class="small-12 medium-6 large-4 columns">      
            <div class="getty embed image" style="background-color:#fff;display:inline-block;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;color:#a7a7a7;font-size:11px;width:100%;max-width:395px;"><div style="padding:0;margin:0;text-align:left;"><a href="http://www.gettyimages.com/detail/507232688" target="_blank" style="color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;">Embed from Getty Images</a></div><div style="overflow:hidden;position:relative;height:0;padding:150.379747% 0 0 0;width:100%;"><iframe src="//embed.gettyimages.com/embed/507232688?et=UG-bqJfISvZpdsi0lVu2jQ&tld=com&viewMoreLink=on&sig=UL6NwWGdjgPKH8pJ0NGCD3VqrKVwShnBT4hzvzWqUcQ=&caption=true" width="395" height="594" scrolling="no" frameborder="0" style="display:inline-block;position:absolute;top:0;left:0;width:100%;height:100%;margin:0;"></iframe></div><p style="margin:0;"></p></div>
        <p class="smaller">Kelly Killoren Bensimon, Steve Eichner, Daniela Kirsch and Jill Kargman attend the NameFace.com Launch at No. 8</p>

        </div>


         


        <div class="small-12 medium-6 large-4 columns">    
            <div class="getty embed image" style="background-color:#fff;display:inline-block;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;color:#a7a7a7;font-size:11px;width:100%;max-width:396px;"><div style="padding:0;margin:0;text-align:left;"><a href="http://www.gettyimages.com/detail/507161474" target="_blank" style="color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;">Embed from Getty Images</a></div><div style="overflow:hidden;position:relative;height:0;padding:150.000000% 0 0 0;width:100%;"><iframe src="//embed.gettyimages.com/embed/507161474?et=8iZVS_ymTvJxJhVmy0cBMw&tld=com&viewMoreLink=on&sig=u_kCqT6mizE7Oyvn6MNSQhCxyG5R_2g_ZozFfU2L6hE=&caption=true" width="396" height="594" scrolling="no" frameborder="0" style="display:inline-block;position:absolute;top:0;left:0;width:100%;height:100%;margin:0;"></iframe></div><p style="margin:0;"></p></div>
            <p class="smaller">NameFace.com Launch at No. 8</p>

        </div>

        <div class="small-12 medium-6 large-6 columns">      
          <div class="getty embed image" style="background-color:#fff;display:inline-block;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;color:#a7a7a7;font-size:11px;width:100%;max-width:594px;"><div style="padding:0;margin:0;text-align:left;"><a href="http://www.gettyimages.com/detail/579695352" target="_blank" style="color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;">Embed from Getty Images</a></div><div style="overflow:hidden;position:relative;height:0;padding:66.666667% 0 0 0;width:100%;"><iframe src="//embed.gettyimages.com/embed/579695352?et=t6pMhffrT4pTmotr-c_FzA&tld=com&viewMoreLink=on&sig=B0O6DTGo7Km8kUwkMZQZM9mAIYvahRLBPv303Y-uHSU=&caption=true" width="594" height="396" scrolling="no" frameborder="0" style="display:inline-block;position:absolute;top:0;left:0;width:100%;height:100%;margin:0;"></iframe></div><p style="margin:0;"></p></div>

          <p class="smaller">LongHouse Reserve 2016 Jubilee Year Summer Benefit, EAST HAMPTON, NY</p>
            
        </div>


        <div class="small-12 medium-6 large-6 columns">    
            <div class="getty embed image" style="background-color:#fff;display:inline-block;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;color:#a7a7a7;font-size:11px;width:100%;max-width:435px;"><div style="padding:0;margin:0;text-align:left;"><a href="http://www.gettyimages.com/detail/509892722" target="_blank" style="color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;">Embed from Getty Images</a></div><div style="overflow:hidden;position:relative;height:0;padding:136.551724% 0 0 0;width:100%;"><iframe src="//embed.gettyimages.com/embed/509892722?et=FTX01GsoT9t4VOafM4ZkxA&tld=com&viewMoreLink=on&sig=NqNJJxzuve1YgzV_72AUQrGsxBzga_aJRwvjjGrxJ2I=&caption=true" width="435" height="594" scrolling="no" frameborder="0" style="display:inline-block;position:absolute;top:0;left:0;width:100%;height:100%;margin:0;"></iframe></div><p style="margin:0;"></p></div>

             <p class="smaller">Damnsel 'Garmeoplasty' - Presentation - Fall 2016 New York Fashion Week</p>

        </div>


    </div>

    


    <div class="row">
        <div class="small-12 columns">          
        <p>© Daniela Kirsch 2017</p>

        </div>
    </div>
    


</main>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '1018420698232557'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=1018420698232557&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->











</script>
   
    
  </body>
</html>