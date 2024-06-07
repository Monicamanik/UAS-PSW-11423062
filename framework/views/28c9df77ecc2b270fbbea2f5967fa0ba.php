<tr>
    <td class="header">
        <a href="<?php echo e($url); ?>" style="display: inline-block;">
            <?php if(trim($slot) === 'Laravel'): ?>
                
                <img src="<?php echo e(asset('img/logo/sip.png')); ?>" alt="" width="70" height="70"
                    class="d-inline-block align-text-top">
            <?php else: ?>
                <?php echo e($slot); ?>

            <?php endif; ?>
        </a>
    </td>
</tr>
<?php /**PATH D:\fil\Laravel-Hotel-main\resources\views/vendor/mail/html/header.blade.php ENDPATH**/ ?>