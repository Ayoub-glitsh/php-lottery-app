<?php

function traiter_lottery(): array {
    $choix = [];
    $tirage = [];
    $message = "";

    if (isset($_POST['nombres']) && count($_POST['nombres']) === 7) {
        $choix = array_map('intval', $_POST['nombres']);
        sort($choix);

        $tirage = range(1, 49);
        shuffle($tirage);
        $tirage = array_slice($tirage, 0, 7);
        sort($tirage);

        if ($choix === $tirage) {
            $message = "<span class='text-success fw-bold'>🎉 Gagné !</span>";
        } else {
            $message = "<span class='text-danger fw-bold'>❌ Réessayer</span>";
        }
    } else {
        $message = "<span class='text-warning fw-bold'>Veuillez sélectionner exactement 7 numéros.</span>";
    }

    return [$choix, $tirage, $message];
}
