<!doctype html>
<html <?php 
    use Kviron\CE\CE;
    language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php CE::theTemplate('/template-parts/items/sections/modal_form'); ?>
<div id="app">
    
<?php do_action('dwr_custom_header'); ?>

<div class="app__content">
