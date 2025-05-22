<?php $__env->startSection('content'); ?>

    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Return Book</h2>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <div class="yourform">
                        <table cellpadding="10px" width="90%" style="margin: 0 0 20px;">
                            <tr>
                                <td>StudentName: </td>
                                <td><b><?php echo e($book->student->name); ?></b></td>
                            </tr>
                            <tr>
                                <td>Book Name : </td>
                                <td><b><?php echo e($book->book->name); ?></b></td>
                            </tr>
                            <tr>
                                <td>Phone : </td>
                                <td><b><?php echo e($book->student->phone); ?></b></td>
                            </tr>
                            <tr>
                                <td>Email : </td>
                                <td><b><?php echo e($book->student->email); ?></b></td>
                            </tr>
                            <tr>
                                <td>Issue Date : </td>
                                <td><b><?php echo e($book->issue_date->format('d M, Y')); ?></b></td>
                            </tr>
                            <tr>
                                <td>Return Date : </td>
                                <td><b><?php echo e($book->return_date->format('d M, Y')); ?></b></td>
                            </tr>
                            <?php if($book->issue_status == 'Y'): ?>
                                <tr>
                                    <td>Status</td>
                                    <td><b>Returned</b></td>
                                </tr>
                                <tr>
                                    <td>Returned On</td>
                                    <td><b><?php echo e($book->return_day->format('d M, Y')); ?></b></td>
                                </tr>
                            <?php else: ?>
                                <?php if(date('Y-m-d') > $book->return_date->format('d-m-Y')): ?>
                                    <tr>
                                        <td>Fine</td>
                                        <td>₱ <?php echo e($fine); ?></td>
                                    </tr>
                                <?php endif; ?>
                            <?php endif; ?>
                        </table>
                        <?php if($book->issue_status == 'N'): ?>
                            <form action="<?php echo e(route('book_issue.update', $book->id)); ?>" method="post" autocomplete="off">
                                <?php echo csrf_field(); ?>
                                <input type='submit' class='btn btn-danger' name='save' value='Return Book'>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ll\resources\views/book/issueBook_edit.blade.php ENDPATH**/ ?>