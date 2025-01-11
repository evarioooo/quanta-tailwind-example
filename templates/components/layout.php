<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo $quanta->loadAsset('public/css/layout.min.css'); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="bg-red-500">
        <div class="container py-4 flex flex-wrap items-center justify-between">
            <?php $quanta->renderComponent('navbarComponent'); ?>
        </div>
    </div>

    <div class="container py-4 flex flex-wrap items-center justify-between">
        <?php $quanta->processRouting(); ?>
    </div>

    <div class="bg-red-500">
        <div class="container py-4 flex flex-wrap items-center justify-between">
            <?php $quanta->renderComponent('footerComponent'); ?>
        </div>
    </div>

    <link rel="stylesheet" href="<?php echo $quanta->loadAsset('public/js/flowbite.min.js'); ?>">
</body>

</html>