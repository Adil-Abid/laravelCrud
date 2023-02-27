<?php $__env->startSection('content'); ?>

<h1>User Login</h1>
<form action="user" method="POST">
    <?php echo csrf_field(); ?>
<input type="text" placeholder="Enter Name" name="user" >
<input type="password" placeholder="Enter Password" name="pswd" >
<button type="submit">Submit</button>

</form> <br><br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelCrud\crud9\resources\views/login.blade.php ENDPATH**/ ?>