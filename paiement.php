<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/styles.css">
    
    <title>Flying Papers | Comparez plusieurs billets de transport et voyagez léger</title>
  </head>

  <body class="page-6">
    <nav class="navbar navbar-light navbar-expand-lg bg-faded">
      <a href="/flyingpapers/" class="navbar-brand"><img src="img/logo.PNG" alt="logo Flying Papers"/></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse w-100" id="collapsingNavbar">
          <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  🇫🇷 <i class="drop-arrow material-icons">expand_more</i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Français 🇫🇷</a>
                      <a class="dropdown-item" href="#">English 🇬🇧</a>
                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link nav-link-style" style="width:132px;" href="#">Vos réservations</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link nav-link-style" href="#">S'inscrire</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link btn-peche" href="#">Se connecter</a>
              </li>
          </ul>
      </div>
    </nav>

    <div class="recap-etapes col-sm-12">
      <div class="container" id="container-pay">
        <?php
          echo '
            <a href="/flyingpapers/optionsbillets.php?id_billet=' . $_SESSION['billet_id'] .'&total=' . $_SESSION["total"] . '&opt1_p=' . $_SESSION["opt1_p"] . '&opt1=' . $_SESSION["opt1"] . '&opt2_p=' . $_SESSION["opt2_p"] . '&opt2=' . $_SESSION["opt2"] . '" class="a1-p a">
                <p class="num-e">1</p>
                <p class="text-recap-e">Sélection des options</p>
              </a>
          ';
        ?>
        <div class="next"></div>
        <?php
          echo '
            <a href="/flyingpapers/porteaporte.php?id_billet=' . $_SESSION['billet_id'] .'&total=' . $_SESSION["total"] . '&opt1_p=' . $_SESSION["opt1_p"] . '&opt1=' . $_SESSION["opt1"] . '&opt2_p=' . $_SESSION["opt2_p"] . '&opt2=' . $_SESSION["opt2"] . '" class="a2-p a">
              <p class="num-e">2</p>
              <p class="text-recap-e">Porte-à-porte</p>
            </a>
                  
        <div class="next"></div>
        <a href="/flyingpapers/infospersos.php?id_billet=' . $_SESSION['billet_id'] .'&total2=' . $_SESSION["total2"] . '&opt1_p=' . $_SESSION["opt1_p"] . '&opt1=' . $_SESSION["opt1"] . '&opt2_p=' . $_SESSION["opt2_p"] . '&opt2=' . $_SESSION["opt2"] . '&opt_pap=' . $_SESSION["opt_pap"] . '&optb_pap=' . $_SESSION["optb_pap"] . '" class="a3-p a">
          <p class="num-e">3</p>
          <p class="text-recap-e">Informations personnelles</p>
        </a>
        
        <div class="next"></div>
        <a href="/flyingpapers/infospersos.php?id_billet=' . $_SESSION['billet_id'] .'&total2=' . $_SESSION["total2"] . '&opt1_p=' . $_SESSION["opt1_p"] . '&opt1=' . $_SESSION["opt1"] . '&opt2_p=' . $_SESSION["opt2_p"] . '&opt2=' . $_SESSION["opt2"] . '&opt_pap=' . $_SESSION["opt_pap"] . '&optb_pap=' . $_SESSION["optb_pap"] . '" class="previous">
          <img src="img/left-chevron.svg" alt="étape précédente">
        </a>';
        ?>
        <h5 class="titre-r">Paiement</h5>
        <a href="#" class="a4-p a">
          <p class="num-e">4</p>
          <p class="text-recap-e">Paiement</p>
        </a>
        
      </div>
    </div>

    <section class="paiement">
      <div class="container">
        <div class="wrapper">
          <?php
            function jaugeimg() {
              switch ($_SESSION['billet_mode_transport']) {
                  case 1:
                      echo "vide";
                      break;
                  case 2:
                      echo "vide";
                      break;
                  case 3:
                      echo "moy1";
                      break;
                  case 4:
                      echo "moy1";
                      break;
                  case 5:
                      echo "moy2";
                      break;
                  case 6:
                      echo "moy2";
                      break;
                  case 7:
                      echo "pleine";
                      break;
              }
            }
            echo '
            <div class="recap-t border-fp">
            <div class="ligne1">
              <div class="col-l">
                <h5 class="bold bleu-fp">Aller sélectionné</h5>
                <img src="img/ico_train.png" alt="icone train">
              </div>
              <div class="col-r">
                <p class="bold">Lun. 28 jan. 2021 • '. $_SESSION['billet_heure_depart_g'] .' - ' . $_SESSION['billet_heure_arrivee_g'] . ' </p>
              </div>
            </div>
            <div class="ligne2">               
              <div class="bloc1 bloc">
                <div class="s-ligne1">
                  <p>' . $_SESSION['billet_gare_depart'] . '</p>
                  <p class="u1">' . $_SESSION['billet_gare_c'] . '</p>
                </div>
                <div class="s-ligne2">
                  <div class="circle-l"></div>
                  <div class="blue-bar"></div>
                  <div class="circle-r"></div>
                </div>
                <div class="s-ligne3">
                  <p class="bold">' . $_SESSION['billet_heure_depart_g'] . '</p>
                  <div class="compagnie">
                    <p class="bold">' . $_SESSION['billet_duree_trajet1'] . '</p>
                    <img src="img/' . $_SESSION['billet_logo_compagnie1'] . '" alt="logo compagnie" style="max-height:30px; margin-top:5px; margin-bottom:5px;">
                    <p>' . $_SESSION['billet_num_transport1'] . '</p>
                  </div>
                  <p class="bold">' . $_SESSION['billet_heure_arrivee_c'] . '</p>
                </div>
              </div>
              <div class="bloc2 bloc">
                <p class="peche-fp small-p p1">Changement à ' . $_SESSION['billet_ville_c'] . '</p>
                <p class="peche-fp p2">• • •</p>
                <p class="peche-fp small-p p3">' . $_SESSION['billet_duree_c'] . '</p>
                <p class="peche-fp small-p p4">Correspondance <br>à la même localisation</p>
              </div>
              <div class="bloc2-r">
                <div class="ligne3-r">
                  <div class="flex-nw f1">
                    <p class="bold">' . $_SESSION['billet_co2_emis'] . '</p>
                    <img src="img/CO2.svg" alt="icone CO2">
                  </div>
                  <br>
                  <div class="flex-nw f2">
                    <p class="bold">' . $_SESSION['billet_pourcentage'] . '</p>
                    <img src="img/jaugeverte.svg" alt="icone jauge pollution">
                  </div> 
                </div> 
              </div> 
              <div class="bloc3 bloc">
                <div class="s-ligne1">
                  <p>' . $_SESSION['billet_gare_c'] . '</p>
                  <p class="u2">' . $_SESSION['billet_gare_arrivee'] . '</p>
                </div>
                <div class="s-ligne2">
                  <div class="circle-l"></div>
                  <div class="blue-bar"></div>
                  <div class="circle-r"></div>
                </div>
                <div class="s-ligne3">
                  <p class="bold">' . $_SESSION['billet_heure_depart_c'] . '</p>
                  <div class="compagnie">
                    <p class="bold">' . $_SESSION['billet_duree_trajet2'] . '</p>
                    <img src="img/' . $_SESSION['billet_logo_compagnie2'] . '" alt="logo compagnie" style="max-height:30px; margin-top:5px; margin-bottom:5px;">
                    <p>' . $_SESSION['billet_num_transport2'] . '</p>
                  </div>
                  <p class="bold">' . $_SESSION['billet_heure_arrivee_g'] . '</p>
                </div>
              </div>
            </div>
          </div>

              <div class="impact-ecolo">
                <div class="conteneur">
                  <h4 class="titre-ecolo bold">Impact Ecologique</h4>
                  <div class="columns-ecolo">
                    <div class="column-ecolo">
                      <div class="empreinteC">
                        <img src="img/co2-noir.svg" alt="CO2" class="co2">
                        <span class="jauges-label">' . $_SESSION['billet_co2_emis'] . '<span class="jauges-label-kgpourcent">KG</span></span>
                      </div>
                      <p>CO2 émis / pers. pour un aller</p>
                    </div>
                    <div class="column-ecolo">
                      <div class="empreinteC">
                        <img src="img/jauge-';
                        jaugeimg();
                        echo '-noir.svg" alt="Jauge" class="jauge">
                        <span class="jauges-label">' . $_SESSION['billet_pourcentage'] . '<span class="jauges-label-kgpourcent">%</span></span>
                      </div>
                      <p>Du quota annuel pour limiter le réchauffement</p>
                    </div>
                  </div>
                </div>
                <div class="separateur"></div>
              </div>
            ';
          ?>


          <div class="row2" style="display: flex; flex-wrap: wrap;">
            <div class="code-promo border-fp">
              <h5 class="bold bleu-fp">Code promo ?</h5>
              <div class="col-r">
                <input type="text" placeholder="Entrez-le ici">
                <input type="submit" placeholder="Valider" class="codepromo bouton-bleu">
              </div>
            </div>
            <div class="mode-paiement border-fp">
            <?php echo '
              <form method="post" id="myForm" action="/flyingpapers/confirmation-paiement.php?CARBONE='.$_SESSION['billet_co2_emis'].'&POURCENT='.$_SESSION['billet_pourcentage'].'&TRANSPORT='.$_SESSION['billet_mode_transport'].'">'
            ?>
              <h5 class="question bleu-fp bold">Moyen de paiement</h5>
              <div class="flex1">
                <div class="moyen_1 moyen">
                  <input type="radio" id="cb" name="moyen" value="CB" checked>
                  <label for="huey"><img src="img/moyen_1.png" alt="images cartes bancaires" /></label>
                </div>
                <div class="moyen_2 moyen">
                  <input type="radio" id="paypal" name="moyen" value="paypal">
                  <label for="huey"><img src="img/moyen_2.png" alt="image Paypal" /></label>
                </div>
                <div class="moyen_3 moyen">
                  <input type="radio" id="applepay" name="moyen" value="Apple Pay">
                  <label for="huey"><img src="img/moyen_3.png" alt="image Apple Pay" /></label>
                </div>
                <div class="moyen_4 moyen">
                  <input type="radio" id="googlepay" name="moyen" value="Google Pay">
                  <label for="huey"><img src="img/moyen_4.png" alt="image Google Pay" /></label>
                </div>               
              </div>
              <div class="cols">
                <div class="col-l">
                  <div class="ligne">
                    <label for="name">Nom complet</label>
                    <input type="text" id="name" name="name" required />
                  </div>
                  <div class="ligne">
                    <label for="number">Numéro de carte</label>
                    <input type="text" id="number" name="number" required />
                  </div>
                </div>
                <div class="col-r">
                  <div class="ligne">
                    <label for="exp">Date d'expiration</label>
                    <input type="text" id="exp" name="exp" placeholder="MM / AA" required />
                  </div>
                  <div class="ligne">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" required />
                  </div>
                </div>
              </div>
            </div>
            <div class="formulaire2 border-fp">
            
                <div class="ligne1">
                  <h5 class="bleu-fp bold">Adresse de facturation</h5>
                </div>
                <div class="cols">
                  <div class="col-l">
                    <label for="name-c">Nom</label>
                    <input type="text" id="name-c" placeholder="Nom complet" name="name-c" autocomplete="name" required />
                  </div>
                  <div class="col-r">
                    <label for="family-name">Entreprise (Facultatif)</label>
                    <input type="text" id="family-name" name="family-name" placeholder="Entreprise" autocomplete="organization" />
                  </div>
                </div>
  
                <div class="ligne2">
                  <label for="address">Adresse</label>
                  <input type="text" id="address" name="address" placeholder="Adresse" autocomplete="address-line1" required />
                </div>
                <div class="ligne2">
                  <label for="email">Complément d'adresse (Facultatif)</label>
                  <input type="email" id="email" name="email" placeholder="Complément d'adresse" autocomplete="address-line2" />
                </div>
                <div class="cols">
                  <div class="col-l">
                    <label for="ville">Ville</label>
                    <input type="text" id="ville" name="ville" placeholder="Ville" autocomplete="address-level2" required/>
                    <label for="pays" id="top">Pays</label>
                    <input type="text" id="pays" placeholder="Pays" name="country-name" required />
                  </div>
                  <div class="col-r">
                      <label for="code-postal">Code Postal</label>
                      <input type="text" id="code-postal" name="code-postal" placeholder="Code Postal" autocomplete="postal-code" required/>
                  </div>
                </div>
              </form>
            </div>
          </div>
         
          <div class="modalités modalités-r">
            <button class="accordion">
                  <h5 class="bold bleu-fp">Modalités</h5>
                  <img class="ico" src="img/down.svg" alt="flèche bas" />
                  <img class="ico2" src="img/top.svg" alt="flèche haut" />
            </button>
            <div class="panel" style="display: none;">
              <p class="bold billet2-m">Billet 1</p>
              <p class="small-p">Billet échangeable sous conditions, non remboursable.</p>
              <p class="bold billet2-m">Billet 2</p>
              <p class="small-p">
                Ce billet est uniquement valable pour le train sélectionné. Ce billet est échangeable avant le départ. Des frais fixes de 50 € par personne et par trajet vous seront demandés, ainsi que
                le montant de la différence si le nouveau billet est plus cher que l’original. Ce billet n’est pas remboursable.
              </p>
            </div>
          </div>

          <div class="grid-row2">
            <?php
              echo '
                <div class="recap-b">
                  <h5 class="bold bleu-fp">Récapitulatif</h5>
                  <div class="row row1">
                    <p class="small-p">Billet 1 (1 adulte)</p>
                    <p class="small-p">' . $_SESSION['billet_prix_opt1_trajet1'] . '€</p>
                  </div>
                  <div class="row row2">
                    <p class="text-option small-p" id="output1b">' . $_SESSION["opt1_p"] . '</p>
                    <p id="output1" class="small-p">' . $_SESSION["opt1"] . '</p>
                  </div>
                  <div class="row row3">
                    <p class="small-p">Billet 2 (1 adulte)</p>
                    <p class="small-p">' . $_SESSION['billet_prix_opt1_trajet2'] . '€</p>
                  </div>
                  <div class="row row2">
                    <p class="text-option small-p" id="output2b">' . $_SESSION["opt2_p"] . '</p>
                    <p id="output2" class="small-p">' . $_SESSION["opt2"] . '</p>
                  </div>
                  <div class="row rowx">
                    <p id="opt-pap1" class="small-p">' . $_SESSION["opt_pap"] . '</p>
                    <p id="opt-pap2" class="small-p">' . $_SESSION["optb_pap"] . '</p>
                  </div>
                  <div class="row row4">
                    <p class="small-p"><span class="bold">Total </span>(TTC)</p>';
                    if($_SESSION["totalb"] !== null && $_SESSION["totalb"] !== '') {
                      echo '<p class="small-p bold" id="resultat_somme">' . $_SESSION["totalb"] . '€</p>';
                    }
                    else if ($_SESSION["total"] !== null && $_SESSION["total"] !== ''){
                      echo '<p class="small-p bold" id="resultat_somme">' . $_SESSION["total"] . '€</p>';  
                    }
                    else {
                      echo '<p class="small-p bold" id="resultat_somme">' . $_SESSION['billet_prix_total_sans_options'] . '€</p>';  
                    }
                    echo'
                  </div>
                </div>
            ';
          ?>


            <div class="row3m modalités">
              <button class="accordion">
                <h5 class="bold bleu-fp">Modalités</h5>
                <img class="ico" src="img/down.svg" alt="flèche bas" />
                <img class="ico2" src="img/top.svg" alt="flèche haut" />
              </button>
              <div class="panel" style="display: none;">
                <p class="bold billet2-m">Billet 1</p>
                <p class="small-p">Billet échangeable sous conditions, non remboursable.</p>
                <p class="bold billet2-m">Billet 2</p>
                <p class="small-p">
                  Ce billet est uniquement valable pour le train sélectionné. Ce billet est échangeable avant le départ. Des frais fixes de 50 € par personne et par trajet vous seront demandés, ainsi que
                  le montant de la différence si le nouveau billet est plus cher que l’original. Ce billet n’est pas remboursable.
                </p>
              </div>
            </div>
            <button class="valider btn-peche" type="submit" form="myForm">Confirmer</button>
          </div>  

          </div>
        </div>
      </div>
    </section>

    <section class="footer">
      <div class="">
        <div class="row">
          <div id="entreprise" class="bloc">
            <h5>L'entreprise</h5>
            <a href="#"><p>Conditions d'utilisation</p></a>
            <a href="#"><p>Nos valeurs écologiques</p></a>
            <a href="#"><p>Devenez partenaire</p></a>
            <a href="#"><p>Mentions légales</p></a>
            <a href="#"><p>CGU/CGV</p></a>
            <a href="#"><p>Contact</p></a>
          </div>
          <div id="voyage" class="bloc">
            <h5>Votre voyage</h5>
            <a href="#"><p>Vos réservations</p></a>
            <a href="#"><p>Créer un compte</p></a>
            <a href="#"><p>Foire aux questions</p></a>
            <a href="#"><p>Avis de nos clients</p></a>
          </div>
          <div id="aide" class="bloc">
            <h5>Besoin d'aide</h5>
            <a href="#" class="bouton-aide bold bleu-fp">Centre d'aide</a>
          </div>
          <div id="nous-suivre">
            <div class="bloc">
              <h5>Nous suivre</h5>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <title>Facebook</title>
                  <path
                    d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"
                  />
                </svg>
              </a>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <title>Twitter</title>
                  <path
                    d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"
                  />
                </svg>
              </a>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <title>Instagram</title>
                  <path
                    d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"
                  />
                </svg>
              </a>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <title>Youtube</title>
                  <path
                    d="M186.8 202.1l95.2 54.1-95.2 54.1V202.1zM448 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48zm-42 176.3s0-59.6-7.6-88.2c-4.2-15.8-16.5-28.2-32.2-32.4C337.9 128 224 128 224 128s-113.9 0-142.2 7.7c-15.7 4.2-28 16.6-32.2 32.4-7.6 28.5-7.6 88.2-7.6 88.2s0 59.6 7.6 88.2c4.2 15.8 16.5 27.7 32.2 31.9C110.1 384 224 384 224 384s113.9 0 142.2-7.7c15.7-4.2 28-16.1 32.2-31.9 7.6-28.5 7.6-88.1 7.6-88.1z"
                  />
                </svg>
              </a>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <title>Instagram</title>
                  <path
                    d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"
                  />
                </svg>
              </a>
            </div>
            <br />
            <a href="#"><img src="img/LOGO1.PNG" class="footer-brand" alt="logo Flying Papers" /></a>
          </div>
        </div>
      </div>
    </section>
    <script>
      setInterval(function () {
        if ($(window).height() >= $(document).height()) {
          $("#ld").text($(document).width() + " px");
        } else {
          $("#ld").text($(document).width() + 17 + " px");
        }
      }, 150);
    </script>
    <script src="js/script.js"></script>
  </body>
</html>
