@extends('template')
@section('content')

   <div class="formulaireInscription">
    <div id="left" class="zoneleft">

            <h3>Warning</h3>
            <p>cette partie pour comment ca marche</p>
             <img class="imgins" src="img/pro.png">
            <input type="image" src="img/arti.png" style="margin:10px;  border-radius:10px; " />

        </div>

             <div id="formulaire">
        <form action="" class="register">
            <h1>INSCRIPTION DES ARTISANS</h1>
            <fieldset class="row1">
                <legend>Vos Coordonnées</legend>
                <p>
                    <label>Nom et Prenom<font color="red"> * </font></label>
                     <input type="text" class="long" required/>

                </p>
                 <p>
                    <label>civilité <font color="red"> * </font> </label>
                <input id="rad1" name="radGroupe" type="radio" value="M" />
              <label for="rad1">M</label>
               <input id="rad2" name="radGroupe" type="radio" value="Mme" />
                <label for="rad2">Mme</label>
              <input id="rad3" name="radGroupe" type="radio" value="Mlle" />
              <label for="rad3">Mlle</label>


                </p>
                <p>
                    <label>E-mail <font color="red"> * </font></label>
                     <input type="email" class="long" required/>

                </p>
                 <p>
                    <label>Téléphone <font color="red"> * </font></label>
                     <input type="text" maxlength="10" class="long" required/>

                </p>
                <p>
                 <label>Votre métier <font color="red"> * </font></label>
                     <input type="text" class="long" required/>

                </p>
            </fieldset>
            <fieldset class="row1">
                <legend>A propos de vos Activités</legend>

                 <p>
                    <label class="optional">url
                    </label>
                    <input class="long" type="text" value="http://"/>

                </p>
                  <p>
                    <label>Activité <font color="red"> * </font></label>
                    <input type="text" class="long" required/>
                </p>

                <p>
                    <label>Ville <font color="red"> * </font></label>
                    <input type="text" class="long" required/>
                </p>
                 <p>
                    <label>Code Postal <font color="red"> * </font></label>
                    <input type="text"
                      required/>
                </p>


            </fieldset>

            <div>

                <p class="agreement">
                   <font color="red"> * </font> Champs Obligatoire
                </p>
            <button class="button">Envoyer &raquo;</button></div>
        </form>
        </div>
        <br>
      </div>
@stop














<!--

   <div class="formulaireInscription">     
    <div id="left" class="zoneleft">
           
            <h3>Warning</h3>
            <p>cette partie pour comment ca marche</p>
           
        </div>

             <div id="formulaire">
        <form action="" class="register">
            <h1>INSCRIPTION DES ARTISANS</h1>
            <fieldset class="row1">
                <legend>Vos Coordonnées</legend>
                <p>
                    <label>Nom <font color="red"> * </font></label>
                     <input type="text" class="long" required/>
                   
                </p>
                 <p>
                    <label>civilité <font color="red"> * </font> </label>
                  <label>M</label>
                  <input type=radio name="choix" value="M">
                  <label>Mme</label>
                 <input type=radio name="choix" value="Mme">
                 <label> Mlle</label>
                  <input type=radio name="choix" value="Mlle">
                
               
                </p>
                <p>
                    <label>E-mail <font color="red"> * </font></label>
                     <input type="email" class="long" required/>
                   
                </p>
                 <p>
                    <label>Téléphone <font color="red"> * </font></label>
                     <input type="text" maxlength="10" class="long" required/>
                   
                </p>
                <p>
                 <label>Votre métier <font color="red"> * </font></label>
                     <input type="text" class="long" required/>
                   
                </p>
            </fieldset>
            <fieldset class="row1">
                <legend>A propos de vos Activités</legend>
            
                 <p>
                    <label class="optional">url 
                    </label>
                    <input class="long" type="text" value="http://"/>

                </p>
                  <p>
                    <label>Activité <font color="red"> * </font></label>
                    <input type="text" class="long" required/>
                </p>
               
                <p>
                    <label>Ville <font color="red"> * </font></label>
                    <input type="text" class="long" required/>
                </p>
                 <p>
                    <label>Code Postal <font color="red"> * </font></label>
                    <input type="text"
                      required/>
                </p>
              
               
            </fieldset>
           
            <fieldset class="row4">
                <legend>
                </legend>
                <p class="agreement">
                   <font color="red"> * </font> Champs Obligatoire 
                </p>
            </fieldset>
            <p><button class="button">Envoyer &raquo;</button></p>
        </form>
        </div>
        <br>
      </div>
-->







                 
            
              
               
               
              

