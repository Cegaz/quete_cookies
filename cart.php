<?php
session_start();
if(!isset($_SESSION['loginname'])) {
    header('Location: login.php');
} else {

require 'inc/head.php';
?>

<section class="cookies container-fluid">
    <div class="row">
                <?php if(isset($_COOKIE['cart'])) {
                    $articles = explode(" ", $_COOKIE['cart']);
                    foreach($articles as $article) { ?>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <figure class="thumbnail text-center">
                                <img src = "assets/img/product-<?php echo $article; ?>.jpeg" alt = "cookies" class="img-responsive" height="100px">
                            </figure>
                        </div>
                <?php
                        }
                } else {
                    echo '<h1 class="text-center">Votre panier est vide.</h1>';
                }
                ?>

    </div>
</section>

<?php
}
require 'inc/foot.php';
?>
