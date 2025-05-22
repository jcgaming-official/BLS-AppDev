<?php $__env->startSection('content'); ?>
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <h2 class="admin-heading text-center">Reports</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <a href="<?php echo e(route('reports.date_wise')); ?>" class="card-link">
                                <h5 class="card-title mb-0">Date Wise Report</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <a href="<?php echo e(route('reports.month_wise')); ?>" class="card-link">
                                <h5 class="card-title mb-0">Monthly Wise Report</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <a href="<?php echo e(route('reports.not_returned')); ?>" class="card-link">
                                <h5 class="card-title mb-0">Not Returned</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ll\resources\views/report/index.blade.php ENDPATH**/ ?>