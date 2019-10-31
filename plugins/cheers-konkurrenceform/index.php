<?php
/*
* Plugin Name: Cheers Konkurrence Plugin
* Plugin URI: https://www.annahrby.dk/cheers/
* Description: This is a WordPress Competition Plugin based on HTML5, CSS, JS and PHP
* Version: 1.0.0
* Author: Anna Hørby
* Author: https://www.annahrby.dk/cheers/
* License: GPL2
*/

function competition_form()
{

    $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="win">';
    $content .= '<p>VIND CHEERS!</p></div>';
    $content .= '<div class="login-face">';
    $content .= '<img src=" '.plugins_url("cheers-konkurrenceform/img/logo.png").' " ';
    $content .= 'alt="login-face"></div>';
    $content .= '<div class="salestext">';
    $content .= '<p>Vil du have styr på underholdningen til din næste fest?</p></div>';
    $content .= '<section class="form">';
    $content .= '<form action="#" id="myForm">' ;
    $content .= '<div class="input">';
    $content .= '<input type="text" name="username" id="username" placeholder="   fx. Martin Jensen" required><i class="fa fa-user fa-2x"></i>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="email" name="email" id="email" placeholder="   martin@hotmail.com" required><i class="fa fa-envelope fa-2x"></i>';
    $content .= '</div>';
    $content .= '<div>';
    $content .= '<input type="submit" value="Deltag i konkurrencen!" name="submitBtn" id="submitBtn">';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
    $content .= '</div>';
    
    return $content;
    
}
    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('show_popup','competition_form');

    # Come back later
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');

    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesom', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        
        wp_enqueue_style('FontStaatliches','https://fonts.googleapis.com/css?family=Staatliches&display=swap');
        
        wp_enqueue_style('FontRoboto','https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap');
        
        wp_enqueue_style('FontQuicksand','https://fonts.googleapis.com/css?family=Quicksand&display=swap');
        
        wp_enqueue_style('Stylesheet', plugins_url('cheers-konkurrenceform/css/style.css'));
        
    }
    
?>