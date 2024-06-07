<?php $__env->startSection('title', 'Facility'); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script>
    $('.delete').click(function() {
        var room_id = $(this).attr('room-id');
        var room_name = $(this).attr('room-name');
        var room_url = $(this).attr('room-url');
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "Room number " + room_name + " will be deleted, You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel! ',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                id = "#delete-room-form-" + room_id
                console.log(id)
                $(id).submit();
            }
        })
    });

</script>
<?php $__env->stopSection(); ?> --}}

<?php echo $__env->make('template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\fil\Laravel-Hotel-main\resources\views/facility/index.blade.php ENDPATH**/ ?>