<?php $__env->startSection('content'); ?>
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">All Book Issue</h2>
                </div>
                <div class="offset-md-6 col-md-3">
                    <a class="add-new" href="<?php echo e(route('book_issue.create')); ?>">Add Book Issue</a>
                </div>
            </div>
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
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr style='<?php if(date('Y-m-d') > $book->return_date->format('d-m-Y') && $book->issue_status == 'N'): ?> ) background:rgba(255,0,0,0.2) <?php endif; ?>'>
                                    <td><?php echo e($book->id); ?></td>
                                    <td><?php echo e($book->student->name); ?></td>
                                    <td><?php echo e($book->book->name); ?></td>
                                    <td><?php echo e($book->student->phone); ?></td>
                                    <td><?php echo e($book->student->email); ?></td>
                                    <td><?php echo e($book->issue_date->format('d M, Y')); ?></td>
                                    <td><?php echo e($book->return_date->format('d M, Y')); ?></td>
                                    <td>
                                        <?php if($book->issue_status == 'Y'): ?>
                                            <span class='badge badge-success'>Returned</span>
                                        <?php else: ?>
                                            <span class='badge badge-danger'>Issued</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="edit">
                                        <a href="<?php echo e(route('book_issue.edit', $book->id)); ?>" class="btn btn-success">Edit</a>
                                    </td>
                                    <td class="delete">
                                        <form action="<?php echo e(route('book_issue.destroy', $book)); ?>" method="post"
                                            class="form-hidden">
                                            <button class="btn btn-danger">Delete</button>
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="10">No Books Issued</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <?php echo e($books->links('vendor/pagination/bootstrap-4')); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ll\resources\views/book/issueBooks.blade.php ENDPATH**/ ?>