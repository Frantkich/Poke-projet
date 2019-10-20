<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <?php if($_SERVER["SCRIPT_NAME"] === "/ProjetJavaScriptPokemon/pokedex.php"): ?>
    <link rel="stylesheet" href="assets/css/pokedex.css">
    <script src="assets/js/pokedex.js" async></script>
    <title>Pokédex</title>
    <?php elseif($_SERVER["SCRIPT_NAME"] === "/ProjetJavaScriptPokemon/pokemon_desc.php"): ?>
    <script src="assets/js/pokemon_desc.js" async></script>
    <script src="assets/js/title.js" async></script>
    <div id="title">
    <title>{{ infoPokemon.name }}</title>
    </div>
    <?php endif ?>
</head>

<body>

<?php require_once("includes/nav.php") ?>

<main>
