<?php

/** @var Array $data */

/** @var \App\Core\LinkGenerator $link */
?>
<div class="container-fluid">
    <div>
        <img src="public/images/what_2.png" class="home">
    </div>
</div>
<div class="container-fluid">
    <ul class="menu">
        <li class="welcome-menu"><a class="nav-link" href="<?= $link->url("home.shop") ?>">merch</a></li>
        <li class="welcome-menu"><a class="nav-link" href="<?= $link->url("home.tour") ?>">tour</a></li>
        <li class="welcome-menu"><a class="nav-link" href=#>music</a></li>
        <ul class="welcome-sub-menu">
            <li class="sub-menu"><a class="nav-link" href=#>listen</a></li>
            <li class="sub-menu"><a class="nav-link" href=#>watch</a></li>
        </ul>
        <li class="sub-menu-extra"><a class="nav-link" href=#>SONGBOOK</a></li>
        <li class="sub-menu-extra"><a> </a></li>
    </ul>
</div>
<!--
<div class="container-fluid">
    <div class="row">
        <div class="col mt-5">
            <div class="text-center">
                <h2>Vaííčko MVC FW</h2>
                <img src="public/images/vaiicko_logo.png">
                <p>
                    Gratulujeme vám, úspešne sa vám podarilo nainštalovať a spustiť framework
                    <strong>Vaííčko</strong> <?= \App\Config\Configuration::FW_VERSION ?>!<br>
                    Dúfame, že sa Vám pomocou tohto frameworku vytvoríte nejakú skvelú aplikáciu.<br>
                </p>
                <p>
                    Tento jednoduchý framework bol vytvorený pre lepšie pochopenie architektúry MVC.<br>
                    Je určený pre študentov predmetu <em>vývoj aplikácií pre internet a intranet</em>, ale nielen im.
                </p>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col text-center">
            <h4>Autori</h4>
            <div>
                <a href="mailto:Patrik.Hrkut@fri.uniza.sk">doc. Ing. Patrik Hrkút, PhD.</a><br>
                <a href="mailto:Michal.Duracik@fri.uniza.sk">Ing. Michal Ďuračík, PhD.</a><br>
                <a href="mailto:Matej.Mesko@fri.uniza.sk">Ing. Matej Meško, PhD.</a><br><br>
                &copy; 2020-<?= date('Y') ?> Žilinská univerzita v Žiline, Fakulta riadenia a informatiky, Katedra
                softvérových technológií
            </div>
        </div>
    </div>
</div>
-->