<?php echo $__env->make('Admin_Panel.Template.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="layoutSidenav_content">
<main>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    
</main>
<?php echo $__env->make('Admin_Panel.Template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\NikhilGarala\Desktop\Self_Learning\Laravel\DJ_Sir_Project\CarProject\resources\views/Admin_Panel/Template/index.blade.php ENDPATH**/ ?>