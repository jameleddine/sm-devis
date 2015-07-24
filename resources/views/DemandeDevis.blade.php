@extends('template')
@section('content')

   <div class="formulaireInscription">
    <div id="left" class="zoneleft">

            <h3>Warning</h3>
            <p>cette partie pour comment ca marche</p>

        </div>

             <div id="formulaire">
        <form action="" class="register">
            <h1>Devis pour ******</h1>
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
                <legend>Description Projet</legend>
                <p>
                    <label>Code Postal<font color="red"> * </font></label>
                    <input type="text" class="long" required/>
                </p>
                 <p>
                    <label>Description<font color="red"> * </font></label>
                    <textarea id="textarea" name="textarea" cols="60" rows="3" placeholder="Description de votre projet"></textarea>


                </p>

                <p>
                <label>Delai<font color="red"> * </font></label>
                <select>
                    <option>Choisissez</option>
                    <option>Au plus vite</option>
                    <option>Moins d'1 mois</option>
                    <option>Moins de 6 mois</option>
                     <option>Autres</option>

                </select>
                </p>
                <p>
                <label>Objectif<font color="red"> * </font></label>
                <select>
                    <option>Choisissez</option>
                    <option>Trouver une entreprise disponible</option>
                    <option>Obtenir des devis puis trouver une entreprise</option>
                    <option>Avoir une idée des prix</option>
                     <option>Autres</option>

                </select>
                </p>
                 <p>
                    <input id="rad1" name="radGroupe" type="radio" value="5 devis" />
              <label for="rad1">J'ai le temps de recevoir (5 Devis)</label>
               <input id="rad2" name="radGroupe" type="radio" value="Meilleur Devis" />
                <label for="rad2">J'ai pas le temps (Meilleur Devis)</label>
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
            <h1>Devis pour ******</h1>
            <fieldset class="row1">
                <legend>Vos Coordonnées</legend>
                <p>
                    <label>Nom et Prenom<font color="red"> * </font></label>
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
                <legend>Description Projet</legend>
                <p>
                    <label>Code Postale de votre projet <font color="red"> * </font></label>
                    <input type="text" class="long" required/>
                </p>
                 <p>
                    <label>Description<font color="red"> * </font></label>
                    <textarea id="textarea" name="textarea" width="200px">Description de votre projet</textarea>
                    

                </p>
                <label>Delai<font color="red"> * </font></label>
                <select>
                    <option>Choisissez</option>
                    <option>Au plus vite</option>
                    <option>Moins d'1 mois</option>
                    <option>Moins de 6 mois</option>
                     <option>Autres</option>

                </select>
                <label>Objectif<font color="red"> * </font></label>
                <select>
                    <option>Choisissez</option>
                    <option>Trouver une entreprise disponible</option>
                    <option>Obtenir des devis puis trouver une entreprise</option>
                    <option>Avoir une idée des prix</option>
                     <option>Autres</option>

                </select>
                 <p>
                    
               
                  
                    <label class="gender">J'ai le temps de recevoir (5 Devis) </label>
                    <input type=radio name="civil" value="Particulier">
                    <label class="gender">J'ai pas le temps (Meilleur Devis)</label>
                    <input type=radio  name="civil" value="professionnel">
                    
                </p>
              
               
            </fieldset>
           
            <fieldset class="row4">
                <legend>
                </legend>
                <p class="agreement">
                   <font color="red"> * </font> Champs Obligatoire 
                </p>
            </fieldset>
            <button class="button">Envoyer &raquo;</button>
        </form>
        </div>
        <br>
      </div>
    
-->





