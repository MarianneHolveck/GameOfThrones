<?php require '../resources/views/layout/header.blade.php' ?>

<section class="character-page">
    <div class="col-8">
        <h2><?= $character['first_name'] ?> <?= $character['last_name'] ?></h2>
        <div class="bio">
            <h3>Biographie</h3>
            <p>
               <?= $character['biography'] ?>
            </p>
        </div>
    </div>
    <div class="col-4">
        <div class="avatar" style="background: #<?= $houses[0]['colour'] ?>;">
            <img src="../assets/img/<?= $character['image'] ?>" alt="<?php $character['first_name'] ?>">
        </div>
        <div class="infos">
            <h3>Maisons</h3>
            <div class="houses">
                <ul>
                    <li class="house-logo" style="background: #<?= $houses[0]['colour'] ?>;">
                        <a href="/house/<?= $houses[0]['id'] ?>">
                            <img src="../assets/img/houses/<?= $houses[0]['image'] ?>" alt="Stark">
                        </a>
                    </li>
                    <?php if(!empty($houses[1])) : ?>
                    <li class="house-logo" style="background: #<?= $houses[1]['colour'] ?>;">
                        <a href="/house/<?= $houses[1]['id'] ?>">
                            <img src="../assets/img/houses/<?= $houses[1]['image'] ?>" alt="Tully">
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
            <ul class="meta">
                <li><span>Rang : </span> <?= $character['title']['name'] ?></li>
                <li><span>Mère : </span>
                <?php if(!empty($character['characterMother'])) : ?>
                <?= $character['characterMother']['first_name'] ?> <?= $character['characterMother']['last_name'] ?>
                <?php endif; ?>
                </li>
                <li><span>Père : </span>
                <?php if(!empty($character['characterFather'])) : ?>
                <?= $character['characterFather']['first_name'] ?> <?= $character['characterFather']['last_name'] ?>
                <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</section>

<?php require '../resources/views/layout/footer.blade.php' ?>
