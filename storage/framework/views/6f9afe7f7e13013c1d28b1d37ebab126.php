<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php if(session('status')): ?>
                    <div class="alert alert-success"><?php echo e(session('status')); ?></div>
                <?php endif; ?>

                <div class="card">
                    <div class="card-header">
                        <h4>Add Users
                            <a href="<?php echo e(url('details')); ?>" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(url('details/create')); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                            <div class="mb-3">
                                <label for="">ID Order: </label>
                                <input type="text" name="detail_id_order" placeholder="ID Order" value="<?php echo e(old('detail_id_order')); ?>"/>
                                <?php $__errorArgs = ['detail_id_order'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3">
                                <label for="">ID Produk: </label>
                                <input type="text" name="detail_id_produk" placeholder="ID Produk" value="<?php echo e(old('detail_id_produk')); ?>"/>
                                <?php $__errorArgs = ['detail_id_produk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3">
                                <label for="">Harga: </label>
                                <input type="text" name="detail_harga" placeholder="Harga" value="<?php echo e(old('detail_harga')); ?>"/>
                                <?php $__errorArgs = ['detail_harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3">
                                <label for="">Jumlah: </label>
                                <input type="text" name="detail_jml" placeholder="Jumlah" value="<?php echo e(old('detail_jml')); ?>"/>
                                <?php $__errorArgs = ['detail_jml'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3">
                                <button type="Submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DATA CODE\PHP\01-laravel\01laravel\resources\views/detail/create.blade.php ENDPATH**/ ?>