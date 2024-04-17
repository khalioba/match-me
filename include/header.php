<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">     
    <link rel="stylesheet" href="CSS/style.css?<?= rand() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>MatchMe</title>
</head>

<body>

<section class="rect_logo">
    <div class="logo_container">
        <a href="index.php"><img src="Images/logo.svg">
        <p>Match Me</p>
        </a>            
        
    </div>
    <div class="search">
        <form class="rect_search" action="/action_page.php">
            <input type="text" placeholder="Rechercher.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</section>

<section class="menu_body_sug">
<div class="menu_gauche">
    <div class="menu_elements Accueil">
        <a href="index.php"><img src="Images/house.svg" alt="">
        <p>Accueil</p>
        </a>
    </div>
    <div class="menu_elements Messages">
        <a href="index.php"><img src="Images/house.svg" alt="">
        <p>Messages</p>
        </a>
    </div>
    <div class="menu_elements Messages">
        <a href="index.php"><img src="Images/house.svg" alt="">
        <p>Notifications</p>
        </a>
    </div>
    <div class="menu_elements Messages">
        <a href="index.php"><img src="Images/house.svg" alt="">
        <p>Découvrir</p>
        </a>
    </div>
    <div class="menu_elements Messages">
        <a href="index.php"><img src="Images/house.svg" alt="">
        <p>Poster</p>
        </a>
    </div>
    <div class="menu_elements Messages">
        <a href="index.php"><img src="Images/house.svg" alt="">
        <p>Favoris</p>
        </a>
    </div>
    <div class="menu_elements Messages">
        <a href="index.php"><img src="Images/house.svg" alt="">
        <p>Profil</p>
        </a>
    </div>
    <div class="menu_elements Messages">
        <a href="index.php"><img src="Images/house.svg" alt="">
        <p>Paramètres</p>
        </a>
    </div>

</div>