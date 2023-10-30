<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
    if(isset($_SESSION['cart'][0])){
    echo nl2br("Vous avez commandé " . $_SESSION['cart'][0]['quantity'] . $_SESSION['cart'][0]['name'] . "\n");
        if(isset($_SESSION['cart'][1])){
        echo nl2br("Vous avez commandé " . $_SESSION['cart'][1]['quantity'] . $_SESSION['cart'][1]['name'] . "\n");
            if(isset($_SESSION['cart'][2])){
            echo nl2br("Vous avez commandé " . $_SESSION['cart'][2]['quantity'] . $_SESSION['cart'][2]['name'] . "\n");
                if(isset($_SESSION['cart'][3])){
                echo nl2br("Vous avez commandé " . $_SESSION['cart'][3]['quantity'] . $_SESSION['cart'][3]['name'] . "\n");
                }
            }
        }
    }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
