<?php $__env->startSection('content'); ?>
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <h2 class="admin-heading text-center">Monthwise Book Issue Report</h2>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <form class="yourform mb-5" action="<?php echo e(route('reports.month_wise_generate')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <input type="month" name="month" class="form-control" value="<?php echo e(date('Y-m')); ?>">
                        </div>
                        <input type="submit" class="btn btn-danger" name="search_month" value="Search">
                    </form>
                </div>
            </div>
            <?php if($books): ?>
                <div class="row">
                    <div class="col-md-12">
                        <table class="content-table">
                            <thead>
                                <th>S.No</th>
                                <th>Student Name</th>
                                <th>Book Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Issue Date</th>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($book->id); ?></td>
                                        <td><?php echo e($book->student->name); ?></td>
                                        <td><?php echo e($book->book->name); ?></td>
                                        <td><?php echo e($book->student->phone); ?></td>
                                        <td><?php echo e($book->student->email); ?></td>
                                        <td><?php echo e($book->issue_date->format('d M, Y')); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="10">No Record Found!</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ll\resources\views/report/monthWise.blade.php ENDPATH**/ ?>