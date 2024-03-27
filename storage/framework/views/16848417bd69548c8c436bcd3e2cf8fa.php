<?php $__env->startSection('content'); ?>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Orders
                            <a href="<?php echo e(url('orders/create')); ?>" class="btn btn-primary float-end">Add Orders</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID Order</th>
                                    <th>ID User</th>
                                    <th>Tanggal Order</th>
                                    <th>Code Order</th>
                                    <th>TTL</th>
                                    <th>Kurier</th>
                                    <th>Ongkir</th>
                                    <th>Deadline bayar</th>
                                    <th>Order batal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $collectss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->order_id); ?></td>
                                        <td><?php echo e($item->order_id_user); ?></td>
                                        <td><?php echo e($item->order_tgl); ?></td>
                                        <td><?php echo e($item->order_code); ?></td>
                                        <td><?php echo e($item->order_ttl); ?></td>
                                        <td><?php echo e($item->order_kurir); ?></td>
                                        <td><?php echo e($item->order_ongkir); ?></td>
                                        <td><?php echo e($item->order_byr_deadline); ?></td>
                                        <td>
                                            <?php if($item->order_batal): ?>
                                                cancelled
                                            <?php else: ?>
                                                Process
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(url('orders/'.$item->order_id.'/edit')); ?>" class="btn btn-success mx-2">Edit</a>
                                            <a href="<?php echo e(url('orders/'.$item->order_id.'/delete')); ?>" class="btn btn-danger mx-1" onclick="return confirm('confirm delete this data ?')">Delete</a>
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




<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DATA CODE\PHP\01-laravel\01laravel\resources\views/order/index.blade.php ENDPATH**/ ?>