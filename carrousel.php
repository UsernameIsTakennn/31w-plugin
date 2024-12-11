<?php
/*
    plugin name: Carrousel
    description: Carrousel permettant d'afficher le contenu d'une galerie
    author: Splenderly Jean Louis
    author url:https://referenced.ca
    */

/*
            - génère le code HTML d'une partie de la boite modale
            - créer un bouton qui permettra d'ouvrir la boite modale
            - créer une feuille de style pour la boite modale
            - Script permettant d'ouvrir et fermer la boite modale
    */
function genere_carrousel()
{
    $chaine = '<button id="carrousel__bouton" class="carrousel__bouton">Ouvrir</button>
                <div class="carrousel">
                    <button class="carrousel__X">X</button>
                    <figure class="carrousel__figure"></figure>
                    <form class="carrousel__form"></form>
                </div>';

    return $chaine;
}

add_shortcode("carrousel", "genere_carrousel");
?>