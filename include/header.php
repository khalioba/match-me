<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css?<?= rand() ?>">
    <title>Match Me</title>
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
            <div class="menu_gauche_elements">
                <div class="menu_elements Accueil">
                    <a href="index.php"><img src="Images/house.svg" alt="">
                        <p>Accueil</p>
                    </a>
                </div>
                <div class="menu_elements Messages">
                    <a href="chats.php"><img src="Images/chat.svg" alt="">
                        <p>Messages</p>
                    </a>
                </div>
                <div class="menu_elements Notifications">
                    <a href="notifications.php"><img src="Images/notification.svg" alt="">
                        <p>Notifications</p>
                    </a>
                </div>
                <div class="menu_elements Decouvrir">
                    <a href="index.php"><img src="Images/decouvrir.svg" alt="">
                        <p>Découvrir</p>
                    </a>
                </div>
                <div class="menu_elements Poster">
                    <a href="index.php"><img src="Images/poster.svg" alt="">
                        <p>Poster</p>
                    </a>
                </div>
                <div class="menu_elements Favoris">
                    <a href="index.php"><img src="Images/favoris.svg" alt="">
                        <p>Favoris</p>
                    </a>
                </div>
                <div class="menu_elements Profil">
                    <a href="index.php"><img src="Images/lune.png" alt="">
                        <p>Profil</p>
                    </a>
                </div>
                <div class="menu_elements Settings">
                    <a href="index.php"><img src="Images/settings_1.svg" alt="">
                        <p>Paramètres</p>
                    </a>
                </div>

            </div>


        </div>