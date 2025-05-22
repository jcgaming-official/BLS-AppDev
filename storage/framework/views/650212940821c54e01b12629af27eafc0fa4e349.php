<?php $__env->startSection('content'); ?>

    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">All Books</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="<?php echo e(route('book.create')); ?>">Add Book</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="message"></div>
                    <table class="content-table">
                        <thead>
                            <th>S.No</th>
                            <th>Book Name</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Publisher</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="id"><?php echo e($book->id); ?></td>
                                    <td><?php echo e($book->name); ?></td>
                                    <td><?php echo e($book->category->name); ?></td>
                                    <td><?php echo e($book->auther->name); ?></td>
                                    <td><?php echo e($book->publisher->name); ?></td>
                                    <td>
                                        <?php if($book->status == 'Y'): ?>
                                            <span class='badge badge-success'>Available</span>
                                        <?php else: ?>
                                            <span class='badge badge-danger'>Issued</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="edit">
                                        <a href="<?php echo e(route('book.edit', $book)); ?>" class="btn btn-success">Edit</a>
                                    </td>
                                    <td class="delete">
                                        <form action="<?php echo e(route('book.destroy', $book)); ?>" method="post"
                                            class="form-hidden">
                                            <button class="btn btn-danger delete-book">Delete</button>
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="8">No Books Found</td>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ll\resources\views/book/index.blade.php ENDPATH**/ ?>