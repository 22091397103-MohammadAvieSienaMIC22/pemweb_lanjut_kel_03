<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Keranjang
                            <a href="<?php echo e(url('keranjangs/create')); ?>" class="btn btn-primary float-end">Add Keranjang</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ID User</th>
                                    <th>ID Produk</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $wadah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->ker_id); ?></td>
                                        <td><?php echo e($item->ker_id_user); ?></td>
                                        <td><?php echo e($item->ker_id_produk); ?></td>
                                        <td><?php echo e($item->ker_harga); ?></td>
                                        <td><?php echo e($item->ker_jml); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('keranjangs/'.$item->ker_id.'/edit')); ?>" class="btn btn-success mx-2">Edit</a>
                                            <a href="<?php echo e(url('keranjangs/'.$item->ker_id.'/delete')); ?>" class="btn btn-danger mx-1" onclick="return confirm('confirm delete this data ?')">Delete</a>
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




<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DATA CODE\PHP\01-laravel\01laravel\resources\views/keranjang/index.blade.php ENDPATH**/ ?>