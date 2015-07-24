@extends('template')
@section('content')

<div class="container"></div>
<div  id="menu"style="width: 60%;margin: 0 auto;">


    <div class="panel list-group">

       <!-- <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sl" data-parent="#menu">Alarme et securité <span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">5</span></a>
            <div id="sl" class="sublinks collapse">
                <a href="./fourniture_et_pose" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Alarme : fourniture et pose </a>
                 <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Sécurité incendie</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Serrure : fourniture, installation, réparation</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Gardiennage de société</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Télésurveillance et vidéosurveillance </a>

             </div>-->


            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sn" data-parent="#menu">Analyse <span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">3</span></a>
            <div id="sn" class="sublinks collapse">
            
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Analyses fluides frigorigènes</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Analyses huiles  </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Analyses frigoporteurs / caloporteurs </a>
           </div>
            
             <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sa" data-parent="#menu">Architecture expertise<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">5</span></a> 
            <div id="sa" class="sublinks collapse">
            
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Architecte (projet de construction</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Architecte (projet d'aménagement intérieur</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Architecte (projet de rénovation </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Mise en oeuvre  </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Récupération des huiles usagés</a>
            </div>


             <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sb" data-parent="#menu">Architecture interieur <span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">5</span></a> 
            <div id="sb" class="sublinks collapse">
            
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Plan de maison </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Architecte paysagiste</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Maître d'oeuvre Décorateur</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Bureau d'études - Ingénierie</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Loi Carrez - Métrage Economiste </a>
            </div>

             <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sc" data-parent="#menu">Brasures <span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">3</span></a>
            <div id="sc" class="sublinks collapse">
           
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Brasures cupro/argent/phosphore sans cadmium </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Brasures haute teneur argent sans cadmium </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Flux </a>
            </div>

             <a href="#" class="list-group-item" data-toggle="collapse" data-target="#se" data-parent="#menu">Plomberie <span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">2</span></a>
            <div id="se" class="sublinks collapse">
           
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Chaudière et chauffe-eau</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Travaux plomberie</a>
            </div>

             <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sd" data-parent="#menu">Toitures Façades <span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">5</span></a>
            <div id="sd" class="sublinks collapse">
            
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Couverture toiture : tuile, ardoise, zinc... </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Construction charpente</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Rénovation charpente </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Réparation charpente </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Gouttière </a>
            </div>

             <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sf" data-parent="#menu">Chauffage  Climatisation<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">21</span></a>
            <div id="sf" class="sublinks collapse">
           
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Chauffage électrique : installation et révision  </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Chauffage au gaz, fioul : installation et révision </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Chauffage central : installation</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Installation climatisation et révision </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Climatisation : fourniture </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Chauffage gaz</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Dépannage chaudière et entretien</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Convecteur électrique : fourniture et pose </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Pompe à chaleur air (aérothermie </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Chambre froide  </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Pompe à chaleur air (aérothermie</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Pompe à chaleur air (aérothermie) </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Chambre froide   </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Pompe à chaleur air (aérothermie)</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Pompe à chaleur terre (géothermie) </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> VMC (ventilation mécanique contrôlée)</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Poêle à bois </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Aéraulique</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Chauffe-eau thermodynamique:confort et economie d'energie </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Lavage sechage industrielle </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>hygiene </a>

            </div>

        <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sm" data-parent="#menu">Construction et rénovation </span><span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">9</span></a></a>
        <div id="sm" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Construction maison</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Construction garage et local</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Construction d'extension </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> carrelage faience</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Surélévation </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Rénovation maison et appartement </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Rénovation garage et local</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Installation cheminée et fournitures</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Conduit de cheminée </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Insert cheminée</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Ramonage cheminée </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Autre rénovation </a>


        </div>


            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sh" data-parent="#menu">Cuisine <span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">5</span></a> 
            <div id="sh" class="sublinks collapse">
            
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Installation  de cuisine et étude</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Meubles de cuisine : founiture et pose </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Hotte aspirante</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Plan de travail (cuisine et salle de bains</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Dégraissage hotte aspirante Electroménager </a>
            </div> 
            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sj" data-parent="#menu">Décoration <span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">2</span></a>
            <div id="sj" class="sublinks collapse">
            
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Agencement</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Décoration intérieur</a>
            </div> 
            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sk" data-parent="#menu">Diagnostic immobilier <span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">7</span></a>
            <div id="sk" class="sublinks collapse">
            
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Amiante</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Loi Carrez</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Plomb</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Termites </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>DPE (diagnostic de performance énergétique</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Diagnostic électricité </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Diagnostic gaz </a>

            </div> 
           <!-- <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sw" data-parent="#menu">Cheminée <span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">4</span></a>
            <div id="sw" class="sublinks collapse">
            
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Installation cheminée et fournitures</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Conduit de cheminée </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Insert</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Ramonage </a>
            </div>-->
            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sx" data-parent="#menu">Electricité  Alarme et securité<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">17</span></a>
            <div id="sx" class="sublinks collapse">
            
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Installation électricité et étude</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Rénovation électricité </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Travaux électricité</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Vérification installation électrique </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Câblage informatique  </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Panneaux solaires / photovoltaiques </a>

            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Eclairage intérieur</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Panneaux solaires / photovoltaiques</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Gardiennage / Société de surveillance </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Vidéosurveillance</a>

            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Blindage</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>interphone</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>vidéophone</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Désenfumage</a>

            <a href="./fourniture_et_pose" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Alarme : fourniture et pose </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Sécurité et Alarme incendie</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Gardiennage de société</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Télésurveillance et vidéosurveillance </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>sécurité électronique</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Domotique</a>

            </div> 
            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sce" data-parent="#menu">Escalier - Garde corps <span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">5</span></a>
             <div id="sce" class="sublinks collapse">
            
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Garde corps</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Escalier bois</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Escalier alu - métal</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Escalier béton</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Escalier (non précisé)</a>
            </div> 
            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sv" data-parent="#menu">Fenetre Volets Stores<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">6</span></a>
            <div id="sv" class="sublinks collapse">
            
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Fenêtre aluminium : fourniture et pose</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Fenêtre bois : fourniture et pose</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Fenêtre PVC : fourniture et pose </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Store d'intérieur </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Store d'extérieu </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Motorisation volet et store </a>
            </div>
            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sld" data-parent="#menu">Portes - Fenêtres<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">5</span></a>
                        <div id="sld" class="sublinks collapse">
                        <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Fenêtre - Porte fenêtre en PVC </a>
                        <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Fenêtre - Porte fenêtre en aluminium </a>
                        <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Fenêtre - Porte fenêtre en bois Fenêtre </a>
                        <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Porte fenêtre (non précisé) Fenêtre de toit </a>
                          <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Double vitrage </a>
                                    <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Remplacement de fenêtre cassée  </a>
                        <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Habilitations et certifications  </a>

            </div>

            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#slf" data-parent="#menu">Porte Portails clotures<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">4</span></a>
            <div id="slf" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Porte (y compris blindée) : fourniture et installation</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Portail : fourniture et installation</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Clôture : fourniture et installation </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Motorisation portail, porte de garage </a>

            </div>

            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sla" data-parent="#menu">Frigoporteurs Caloporteurs <span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">5</span></a> 
            <div id="sla" class="sublinks collapse">

            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Frigoporteurs</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Caloporteurs </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Traitement et additifs</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Récupération et régénération des frigoporteurs / caloporteurs</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Récupération de l'alcali </a>
            </div> 
            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#slz" data-parent="#menu">Froid Industriel et Commercial <span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">14</span></a>
             <div id="slz" class="sublinks collapse">
            
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Fluides frigorigènes</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Equippement frigorifique , Climatique et thermique</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Construction isothermique</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Equippement frigori </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Armoire refrigerée </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Mobilier frigorifique</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Régénération des HCFC/ HFC</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Materiels  frigorifiques</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Materieles chauffage </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Pompes à chaleur aérothermique </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Pompes à chaleur géothermique </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Biomasse </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Chauffage solaire </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Chauffage photovoltaique </a>

            </div>
            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sle" data-parent="#menu">Huile<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">5</span></a> 
            <div id="sle" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Les huiles minérales </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Les huiles semi-synthétiques </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Les huiles synthétiques </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Mise en oeuvre </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Récupération des huiles usagés </a>




            </div> 



            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#slr" data-parent="#menu">Isolation<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">6</span></a>
             <div id="slr" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right">Isolation phonique et acoustique</span> </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Isolation thermique </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Isolation comble </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Isolation façade </a>

            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Isolation toiture</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Cloison isolante</a>
           




            </div> 
            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#slt" data-parent="#menu">Jardin Terrasse<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">6</span></a>
            <div id="slt" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Dallage ou pavage de terrasses </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Entretien de jardin (ponctuel ou à l'année)</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Création de terrasse </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Matériel d'entretien - Filtration - Local technique </a>
            
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Pose d'une margelle</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Récupération d'eau de pluie </a>




            </div>
             <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sly" data-parent="#menu">Maconnerie<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">5</span></a>
            <div id="sly" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Construction mur et cloison</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Dalle béton</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Travaux maçonnerie </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Rénovation mur, cloison et plafond </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Sciage et carottage (ouverture dans un mur)</a>
           




            </div>
            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#slu" data-parent="#menu">Materiels<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">10</span></a>
            <div id="slu" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Transfert et récupération </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Balances </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Appareils de mesure et de contrôle </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Pompes à vide </a>
            
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Analyseur </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Flexibles et raccords </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Détection des fuites </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Mise en oeuvre des frigoporteurs et caloporteurs</a>

            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Mise en oeuvre de la brasure </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Mise en oeuvre étanchéité </a>




            </div>
            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sli" data-parent="#menu">Nettoyage<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">4</span></a>
            <div id="sli" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Nettoyage interne des installations frigorifiques </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Nettoyage interne des circuits frigoporteurs / caloporteurs </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Traitement de l\'eau des circuits fermés de chauffage et de climatisation</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Nettoyage externe des installations thermiques </a>
            

            </div>
             <a href="#" class="list-group-item" data-toggle="collapse" data-target="#slo" data-parent="#menu">Norme et regelation de gaz<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">11</span></a>
            <div id="slo" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Entretien vos installations gaz naturel</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>La réglementation des fluides frigorigènes </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Réglementation gaz dans les bâtiments d’habitation </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Réglementation : ce qui change au 1er janvier 2015 </a>
            
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> RT 2015, nouvelle norme isolation, nouveaux enjeux énergétiques </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Réglementation climatisation </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Réglementation chauffage </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Réglementation pompe a chaleur </a>

            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Réglementation solaire</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Réglementation photovoltaique  </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Réglementation energie renouvelable</a>

            </div>


            <!--</div> <a href="#" class="list-group-item" data-toggle="collapse" data-target="#slp" data-parent="#menu">Paysagiste<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">5</span></a>
            <div id="slp" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Aménagement de jardin et création </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Arrosage automatique : fourniture et pose </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Abris de jardin</a>

            </div>-->

             <a href="#" class="list-group-item" data-toggle="collapse" data-target="#slq" data-parent="#menu">Peinture - Sol  Revêtement<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">3</span></a>
            <div id="slq" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Peinture</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Peinture décorative </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Ravalement et étanchéité </a>




            </div>
             <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sls" data-parent="#menu">Piscine<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">9</span></a>
            <div id="sls" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Construction de piscine</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Abris de piscine </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Alarme piscine</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Accessoires de piscine</a>
            
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Barrière de piscine </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>écurité piscine (alarme, barrière,...)</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Couverture piscine </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Barrière de piscine  </a>

            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> Chauffage piscine</a>
            </div>



             <a href="#" class="list-group-item" data-toggle="collapse" data-target="#slaa" data-parent="#menu">Prestations de services <span on ="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">5</span></a>
            <div id="slaa" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Prestations d'Ingénieries</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Récupération, régénération et traitement des déchets </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Bases réglementaires </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Habilitations et certifications</a>



            </div>
             <a href="#" class="list-group-item" data-toggle="collapse" data-target="#slh" data-parent="#menu">Revetement sol <span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">5</span></a> 
            <div id="slh" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right">Carrelage : fourniture et pose</span> </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right">Sol marbre, pierre naturelle : fourniture et pose</span> </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Moquette : fourniture et pose  </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Plancher en bois : fourniture et pose </a>
            
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Parquet : fourniture et pose</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Lino : fourniture et pose </a>




            </div>
            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#slj" data-parent="#menu">Salle de bain et  WC <span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">5</span></a>
            <div id="slj" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Sanitaires </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Etude et installation (douche, lavabo, baignoire, bidet, wc...) </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Hammam, Sauna, Spa  </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Meubles de salle de bains</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Accessoires de salle de bains </a>




            </div>
            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#slk" data-parent="#menu">Toitures  Façades Charpente<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">10</span></a>
            <div id="slk" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Couverture/Toiture (tuile, ardoise, zinc,...) </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Charpente bois </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Charpente métallique </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Etanchéité toiture terrasse  </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Gouttières (pose, réparation, nettoyage)  </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Traitement bois et charpentes Aménagement de combles </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Fenêtre de toit Toiture végétalisée</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Paratonnerre / Parafoudre </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Ravalement de façade </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Enduit de façade </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Isolation par l'extérieur </a>



            </div>
            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#sll" data-parent="#menu">Traitement de l'eau<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">7</span></a>
            <div id="sll" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span> chauffe-eau thermodynamique</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>chauffe-eau solaire independant </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>chauffe-eau thermodynamique solaire </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>cumulus </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Filtration </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>détartrage </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>désinfection </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Adoucisseur osmosseur </a>


            </div>

             <a href="#" class="list-group-item" data-toggle="collapse" data-target="#slw" data-parent="#menu">Travaux jardin<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">6</span></a>
            <div id="slw" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Abattage</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Élagage</a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Pelouse : création et entretien </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Création de jardin  </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Décoration de jardin </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Entretien de jardin </a>

            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Aménagement de jardin et création </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Arrosage automatique : fourniture et pose </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Abris de jardin</a>


            </div>
            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#slc" data-parent="#menu">Travaux public terrassemet<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">4</span></a>
                <div id="slc" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Démolition, acheminement gravats </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Terrassement </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Taille de pierre </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Forage </a>

            </div>
            <a href="#" class="list-group-item" data-toggle="collapse" data-target="#slv" data-parent="#menu">Veranda<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">4</span></a>
            <div id="slv" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Véranda </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Sas d'entrée </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Pergola </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Verrière </a>


            </div>
             <!--<a href="#" class="list-group-item" data-toggle="collapse" data-target="#slb" data-parent="#menu">Vitrerie<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">2</span></a>
        <div id="slb" class="sublinks collapse">
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Double vitrage </a>
            <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Remplacement de fenêtre cassée  </a>

            </div>
            </div>-->
             <a href="#" class="list-group-item" data-toggle="collapse" data-target="#slm" data-parent="#menu">Petits travaux<span class="glyphicon glyphicon-plus pull-right"></span><span class="label label-info pull-right">6</span></a>
                        <div id="slm" class="sublinks collapse">
                        <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Petits travaux en électricité (rajout de prises, de luminaires...) </a>
                        <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Dépannage plomberie </a>
                        <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Entretien et dépannage de chaudière </a>
                        <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Petits travaux de maçonnerie</a>
                        <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Dépannage de toiture </a>
                        <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Entretien et/ou dépannage de Pompe à Chaleur Air-Eau </a>
                        <a href="./DemandeDevis" class="list-group-item small"><span class="glyphicon glyphicon-chevron-right"></span>Entretien et/ou dépannage de Pompe à Chaleur Air-Air </a>


                        </div>
    </div>
</div>
@stop




