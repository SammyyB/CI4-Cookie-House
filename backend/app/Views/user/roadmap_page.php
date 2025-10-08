<!DOCTYPE html>
<html lang="en">

<?= view('components/head/head_roadmap') ?

<body class="roadmap-page">


<?= view('components/header') ?>

<?= view('components/navbar') ?>

    <main class="roadmap-main">
        <h1>System Road Map</h1>
        <?= view('components/cards/roadmapcards') ?>
    </main>

    <?= view('components/footer') ?>
</body>

</html>