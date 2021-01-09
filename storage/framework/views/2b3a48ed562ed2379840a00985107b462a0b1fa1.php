<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php echo e(config('app.name')); ?> | <?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->make('layouts.parts.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <?php echo $__env->make('layouts.parts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php echo $__env->make('layouts.parts.main_side', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Content Wrapper. Contains page content -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- /.content-wrapper -->

    <?php echo $__env->make('layouts.parts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<?php echo $__env->make('layouts.parts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('js'); ?>
</body>
</html>
<?php /**PATH /Users/ahmedhossam/dev/Project1-Master/resources/views/layouts/app.blade.php ENDPATH**/ ?>