<?php
    /*
    plugin name: Carrousel
    description: Carrousel permettant d'afficher le contenu d'une galerie
    author: Splenderly Jean Louis
    author url:https://referenced.ca
    */
    function ecrire_message(){
        return "Bonjour tout le monde";
    }

    add_shortcode("message", "ecrire_message");
?>