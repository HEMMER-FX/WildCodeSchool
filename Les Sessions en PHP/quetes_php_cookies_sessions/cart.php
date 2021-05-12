<?php require 'inc/head.php'; ?>


<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($_SESSION['cart'] as $carts) {
            echo 'Vous avez commandé ' . $carts .  '<br> ';
        } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>