<?php 
            session_start();
            ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/styles.css" />
    <script src="js/script.js"></script>

    <title>Flying Papers | Comparez plusieurs billets de transport et voyagez léger</title>
  </head>
  <body class="page-3">
    <a href="#"></a>
    <nav class="navbar navbar-expand-md navbar-dark">
      <a href="#"><img class="navbar-brand" src="img/logo.PNG" alt="logo Flying Papers" /></a>

      <div class="collapse navbar-collapse" id="menu">
        <ul class="nav nav-pills navbar-nav">
          <li class="nav-item">
            <a class="nav-link nav-link-style" href="#langue">FR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-style" href="#reservations">Vos réservations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-style" href="#inscription">S'inscrire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bouton-peche" href="#connexion">Se connecter</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="recap-etapes col-sm-12">
      <div class="container" id="container-options">
        <a href="#" class="previous">
          <img src="img/left-chevron.svg" alt="étape précédente">
        </a>
        <h5 class="titre-r">Sélection des options</h5>
        <a href="#" class="a1-o a">
          <p class="num-e">1</p>
          <p class="text-recap-e">Sélection des options</p>
        </a>
        <div class="next"></div>
        <a href="#" class="a2-o a">
          <p class="num-e">2</p>
          <p class="text-recap-e">Porte-à-porte</p>
        </a>
        <div class="next"></div>
        <a href="#" class="a3-o a">
          <p class="num-e">3</p>
          <p class="text-recap-e">Informations personnelles</p>
        </a>
        <div class="next"></div>
        <a href="#" class="a4-o a">
          <p class="num-e">4</p>
          <p class="text-recap-e">Paiement</p>
        </a>
      </div>
    </div>

    <section class="options-billets">
      <div class="container">
        <div class="wrapper">
            <?php 
            $_SESSION['billet_id'] = $_SESSION['id'. $_GET['id_billet'] .''];
            $_SESSION['billet_gare_depart'] = $_SESSION['gare_depart'. $_GET['id_billet'] .''];
            $_SESSION['billet_gare_arrivee'] = $_SESSION['gare_arrivee'. $_GET['id_billet'] .''];
            $_SESSION['billet_gare_c'] = $_SESSION['gare_c'. $_GET['id_billet'] .''];
            $_SESSION['billet_duree'] = $_SESSION['duree'. $_GET['id_billet'] .''];
            $_SESSION['billet_duree_c'] = $_SESSION['duree_c'. $_GET['id_billet'] .''];
            $_SESSION['billet_duree_trajet1'] = $_SESSION['duree_trajet1'. $_GET['id_billet'] .''];
            $_SESSION['billet_duree_trajet2'] = $_SESSION['duree_trajet2'. $_GET['id_billet'] .''];
            $_SESSION['billet_heure_depart_g'] = $_SESSION['heure_depart_g'. $_GET['id_billet'] .''];
            $_SESSION['billet_heure_arrivee_g'] = $_SESSION['heure_arrivee_g'. $_GET['id_billet'] .''];
            $_SESSION['billet_heure_depart_c'] = $_SESSION['heure_depart_c'. $_GET['id_billet'] .''];
            $_SESSION['billet_heure_arrivee_c'] = $_SESSION['heure_arrivee_c'. $_GET['id_billet'] .''];
            $_SESSION['billet_ville_c'] = $_SESSION['ville_c'. $_GET['id_billet'] .''];
            $_SESSION['billet_compagnie1'] = $_SESSION['compagnie1'. $_GET['id_billet'] .''];
            $_SESSION['billet_compagnie2'] = $_SESSION['compagnie2'. $_GET['id_billet'] .''];
            $_SESSION['billet_co2_emis'] = $_SESSION['co2_emis'. $_GET['id_billet'] .''];
            $_SESSION['billet_pourcentage'] = $_SESSION['pourcentage'. $_GET['id_billet'] .''];
            $_SESSION['billet_prix_g'] = $_SESSION['prix_g'. $_GET['id_billet'] .''];
            $_SESSION['billet_prix_opt1_trajet1'] = $_SESSION['prix_opt1_trajet1'. $_GET['id_billet'] .''];
            $_SESSION['billet_prix_opt2_trajet1'] = $_SESSION['prix_opt2_trajet1'. $_GET['id_billet'] .''];
            $_SESSION['billet_prix_opt3_trajet1'] = $_SESSION['prix_opt3_trajet1'. $_GET['id_billet'] .''];
            $_SESSION['billet_prix_opt1_trajet2'] = $_SESSION['prix_opt1_trajet2'. $_GET['id_billet'] .''];
            $_SESSION['billet_prix_opt2_trajet2'] = $_SESSION['prix_opt2_trajet2'. $_GET['id_billet'] .''];
            $_SESSION['billet_prix_opt3_trajet2'] = $_SESSION['prix_opt3_trajet2'. $_GET['id_billet'] .''];
            $_SESSION['billet_num_transport1'] = $_SESSION['num_transport1'. $_GET['id_billet'] .''];
            $_SESSION['billet_num_transport2'] = $_SESSION['num_transport2'. $_GET['id_billet'] .''];

            echo '<div class="recap-t border-fp">';
            echo '<div class="ligne1">';
            echo '<div class="col-l">';
            echo '<h5 class="bold bleu-fp">Aller sélectionné</h5>';
            echo '<img src="img/ico_train.png" alt="icone train">';
            echo '</div>';
            echo '<div class="col-r">';
            echo '<p class="bold">Lun. 28 sept. 2020 • '. $_SESSION['billet_heure_depart_g'] .' - ' . $_SESSION['billet_heure_arrivee_g'] . ' </p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="ligne2">';
            echo '<div class="bloc1 bloc">';
            echo '<div class="s-ligne1">';
            echo '<p>' . $_SESSION['billet_gare_depart'] . '</p>';
            echo '<p class="u1">' . $_SESSION['billet_gare_c'] . '</p>';
            echo '</div>';
            echo '<div class="s-ligne2">';
            echo '<div class="circle-l"></div>';
            echo '<div class="blue-bar"></div>';
            echo '<div class="circle-r"></div>';
            echo '</div>';
            echo '<div class="s-ligne3">';
            echo '<p class="bold">' . $_SESSION['billet_heure_depart_g'] . '</p>';
            echo '<div class="compagnie">';
            echo '<p class="bold">' . $_SESSION['billet_duree_trajet1'] . '</p>';
            echo '<img src="img/sncf.svg" alt="logo sncf">'; //rendre image dynamique
            echo '<p>' . $_SESSION['billet_num_transport1'] . '</p>';
            echo '</div>';
            echo '<p class="bold">' . $_SESSION['billet_heure_arrivee_c'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="bloc2 bloc">';
            echo '<p class="peche-fp small-p p1">Changement à ' . $_SESSION['billet_ville_c'] . '</p>';
            echo '<p class="peche-fp p2">• • •</p>';
            echo '<p class="peche-fp small-p p3">' . $_SESSION['billet_duree_c'] . '</p>';
            echo '<p class="peche-fp small-p p4">Correspondance <br>à la même localisation</p>';
            echo '</div>';
            echo '<div class="bloc2-r">';
            echo '<div class="ligne3-r">';
            echo '<div class="flex-nw f1">';
            echo '<p class="bold">' . $_SESSION['billet_co2_emis'] . '</p>';
            echo '<img src="img/CO2.svg" alt="icone CO2"> ';
            echo '</div>';
            echo '<br>';
            echo '<div class="flex-nw f2">';
            echo '<p class="bold">' . $_SESSION['billet_pourcentage'] . '</p>';
            echo '<img src="img/jaugeverte.svg" alt="icone jauge pollution">'; 
            echo '</div> ';
            echo '</div> ';
            echo '</div> ';
            echo '<div class="bloc3 bloc">';
            echo '<div class="s-ligne1">';
            echo '<p>' . $_SESSION['billet_gare_c'] . '</p>';
            echo '<p class="u2">' . $_SESSION['billet_gare_arrivee'] . '</p>';
            echo '</div>';
            echo '<div class="s-ligne2">';
            echo '<div class="circle-l"></div>';
            echo '<div class="blue-bar"></div>';
            echo '<div class="circle-r"></div>';
            echo '</div>';
            echo '<div class="s-ligne3">';
            echo '<p class="bold">' . $_SESSION['billet_heure_depart_c'] . '</p>';
            echo '<div class="compagnie">';
            echo '<p class="bold">' . $_SESSION['billet_duree_trajet2'] . '</p>';
            echo '<img src="img/eurostar.svg" alt="logo eurostar">'; //rendre image dynamique
            echo '<p>' . $_SESSION['billet_num_transport2'] . '</p>';
            echo '</div>';
            echo '<p class="bold">' . $_SESSION['billet_heure_arrivee_g'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';


            echo '<div class="tarifs billet1 border-fp">';
            echo '<div class="row row1">';
            echo '<div class="titre">';
            echo '<h5 class="bold bleu-fp">Tarifs : Billet Aller 1</h5>';
            echo '</div>';
            echo '<div class="row">';
            echo '<img class="SNCF" src="img/Logo-sncf.PNG" alt="logo SNCF noir et blanc" />'; //rendre image dynamique
            echo '<p>' . $_SESSION['billet_compagnie1'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="flex-nw row1z">';
            echo '<a href="#" class="a-standard">';
            echo '<div class="bloc standard">';
            echo '<p class="bold">Standard</p>';
            echo '<p>' . $_SESSION['billet_prix_opt1_trajet1'] . '€</p>';
            echo '</div>';
            echo '</a>';
            echo '<a href="#" class="a-prise">';
            echo '<div class="bloc prise">';
            echo '<p class="bold">Avec prise</p>';
            echo '<p>' . $_SESSION['billet_prix_opt2_trajet1'] . '€</p>';
            echo '</div>';
            echo '</a>';
            echo '<a href="#" class="a-tranquille">';
            echo '<div class="bloc tranquille">';
            echo '<p class="bold">Tranquilité</p>';
            echo '<p>' . $_SESSION['billet_prix_opt3_trajet1'] . '€</p>';
            echo '</div>';
            echo '</a>';
            echo '</div>';
            echo '<div>';
            echo '<p class="services">Services inclus :</p>';
            echo '<p class="place">Place située à l’étage avec une prise électrique disponible.</p>';
            echo '</div>';
            echo '<div class="bagages">';
            echo '<h5 class="bold bleu-fp">Bagages</h5>';
            echo '<div>';
            echo '<div class="conteneur">';
            echo '<div>';
            echo '<p>Inclus dans votre billet</p>';
            echo '<div class="images-b">';
            echo '<img src="img/pic_bag_s.png" alt="dimensions sac à main 15x36x27cm" />';
            echo '<img src="img/pic_bag_c.png" alt="dimensions bagage cabine 25x55x35cm" />';
            echo '</div>';
            echo '</div>';
            echo '<div>';
            echo '<p>Rajouter un bagage supplémentaire ?</p>';
            echo '<div class="flex row2a">';
            echo '<img src="img/pic_bag_supp.PNG" alt="dimensions valise 2mx2m" />';
            echo '<div class="ajout">';
            echo '<div class="flex row2b">';
            echo '<p>-</p>';
            echo '<p>0</p>';
            echo '<p>+</p>';
            echo '</div>';
            echo '<div class="row row3b">';
            echo '<p style="margin-right: 15px">5€</p>';
            echo '<p>Par bagage</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '<p style="font-size: 0.8rem">Jusqu’à 30 kg, dans la limite de 2 par voyageur. Un contrôle a lieu avant l’accès au quai. Sur place le prix est de 20 € par bagage.</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            echo '<div class="impact-ecolo">';
            echo '<div class="conteneur">';
            echo '<h4 class="titre-ecolo bold">Impact Ecologique</h4>';
            echo '<div class="row row-ecolo">';
            echo '<div class="bloc bloc1">';
            echo '<div class="flex-nw" style="justify-content: center; align-items: center; min-height:40px;">';
            echo '<p class="bold"> ' . $_SESSION['billet_co2_emis'] . ' KG</p>';
            echo '</div>';
            echo '<p class="text">CO2 émis / pers. pour un aller</p>';
            echo '</div>';
            echo '<div class="bloc bloc2">';
            echo '<div class="flex-nw" style="justify-content: center; align-items: center; max-height:40px;">';
            echo '<img src="img/jaugenoire.svg" alt="icone jauge pollution" style="transform:scale(0.6);">';
            echo '<p class="bold">' . $_SESSION['billet_pourcentage'] . ' %</p>';
            echo '</div>';
            echo '<p class="text">Du quota annuel pour limiter le réchauffement</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '<div class="separateur"></div>';
            echo '</div>';
    

            echo '<div class="tarifs billet2 border-fp">';
            echo '<div class="row row1">';
            echo '<div class="titre">';
            echo '<h5 class="bold bleu-fp">Tarifs : Billet Aller 2</h5>';
            echo '</div>';
            echo '<div class="row">';
            echo '<img class="Eurostar" src="img/Logo-eurostar.PNG" alt="logo Eurostar" />';
            echo '<p>' . $_SESSION['billet_compagnie2'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="flex-nw row1z">';
            echo '<a href="#" class="a-standard">';
            echo '<div class="bloc standard">';
            echo '<p class="bold">Standard</p>';
            echo '<p>' . $_SESSION['billet_prix_opt1_trajet2'] . '€</p>';
            echo '</div>';
            echo '</a>';
            echo '<a href="#" class="a-premiere">';
            echo '<div class="bloc premiere">';
            echo '<p class="bold">Standard Première</p>';
            echo '<p>' . $_SESSION['billet_prix_opt2_trajet2'] . '€</p>';
            echo '</div>';
            echo '</a>';
            echo '<a href="#" class="a-business">';
            echo '<div class="bloc business">';
            echo '<p class="bold">Business Première</p>';
            echo '<p>' . $_SESSION['billet_prix_opt3_trajet2'] . '€</p>';
            echo '</div>';
            echo '</a>';
            echo '</div>';
            echo '<div>';
            echo '<p class="services">Services inclus :</p>';
            echo '<p class="place">Place située à l’étage avec une prise électrique disponible.</p>';
            echo '</div>';
            echo '<div class="bagages">';
            echo '<h5 class="bold bleu-fp">Bagages</h5>';
            echo '<div>';
            echo '<div class="conteneur">';
            echo '<div>';
            echo '<p>Inclus dans votre billet</p>';
            echo '<div class="images-b">';
            echo '<img src="img/pic_bag_s.png" alt="dimensions sac à main 15x36x27cm" />';
            echo '<img src="img/pic_bag_c.png" alt="dimensions bagage cabine 25x55x35cm" />';
            echo '</div>';
            echo '</div>';
            echo '<div>';
            echo '<p>Rajouter un bagage supplémentaire ?</p>';
            echo '<div class="flex row2a">';
            echo '<img src="img/pic_bag_supp.PNG" alt="dimensions valise 2mx2m" />';
            echo '<div class="ajout">';
            echo '<div class="flex row2b">';
            echo '<p>-</p>';
            echo '<p>0</p>';
            echo '<p>+</p>';
            echo '</div>';
            echo '<div class="row row3b">';
            echo '<p style="margin-right: 15px">5€</p>';
            echo '<p>Par bagage</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '<p style="font-size: 0.8rem">Jusqu’à 30 kg, dans la limite de 2 par voyageur. Un contrôle a lieu avant l’accès au quai. Sur place le prix est de 20 € par bagage.</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            ?>


            <div class="modalités modalités-r">
            <h5 class="bold bleu-fp">Modalités</h5>
            <p class="bold">Billet 1</p>
            <p>Billet échangeable sous conditions, non remboursable.</p>
            <p class="bold billet2-m">Billet 2</p>
            <p>
              Ce billet est uniquement valable pour le train sélectionné. Ce billet est échangeable avant le départ. Des frais fixes de 50 € par personne et par trajet vous seront demandés, ainsi que
              le montant de la différence si le nouveau billet est plus cher que l’original. Ce billet n’est pas remboursable.
            </p>
          </div>
          <div class="recap-b">
            <h5 class="bold bleu-fp">Récapitulatif</h5>
            <div class="row row1">
              <p class="small-p">Billet 1 (1 adulte)</p>
              <p class="small-p">22,00€</p>
            </div>
            <div class="row row2">
              <p class="text-tranquille small-p">Classe Tranquilité</p>
              <p>+8,00€</p>
            </div>
            <div class="row row3">
              <p class="small-p">Billet 2 (1 adulte)</p>
              <p class="small-p">70,00€</p>
            </div>
            <div class="row row4">
              <p class="small-p"><span class="bold">Total </span>(TTC)</p>
              <p class="small-p bold">100,00€</p>
            </div>
          </div>
          <div class="row3">
            <div class="modalités">
              <h5 class="bold bleu-fp">Modalités</h5>
              <p class="bold">Billet 1</p>
              <p>Billet échangeable sous conditions, non remboursable.</p>
              <p class="bold billet2-m">Billet 2</p>
              <p>
                Ce billet est uniquement valable pour le train sélectionné. Ce billet est échangeable avant le départ. Des frais fixes de 50 € par personne et par trajet vous seront demandés, ainsi que
                le montant de la différence si le nouveau billet est plus cher que l’original. Ce billet n’est pas remboursable.
              </p>
            </div>
            <a class="valider bouton-peche" href="/flyingpapers/porteaporte.php">Valider mes choix</a>
          </div>
        </div>
      </div>
    </section>

    <section class="footer">
      <div class="container">
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
              <a>
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
  </body>
</html>
