<?php

/** @var Array $data */

/** @var \App\Core\LinkGenerator $link */
?>
<div class="card text-center placement">
    <div class="card-body">
        <h5 class="card-title menu-font">New merch coming soon :)</h5>
        <p class="card-text menu-font">You can check out our tour dates in the meantime...</p>
        <a href="<?= $link->url("home.tour") ?>" class="btn btn-outline-secondary menu-font">TOUR DATES</a>
    </div>
</div>
