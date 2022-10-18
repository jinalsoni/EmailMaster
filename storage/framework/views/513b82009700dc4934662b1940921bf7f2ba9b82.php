<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Email</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo e(route('admin.email.index')); ?>"> Back</a>
        </div>
    </div>
</div>
<form action="<?php echo e(route('admin.email.store')); ?>" id="email_form" method="POST" autocomplete="off">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Recipient</strong>
                <input type="text" name="recipient" class="form-control" placeholder="Recipient">
                <?php if($errors->has('recipient')): ?>
                <div class="error"><?php echo e($errors->first('recipient')); ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Subject</strong>
                <input type="text" name="subject" class="form-control" placeholder="Subject">
                <?php if($errors->has('subject')): ?>
                <div class="error"><?php echo e($errors->first('subject')); ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content</strong>
                <input type="text" name="content" class="form-control" placeholder="Content">
                <?php if($errors->has('content')): ?>
                <div class="error"><?php echo e($errors->first('content')); ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/EmailMaster/resources/views/email/add.blade.php ENDPATH**/ ?>