<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Users
                            <a href="<?php echo e(url('users/create')); ?>" class="btn btn-primary float-end">Add Users</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Alamat</th>
                                    <th>Telp</th>
                                    <th>POS</th>
                                    <th>User_Role</th>
                                    <th>User_Aktif</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $collect; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->user_id); ?></td>
                                        <td><?php echo e($item->user_email); ?></td>
                                        <td><?php echo e($item->user_nama); ?></td>
                                        <td><?php echo e($item->user_alamat); ?></td>
                                        <td><?php echo e($item->user_hp); ?></td>
                                        <td><?php echo e($item->user_pos); ?></td>
                                        <td>
                                            <?php if($item->user_role): ?>
                                                Role
                                            <?php else: ?>
                                                Not-role
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($item->user_aktif): ?>
                                                Active
                                            <?php else: ?>
                                                In-Active
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(url('users/'.$item->user_id.'/edit')); ?>" class="btn btn-success mx-2">Edit</a>
                                            <a href="<?php echo e(url('users/'.$item->user_id.'/delete')); ?>" class="btn btn-danger mx-1" onclick="return confirm('confirm delete this data ?')">Delete</a>
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




<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DATA CODE\PHP\01-laravel\01laravel\resources\views/user/index.blade.php ENDPATH**/ ?>