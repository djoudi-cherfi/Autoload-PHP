<?php

// Autoload des classes
spl_autoload_register(function ($className) {
    // Préparation du nom du fichier
    $fileName = str_replace("\\", "/", $className) . ".php";
    
    // Import du fichier
    require $fileName;
});
