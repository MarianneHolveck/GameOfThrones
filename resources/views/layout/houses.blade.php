<?php require '../resources/views/layout/header.blade.php' ?>

<ul class="houses-list">
    <?php foreach($houses as $house) : ?>
    <li class="house-logo" style="background: #<?= $house['colour'] ?>;">
        <a href="/house/<?= $house['id'] ?>">
            <img src="../assets/img/houses/<?= $house['image'] ?>" alt="<?= $house['name'] ?>">
        </a>
    </li>
<?php endforeach; ?>
</ul>

<?php require '../resources/views/layout/footer.blade.php' ?>
