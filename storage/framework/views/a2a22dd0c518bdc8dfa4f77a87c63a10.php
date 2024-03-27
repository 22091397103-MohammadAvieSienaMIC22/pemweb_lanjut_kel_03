<?php $__env->startSection('content'); ?>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Produk
                            <a href="<?php echo e(url('produks/create')); ?>" class="btn btn-primary float-end">Add Produk</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID Produk</th>
                                    <th>ID Kat</th>
                                    <th>ID User</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Harga</th>
                                    <th>Keterangan</th>
                                    <th>stock</th>
                                    <th>photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $apply; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->produk_id); ?></td>
                                        <td><?php echo e($item->produk_id_kat); ?></td>
                                        <td><?php echo e($item->produk_id_user); ?></td>
                                        <td><?php echo e($item->produk_code); ?></td>
                                        <td><?php echo e($item->produk_nama); ?></td>
                                        <td><?php echo e($item->produk_hrg); ?></td>
                                        <td><?php echo e($item->produk_keterangan); ?></td>
                                        <td><?php echo e($item->produk_stock); ?></td>
                                        <td><?php echo e($item->produk_photo); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('produks/'.$item->produk_id.'/edit')); ?>" class="btn btn-success mx-2">Edit</a>
                                            <a href="<?php echo e(url('produks/'.$item->produk_id.'/delete')); ?>" class="btn btn-danger mx-1" onclick="return confirm('confirm delete this data ?')">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DATA CODE\PHP\01-laravel\01laravel\resources\views/produk/index.blade.php ENDPATH**/ ?>