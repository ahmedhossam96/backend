
<li class="nav-item">
    <a href="<?php echo e(route('admin.dashboard')); ?>"
       class="nav-link <?php echo e(Route::currentRouteName() == 'admin.dashboard'? 'active' : ''); ?>">
        <i class="nav-icon fa fa-dashboard"></i>
        <p>
            Dashboard
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="<?php echo e(route('admin.categories.index')); ?>"
       class="nav-link  <?php echo e(Route::currentRouteName() == 'admin.categories.index'? 'active' : ''); ?>">
        <i class="nav-icon fa fa-th"></i>
        <p>
            Categories
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="<?php echo e(route('admin.products.index')); ?>"
       class="nav-link  <?php echo e(Route::currentRouteName() == 'admin.products.index'? 'active' : ''); ?>">
        <i class="nav-icon fa fa-th"></i>
        <p>
            Products
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="<?php echo e(route('admin.orders.index')); ?>"
       class="nav-link  <?php echo e(Route::currentRouteName() == 'admin.orders.index'? 'active' : ''); ?>">
        <i class="nav-icon fa fa-th"></i>
        <p>
            Orders
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="<?php echo e(route('admin.clients.index')); ?>"
       class="nav-link  <?php echo e(Route::currentRouteName() == 'admin.clients.index'? 'active' : ''); ?>">
        <i class="nav-icon fa fa-th"></i>
        <p>
            Clients
        </p>
    </a>
</li>





<?php /**PATH /Users/ahmedhossam/dev/Project1-Master/resources/views/layouts/parts/menu.blade.php ENDPATH**/ ?>