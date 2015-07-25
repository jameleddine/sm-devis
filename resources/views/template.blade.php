<!Doctype html>
<html lang="en">
<head>
	<meta charset= "UTF-8" >
	<title>My Website</title>
	{!! Html::style('assets/bootstrap/css/bootstrap.css') !!}
	{!! Html::style('assets/bootstrap/css/footer.css') !!}
	{!! Html::style('assets/bootstrap/css/slide.css') !!}
	{!! Html::style('assets/bootstrap/css/style.css') !!}
    {!! Html::style('assets/font_awesome/css/font-awesome.min.css') !!}

<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<!-- js -->
        <script src= "assets/bootstrap.js" ></script>
	<script src= "https://code.jquery.com/jquery.js" ></script>
	<script src= "//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>


</head>
<body  background="Background2.png">

    <div id='cssmenu'>

<ul>
    <li></li>
   <li class='last'><a href='./TrouverArtisan'><span><h5>Trouvez un artisan</h5></span></a>
   </li>
   <li class='last'><a href='./contact'><span><h5>Contact</h5></span></a></li>
   <li class='has-sub'><a href='./'><span><h5>A propos</h5></span></a>
   <li></li>
      <!--<ul>
         <li style="text-align:left;"><a href='#'><span>Comment ça marche</span></a></li>
         <li style="text-align:left;"><a href='#'><span>Condition d'utilisation</span></a></li>
      </ul>-->
   </li>
   <a href="./"><li style="float:left;margin-left: 5%;margin-right: -5%;"><img src="img/logo2.jpg" width="50%" height="50%"></li></a>
   <li style="float:right;margin-right: 5%; text-align: center;"><h3>Obtenez jusqu'a <br><br><i style="color: #18BA8C;">5 devis gratuits en 3 clics</i></h3></li>
   
</ul>
</div>

@yield('content')





        <footer class="footer_position">


            <div class="row-footer">
                <div class="col-lg-12 FooterColor">
                <div class="col-lg-3 col-md-6">
                <div class="container">
    
   
      
       
            

             <div class="col-lg-3 col-md-6">
                                    <h3>SM-DEVIS:</h3>
                                        <ul>
                                                <li><a href="#">Comment ça marche</a></li>
                                                <li><a href="#">Services qualité</a></li>
                                                <li><a href="#">Nos engagements</a></li>
                                                <li><a href="#">Avis SM-DEVIS</a></li>
                                        </ul>
                                    </div>
            <div class="col-lg-3 col-md-6">
            <h3>Follow:</h3>
                <ul>
                        <li><a href="#"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x"></i>Facebook</a></li>
                        <li><a href="#"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x"></i>Twitter</a></li>
                        <li><a href="#"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x"></i>Linkd'in</a></li>
                        <li><a href="#"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-github fa-stack-1x"></i>Github</a></li>
                </ul>
            </div>

             <div class="col-lg-3 col-md-6">
                                    <h3>Nos sites:</h3>
                                        <ul>
                                                <li><a href="#">SM-DEVIS.TN</a></li>
                                                <li><a href="#">SM-SERVICE.COM</a></li>

                                        </ul>
                                    </div>
            <div class="col-lg-3 col-md-6">
                <h3>Contact:</h3>
                <p>Vous aves des questions, un feedback?</p>
                <p><a href="" title="Contact me!"><i class="fa fa-envelope"></i> Contact</a></p>

 <hr>
                    <p>Copyright © SM-DEVIS | <a href="">Privacy Policy</a> | <a href="">Condition d'utilisation</a></p>

            </div>
       
            </div>
            </div>
            </div>
            </div>
               

                    

        </footer>

       <div class="">
        <a href="#0" class="cd-popup-trigger"><h5>Devis Express</h5></a>

        <div class="cd-popup" role="alert">

        	<div class="cd-popup-container">
        		<input type="text" name="name" placeholder="Nom et Prénom " />
        		<input type="email" name="mail" placeholder="Email" />
        		<input type="text" name="tel" placeholder="Téléphone" />
        	<div ><select name="select" >
        		<option>Urgent</option>
        		<option>Moin de 1 mois </option>
        			<option>Moin de 6 mois </option>
        				<option>Plus de 6 mois </option></div>

        	 <div> <textarea name="textarea" id="textarea" cols="45" rows="5" placeholder="Donnez nous les details de votre projet ...."></textarea></td></div>
        		<ul class="cd-buttons">

        		<li><a href="#0">Envoyer</a></li>

        		</ul>
        		<a href="#0" class="cd-popup-close img-replace">Close</a>
        	</div> </div><!-- cd-popup-container -->
          <!-- cd-popup -->

        <a href="#0" class="cd-popup-trigger-bis"><h5>Me Rappeler</h5> </a>
	    <form name="etrerappele" method="post" action="./" role="form">

        <div class="cd-popup-bis" role="alert">
        	<div class="cd-popup-bis-container">

        		<input type="number" name="tel" id="tel" placeholder="Votre numero de téléphone" />


        		<ul class="cd-buttons">
               <li> <button type="submit" class="btn btn-default">Envoyer
                										</button></li>
        		<!--<li><a href="#0">Envoyer</a></li>-->

        		</ul>
        	</div> <!-- cd-popup-container   <li><a href="#0" class="cd-popup-bis-close img-replace">Close</a></li>
-->
        </div> <!-- cd-popup -->
        </form>
</div>
{!! Html::script('assets/bootstrap/js/bootstrap.min.js') !!}
{!! Html::script('assets/bootstrap/js/npm.js') !!}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="assets/bootstrap/js/main.js"></script>
<script src="assets/bootstrap/js/modernizr.js"></script>


</body>
</html>