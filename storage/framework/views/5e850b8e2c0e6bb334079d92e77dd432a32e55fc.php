<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="card-body">
            <form method="POST" id="Edit" action="<?php echo e(route('customers.update', $customer->id)); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group row">
                    <label for="CodFormsPredpr" class="col-md-2 col-form-label text-md-right"><?php echo e(__('messages.Org_unit')); ?></label>

                    <div class="col-md-8">
                        <select class="custom-select form-control <?php $__errorArgs = ['CodFormsPredpr'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="CodFormsPredpr"  name="CodFormsPredpr">
                            <?php $__currentLoopData = $legalForms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $legalForm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($legalForm->id === $customer->CodFormsPredpr): ?>
                                    <option selected value="<?php echo e($legalForm->id); ?>"><?php echo e($legalForm->FormaPredpr); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($legalForm->id); ?>"><?php echo e($legalForm->FormaPredpr); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['CodFormsPredpr'];
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
                    <label for="Familiya" class="col-md-2 col-form-label text-md-right"><?php echo e(__('messages.Last_name')); ?></label>

                    <div class="col-md-8">
                        <input id="Familiya" type="text" class="form-control <?php $__errorArgs = ['Familiya'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Familiya" value="<?php echo e($customer->Familiya); ?>" required autocomplete="Familiya" autofocus>

                        <?php $__errorArgs = ['Familiya'];
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
                    <label for="Imya" class="col-md-2 col-form-label text-md-right"><?php echo e(__('messages.First_name')); ?></label>

                    <div class="col-md-8">
                        <input id="Imya" type="text" class="form-control <?php $__errorArgs = ['Imya'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Imya" value="<?php echo e($customer->Imya); ?>" required autocomplete="Imya" autofocus>

                        <?php $__errorArgs = ['Imya'];
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
                    <label for="Otchestvo" class="col-md-2 col-form-label text-md-right"><?php echo e(__('messages.Middle_name')); ?></label>

                    <div class="col-md-8">
                        <input id="Otchestvo" type="text" class="form-control <?php $__errorArgs = ['Otchestvo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Otchestvo" value="<?php echo e($customer->Otchestvo); ?>" required autocomplete="Otchestvo" autofocus>

                        <?php $__errorArgs = ['Otchestvo'];
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
                    <label for="Gorod" class="col-md-2 col-form-label text-md-right"><?php echo e(__('messages.City')); ?></label>

                    <div class="col-md-8">
                        <input id="Gorod" type="text" class="form-control <?php $__errorArgs = ['Gorod'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Gorod" value="<?php echo e($customer->Gorod); ?>" required autocomplete="Gorod" autofocus>

                        <?php $__errorArgs = ['Gorod'];
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
                    <label for="Adres" class="col-md-2 col-form-label text-md-right"><?php echo e(__('messages.Address')); ?></label>

                    <div class="col-md-8">
                        <input id="Adres" type="text" class="form-control <?php $__errorArgs = ['Adres'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Adres" value="<?php echo e($customer->Adres); ?>" required autocomplete="Adres" autofocus>

                        <?php $__errorArgs = ['Adres'];
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
                    <label for="Telefon" class="col-md-2 col-form-label text-md-right"><?php echo e(__('messages.Phone')); ?></label>

                    <div class="col-md-8">
                        <input id="Telefon" type="text" class="form-control <?php $__errorArgs = ['Telefon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Telefon" value="<?php echo e($customer->Telefon); ?>" autocomplete="Telefon" autofocus>

                        <?php $__errorArgs = ['Telefon'];
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
                <?php echo $__env->make('customers.__passport', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('customers.__organization', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="form-group row">
                    <div class="col-md-10 offset-md-10">
                        <button type="submit" class="btn btn-primary">
                            <?php echo e(__('messages.Save')); ?>

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel/resources/views/customers/edit.blade.php ENDPATH**/ ?>