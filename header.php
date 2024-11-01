<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>31W</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="entete">
        <section class="global entete__global">

            <div class="entete__titre">
                <h1><a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a></h1>
                <h2><?php bloginfo('description') ?></h2>
            </div>

            <div class="entete__nav">
                <form class="recherche">
                    <input type="search" class="recherche__input">
                    <img src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="25" height="25">
                </form>

                <?php wp_nav_menu(
                    array(
                        "menu" => "principal",
                        "container" => "nav"
                    )
                ); ?>
            </div>
        </section>
    </header>