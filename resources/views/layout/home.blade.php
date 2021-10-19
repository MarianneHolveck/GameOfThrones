<?php require '../resources/views/layout/header.blade.php' ?>

<ul class="characters-list">

    <?php foreach ($characters as $character) :
        // dump($character)
    ?>

        <li class="character-card">
            <a href="/character/<?= $character['id'] ?>">

                <div class="avatar" style="background: #<?= $house[($character['id'])-1][0]['colour'] ?>;">
                    <img src="../assets/img/<?= $character['image'] ?>" alt="<?= $character['first_name'] ?>">
                </div>
                <div class="name">
                <?php echo $character['first_name'] ?>
                <?php echo $character['last_name'] ?>
                </div>
            </a>
        </li>
    <?php endforeach; ?>
</ul>


<?php require '../resources/views/layout/footer.blade.php' ?>
