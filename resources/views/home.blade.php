@extends('template')
@section('content')

<!--this is a test commit-->
<header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="fill" style="background-image:url('Slide3.jpg');"></div>
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('Slide4.jpg');"></div>
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('Slide7.jpg');"></div>
                    <div class="carousel-caption">
                        <!--<h2>Caption 3</h2>-->
                    </div>
                </div>
                <div class="item">
                      <div class="fill" style="background-image:url('Slide6.jpg');"></div>
                      <div class="carousel-caption">
                                        <!--<h2>Caption 3</h2>-->
                     </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
</header>

<div class="container">
            <div class="row">

                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <div class="col-sm-6 col-md-6">
                            <form class="navbar-form" role="search" method="get" id="search-form" name="search-form">
                                <div class="input-group">
                                    <input type="text" class="form-control-search" placeholder="Activité Catégorie Artisant..." id="query" name="query" value="">
                                       <div class="input-group-btn">
                                    <button type="submit" class="btn btn-succes" value="Recherche"><span class="glyphicon glyphicon-search"></span></button>
                                   </div>
                                </div>
                            </form>
                        </div>



                </div>
            </div>
        </div>

<center><div class="inscription">
                   <div class="particulierh">
                    <div class="dashboard-div-wrapperheader">
                        <h2 class="titreheaderpar">Particulier </h2>
                       
                        
                    
                        <div class="headerChoixCat">
                        <img  class="imgins" src="img/parti.png">
                    
                         <h5 class="soustitreheader"><ul>
                            <li><span class="glyphicon glyphicon-ok"></span> Un projet à réaliser chez vous</li>
                            <li><span class="glyphicon glyphicon-ok"></span> Trouvez un comptable pour votre entreprise</li>
                            <li> <span class="glyphicon glyphicon-ok"></span> Besoin d'une aide ponctuelle ou quotidienne</li>
                            <li> <span class="glyphicon glyphicon-ok"></span> devis pour vos projets en 3 min</li>
                        </ul></h5>
                    </div>
                    </devis>
                        <a href="./ChoixCat"><h4 class='btnh'>Demandez un devis gratuit!</h4></a>
                                                  </div>
                    </div>
                     
                    <div class="professionnelh">
                    <div class="dashboard-div-wrapperheader">
                        <h2 class="titreheaderpro">Professionnel ou Artisan </h2>
                       
                        <div class="headerChoixCat">
                    
                   
                        <img class="imgins" src="img/pro.png">
                         <h5 class="soustitreheader"><ul>
                            <li><span class="glyphicon glyphicon-ok"></span> Trouvez de nouveaux clients certifiés par nos soins</li>
                            <li><span class="glyphicon glyphicon-ok"></span> Soyez visible sur internet avec votre fiche entreprise</li>
                            <li> <span class="glyphicon glyphicon-ok"></span> Répondrez aux demandes de devis qui vous intéressent</li>
                            <li><span class="glyphicon glyphicon-ok"></span> Plus de 100 demande de devis en attente aujourd'hui</li></ul></h5></div>
                         <a href="./ArtisanProfessionnel"><h4 class='btp'>Devenez partenaire gratuitement!</h4></a>
                    </div></div> 
                </div></center>          
<!---------------------------
voir style.css
--------------------------- -->

            <div class="generalcat">
                <h2 class="h2_titre"><span>Choisissez une catégorie ci dessous et recevez jusqu'à</span><span style="color:#F44900"> 5 devis gratuits</span></h2>
                <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="habitat">
                    <a href="./habitat">
                    <div class="dashboard-div-wrapperModifier">
                        <img class="imgDevis" src="img/Habitat2.jpg" width="180px" height="180px" style="border-radius: 30px;">
                        

                         
                    </div></a>
                </div></div>
                 <div class="col-md-3 col-sm-3 col-xs-6">
                 <div class="serviceperso">
                    <a href="./personne">
                    <div class="dashboard-div-wrapperModifier">
                        <img src="img/serviceàla personne.jpg" width="180px" height="180px" style="border-radius: 30px;">
                        

                         
                    </div></a>
                </div></div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                   <div class="assurance">
                    <a href="./assurance"><!--<h4 class="h4_titre">Assurances & Finances </h4>-->
                    <div class="dashboard-div-wrapperModifier">
                        <img src="img/assurance.jpg" width="180px" height="180px" style="border-radius: 30px;">
                        

                         
                    </div></a>
                </div></div>
                                <div class="col-md-3 col-sm-3 col-xs-6">

                 <div class="servicepro">
                    <a href="./entreprise">
                    <div class="dashboard-div-wrapperModifier">
                        <img src="img/Etreprise2.jpg" width="180px" height="180px" style="border-radius: 30px;">
                        

                         
                    </div></a>
                </div></div>
                </div>

            <div class='travaux'>
            <h2 class="h2_titre"><span style="margin-left:40px;">Travaux les plus demandés</span></h2>
            
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapperModifierTra">
                        <img src="salledebain.jpg" width="100%" height="100%"/>
                        
                         <h5>Chauffage et Climatisation </h5>

                </div>
                </div>
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapperModifierTra">
                        <i  class="fa fa-edit dashboard-div-icon" ></i>
                      
                         <h5>Cuisine et Salle de Bain </h5>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapperModifierTra">
                        <i  class="fa fa-cogs dashboard-div-icon" ></i>
                      



                         <h5>Electricité et Alarme </h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapperModifierTra">
                        <i  class="fa fa-bell-o dashboard-div-icon" ></i>
                        



                         <h5>Renovation </h5>
                    </div>
                </div>
            </div>
            <div class="appel-pro">
                <img src="professionel-artisan.png"/>
            </div>

<div style="text-align: center; margin-top: 20px;">
<div class="Conctactfooter">

         <img src="sm.png" width="150px" height="130px" />
         <h4 class="h4_titre"><span>Besoin d'aide appelez nous 09 898 767.</span></h4>

</div>&nbsp &nbsp
<div class="Conctactfooter">
                        <img src="img/manwithpc.png" width="150px" height="130px"/>
<h4 class="h4_titre"><span>Recevez 5 devis gratuits en 3 click</span></h4>
</div>&nbsp &nbsp
<div class="Conctactfooter">
                        <img src="img/RDV.png" width="150px" height="130px"/>
<h4 class="h4_titre"><span>Prenez RDV avec nos conseillers</span></h4>
</div>

</div>
<br>

<!---- popup--->


@stop



