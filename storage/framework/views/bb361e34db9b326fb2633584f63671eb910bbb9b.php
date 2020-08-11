<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel BBS</title>

    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    >
</head>
<body>
    <header class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(url('')); ?>">
                Laravel BBS
            </a>
        </div>
    </header>

    <div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html><?php /**PATH /Applications/MAMP/htdocs/laravel-bbs/resources/views/layout.blade.php ENDPATH**/ ?>