<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- My CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <?= $this->include('layout/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <?= $this->include('layout/footer'); ?>

    <script src="/assets/js/script.js"></script>
</body>

</html>