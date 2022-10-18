<?php $__env->startSection('content'); ?>
<div class="pull-right">
    <a class="btn btn-primary" href="<?php echo e(route('admin.email.add')); ?>">Add Email</a>
</div>
<table class="table table-bordered email-tbl mt-10">
    <thead>
        <tr>
            <th>Recipient</th>
            <th>Subject</th>
            <th>Content</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($email['recipient']); ?></td>
            <td><?php echo e($email['subject']); ?></td>
            <td><?php echo e($email['content']); ?></td>
            <td>
                <button onclick="removedata(<?php echo e($email['id']); ?>)" class="deleteRecord btn btn-danger" data-id="<?php echo e($email['id']); ?>">Delete</button>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
        $('.email-tbl').DataTable({
            'ordering': false,
        });

        function removedata(id) {
            $('body').on("click", ".deleteRecord", function() {
                var Id = id;
                confirm("Are You sure want to delete ?!");
                $.ajax({
                    type: "POST",
                    url: "<?php echo e(route('admin.email.delete')); ?>",
                    data: {
                        id: Id,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    success: function(response) {
                        if (response.success == true) {
                            window.location = "/admin/emails";
                            alert("Your Data Successfully Deleted");
                        }
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });
            });
        }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/EmailMaster/resources/views/email/index.blade.php ENDPATH**/ ?>