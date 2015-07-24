@extends('template')
@section('content')
 
   <div class="formulaireInscription">     
    <div id="left" class="zoneleft">
           
            <h3>Warning</h3>
            <p>cette partie pour comment ca marche</p>
           
        </div>

             <div id="formulaire">
        <form action="" class="register">
            <h1>Trouvez un Artisan</h1>
            <fieldset class="row1">
            <p>
            <label>activité<font color="red"> * </font></label>
            <select>
                    <option>Choisissez</option>
                    <option>Construire une maison</option>
                    <option>Obtenir des devis puis trouver une entreprise</option>
                    <option>Avoir une idée des prix</option>
                     <option>Autres</option>

                </select>
            </p>
                <p>
                    <label witdh="200px"> votre projet<font color="red"> * </font></label>
                     <select>
                    <option>Choisissez</option>
                    <option>Construire une maison</option>
                    <option>Obtenir des devis puis trouver une entreprise</option>
                    <option>Avoir une idée des prix</option>
                     <option>Autres</option>

                </select>
                   
                </p>
                </fieldset>
                 <legend>Description Projet</legend>
                <p>
                    <label>Code Postal <font color="red"> * </font></label>
                    <input type="text" class="long" required/>
                </p>
                 <p>
                    <label>Description<font color="red"> * </font></label>
                    <textarea id="textarea" name="textarea" cols="60" rows="3" placeholder="Description de votre projet"></textarea>
                    

                </p>

                <p>
                <label>Delai de réalisation<font color="red"> * </font></label>
                <select>
                    <option>Choisissez</option>
                    <option>Au plus vite</option>
                    <option>Moins d'1 mois</option>
                    <option>Moins de 6 mois</option>
                     <option>Autres</option>

                </select>
                </p>
               
            </fieldset>
           
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
                 <label>ville <font color="red"> * </font></label>
                     <input type="text" class="long" required/>
                   
                </p>
            </fieldset>
            <fieldset class="row1">
               
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