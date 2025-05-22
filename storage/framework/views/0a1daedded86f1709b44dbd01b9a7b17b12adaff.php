<?php $__env->startSection('content'); ?>
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <h2 class="admin-heading text-center">Not Returned Books</h2>
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
                                <th>Return Date</th>
                                <th>Over Days</th>
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
                                        <td><?php echo e($book->return_date->format('d M, Y')); ?></td>
                                        <td><?php $date1 = date_create(date('Y-m-d'));
                                            $date2 = date_create($book->return_date->format('d-m-Y'));
                                            if($date1 > $date2){
                                              $diff = date_diff($date1,$date2);
                                              echo $days = $diff->format('%a days');
                                            }else{
                                              echo '0 days';
                                            } ?></td>
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

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ll\resources\views/report/notReturned.blade.php ENDPATH**/ ?>