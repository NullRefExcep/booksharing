<?php
/**
 * @author    Dmytro Karpovych
 * @copyright 2019 NRE
 */
?>

<div class="user-index">
    <?= $this->render('_card') ?>

    <h3>My books</h3>

    <?php foreach (array_fill(0, 4, 0) as $value): ?>

        <?= $this->render('_book-card') ?>
    <?php endforeach ?>

</div>
