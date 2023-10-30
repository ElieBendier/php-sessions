<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?id=<?= $id; ?>&name=<?= $cookie['name']; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
    <?php
    $found = false;

    if (isset($_GET['id'])) {
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $key => $data) {
                if (array_search($_GET['id'], $data)) {
                    $_SESSION['cart'][$key]['quantity'] += 1;
                    $found = true;
                    break;
                }
            }
        }

        if (!$found) {
            $_SESSION['cart'][] = [
                'id' => $_GET['id'],
                'name' => $_GET['name'],
                'quantity' => 1,
            ];
        }
    }
    ?>
</section>

<?php require 'inc/foot.php'; ?>
