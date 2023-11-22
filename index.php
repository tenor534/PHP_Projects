<?php

require_once 'ApiWizardWorld.php';

/**
 * Index.php
 */

$varApiFromUrl = new ApiWizardWorld();
$genApiFromUrlDatas = $varApiFromUrl->getApiFromUrl();

//Mouline le générateur
foreach ($genApiFromUrlDatas as $genApiFromUrlData){

    echo "--------------<br> Elixir Name :";
    echo ($genApiFromUrlData['name']);
    echo "<br>ID = ";
    echo ($genApiFromUrlData['id']);
    echo "<br>Firs Name = ";
    echo ($genApiFromUrlData['firstName']);
    echo "<br>Last Name = ";
    echo ($genApiFromUrlData['lastName']);
    echo "<br>";
}

