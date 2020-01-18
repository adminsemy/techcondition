<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><?php echo e(__('messages.Passport')); ?></div>

            <div class="card-body">
                <div class="form-group row">
                    <label for="Seria" class="col-md-2 col-form-label text-md-right"><?php echo e(__('messages.Passport_Series')); ?></label>

                    <div class="col-md-2">
                        <input id="Seria" type="text" class="form-control <?php $__errorArgs = ['Seria'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Seria" value="<?php echo e($customer->Seria); ?>"
                               maxlength="4" autocomplete="Seria" autofocus>

                        <?php $__errorArgs = ['Seria'];
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
                    <label for="Nomer" class="col-md-2 col-form-label text-md-right"><?php echo e(__('messages.Passport_Number')); ?></label>

                    <div class="col-md-2">
                        <input id="Nomer" type="text" class="form-control <?php $__errorArgs = ['Nomer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Nomer" value="<?php echo e($customer->Nomer); ?>"
                               maxlength="6" autocomplete="Nomer" autofocus>

                        <?php $__errorArgs = ['Nomer'];
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
                    <label for="Data" class="col-md-2 col-form-label text-md-right"><?php echo e(__('messages.Passport_Data_Issued')); ?></label>

                    <div class="col-md-2">
                        <input id="Data" type="text" class="form-control <?php $__errorArgs = ['Data'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Data" value="<?php echo e($customer->Data); ?>"
                               autocomplete="Data" autofocus>

                        <?php $__errorArgs = ['Data'];
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
                <div class="form-group row">
                    <label for="KemVidan" class="col-md-2 col-form-label text-md-right"><?php echo e(__('messages.Passport_Issued')); ?></label>

                    <div class="col-md-10">
                        <input id="KemVidan" type="text" class="form-control <?php $__errorArgs = ['KemVidan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="KemVidan" value="<?php echo e($customer->KemVidan); ?>"
                               autocomplete="KemVidan" autofocus>

                        <?php $__errorArgs = ['KemVidan'];
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
        </div>
    </div>
</div>
<?php /**PATH /var/www/laravel/resources/views/customers/__passport.blade.php ENDPATH**/ ?>