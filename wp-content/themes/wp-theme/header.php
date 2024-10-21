<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); // Hook for WordPress and plugins to include styles and scripts ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <!-- Include navigation or other header elements here -->
        <?php get_template_part('components/nav'); ?>
    </header>

