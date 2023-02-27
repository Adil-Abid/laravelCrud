<?php $__env->startSection('content'); ?>

<div class="col-md-4 m-auto border">
        <h2 class="text-center text-danger">Update</h2>
        <form action="updateData" method="get">

        <div class="mb-2">
                <label>Product Name</label>
                <input type="text" name="name" value="<?php echo e($pname); ?>" class="form-control">
            </div>
            <div class="mb-2">
                <label>Product Price</label>
                <input type="text" name="price" value="<?php echo e($pprice); ?>"  class="form-control">
            </div>
            <!-- <div class="mb-2">
                <label>Product Image</label>
                <input type="text" name="" class="form-control">
            </div> -->
            <input type="hidden" name="id" value="<?php echo e($pid); ?>" >
            <button class="btn btn-outline-danger" type="submit">Update</button>
        </form>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelCrud\crud9\resources\views/updateView.blade.php ENDPATH**/ ?>