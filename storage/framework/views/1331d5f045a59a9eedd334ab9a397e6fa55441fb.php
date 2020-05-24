<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>

        <?php echo $__env->yieldContent('content'); ?>;

        <footer>
            Copyright 2020 BorderLedger5
        </footer>

    </body>
</html><?php /**PATH C:\Users\Christopher\Documents\GitHub\border_ledger_5\resources\views/layouts/layout.blade.php ENDPATH**/ ?>