<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('content'); ?>
    <style>
        #btn_submit {
            width: 100%;
            transition: all 0.5s ease-in-out;
        }

        #btn_submit.isLoading {
            width: 50px;
            border-radius: 100vw;
        }

        .hide {
            display: none;
        }
    </style>
    <link href="<?php echo e(asset('style/css/stylelogin.css')); ?>" rel="stylesheet">

    <div class="container" style="background-image: url(<?php echo e(asset('img/bg')); ?>/bg.jpg); background-size: 100%;">
        <div class="row vertical-center">
            <div class="col-lg-5 col-md-8 col-sm-12  mx-auto" style="z-index: 1">
                <div class="glassmorphism card-signin my-5">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-center">
                                    <img src="<?php echo e(asset('img/logo/sip.png')); ?>" width="100" height="100"
                                        class="rounded-circle mx-auto" alt="logo" style="background-color: white;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="card-title text-center">Field Booking System</h5>
                            </div>
                        </div>
                        <form onsubmit="return disableButton()" class="form-signin" action="/postLogin" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-label-group">
                                        <input type="email" id="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            placeholder="Email" value="<?php echo e(old('email')); ?>" required autofocus>
                                        <label for="email">Email</label>
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="password" id="password" name="password" autocomplete="new-password"
                                            class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Password" value="<?php echo e(old('password')); ?>"
                                            required>
                                        <label for="password">Password</label>
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="w-100 d-flex justify-content-center">
                                        <button id="btn_submit" class="btn btn-lg btn-primary text-white fw-bold p-2"
                                            type="submit" style="border-radius: 2rem;">
                                            <div id="loading_submit" class="spinner-border hide" role="status"
                                                style="width: 15px; height: 15px">
                                            </div>
                                            <div id="text_submit">
                                                Login
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <p class="text-center">Forgot Password? <a href="/forgot-password">pick me baby 🤤</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function disableButton() {
            $("#loading_submit").removeClass("hide");
            $("#text_submit").addClass("hide");
            $("#btn_submit").addClass("isLoading").attr('disabled', 'disabled');
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\fil\Laravel-Hotel-main\resources\views/auth/login.blade.php ENDPATH**/ ?>