<ul class="characters-list">

    <?php foreach ($characters as $character) :
        // dump($character)
    ?>
        <li class="character-card">
            <a href="/character/<?= $character['id'] ?>">

                <div class="avatar" style="background: #<?= $house['colour'] ?>;">
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
