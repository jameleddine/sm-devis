@extends('......template')
@section('content')
<div style="text-align: center;">
<h1>Comment ça marche?</h1>
<img src="img/Global.jpg"/> </div>
   <div class="formulaireInscription">
    <div id="left" class="zoneleft">

            <center><h3 class="h3_titre_DV">Fourniture et pose</h3><br>
            <img src="sc/alarm.jpg" width="300px" height="300px"/></center>
            <p>Vous êtes locataire ou propriétaire et la sécurité de vos proches face aux éventuels risques d'incendie ou autre vous inquiète ? Il existe de nombreuses solutions pour répondre à votre problème :
             alarmes incendies, détecteurs, systèmes centralisés, etc.
            Pour vous y retrouver face à ce marché relativement nouveau en France, SM Devis vous permet de formuler une demande de devis alarme et sécurité incendie pour votre maison sur son site.
            Partenaire avec de nombreuses entreprises françaises présentes partout en France, vous pourrez grâce à notre site, être mis en relation avec des professionnels qualifiés proche de votre localisation au meilleur prix !
             Choisissez la catégorie correspondante à
             la sécurité que vous souhaitez apporter à votre domicile et remplissez le formulaire qui vous sera présenté. Nos professionnels vous contacteront sous quelques jours pour répondre à votre devis alarme.</p>

        </div>

             <div id="formulaire">
        <form action="" class="register">
            <h1>Devis pour:</h1><h1 class="h1_titre_DV"> "Fourniture et pose"</h1>
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
