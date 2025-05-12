<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?? 'Default Title' ?></title>
    <meta name="description" content="<?= $meta_description ?? 'Default description' ?>">
    <meta name="keywords" content="<?= $meta_keywords ?? 'default, keywords' ?>">

    <?= $this->Html->css('/assets/public/bootstrap_5_css/bootstrap.min') ?>


</head>

<body>

    <?= $this->element('frontend/header') ?>


    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>


    <?= $this->element('frontend/footer') ?>


    <?= $this->Html->script('/assets/public/bootstrap_5_js/bootstrap.bundle') ?>




</body>

</html>
