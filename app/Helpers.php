<?php

function getPrice($prixEnDecm)
{

    $prix = floatval($prixEnDecm);

    return number_format($prix, 2, ',', ' ') . ' €';
}