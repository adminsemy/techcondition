<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo e(route('customers.create')); ?>" class="col-md-2 btn btn-danger" role="button"><?php echo e(__('messages.Create_customer')); ?></a>
                    <a href="<?php echo e(route('customers.index')); ?>" class="col-md-2 btn btn-success" role="button"><?php echo e(__('messages.All_records')); ?></a>
                </div>
            </div>
            <form method="POST" action="<?php echo e(route('customers.search')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group row">

                    <label for="lastName" class="col-md-3 col-form-label text-md-right"><?php echo e(__('messages.Last_name')); ?></label>

                    <div class="col-md-6">
                        <input id="lastName" type="text" class="form-control <?php $__errorArgs = ['lastName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="lastName" value="<?php echo e(old('lastName')); ?>" required autocomplete="lastName" autofocus>

                        <?php $__errorArgs = ['lastName'];
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
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                <?php echo e(__('messages.Search')); ?>

                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th scope="col"><?php echo e(__('messages.Number')); ?></th>
                    <th scope="col"><?php echo e(__('messages.Code_customer')); ?></th>
                    <th scope="col"><?php echo e(__('messages.Full_Name')); ?></th>
                    <th scope="col"><?php echo e(__('messages.Org_unit')); ?></th>
                    <th scope="col"><?php echo e(__('messages.City')); ?></th>
                    <th scope="col"><?php echo e(__('messages.Phone')); ?></th>
                    <th scope="col"><?php echo e(__('messages.Res')); ?></th>
                    <th scope="col"><?php echo e(__('messages.Action')); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php ($i=1); ?>
                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($i); ?></td>
                        <td><?php echo e($customer->id); ?></td>
                        <td><?php echo e($customer->Familiya . ' ' . $customer->Imya . ' '. $customer->Otchestvo . ' '); ?></td>
                        <td><?php echo e($customer->legalForm['FormaPredpr']); ?></td>
                        <td><?php echo e($customer->Gorod); ?></td>
                        <td><?php echo e($customer->Telefon); ?></td>
                        <td><?php echo e($customer->CodRES); ?></td>
                        <td><a class="card-body" href="<?php echo e(route('customers.edit', $customer->id)); ?>"><?php echo e(__('messages.Edit')); ?></td>
                    </tr>
                    <?php ($i++); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <?php if( isset($lastName) ): ?>
            <?php echo e($customers->appends(['lastName' => $lastName])->links()); ?>

        <?php else: ?>
            <?php echo e($customers->links()); ?>

        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel/resources/views/customers/index.blade.php ENDPATH**/ ?>