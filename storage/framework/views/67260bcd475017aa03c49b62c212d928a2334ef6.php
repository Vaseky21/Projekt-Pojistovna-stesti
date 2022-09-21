

<?php $__env->startSection('content'); ?>
<section class="masthead page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Vytvoř klienta</h2>
        <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form action="<?php echo e(route('store1')); ?>" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <?php echo e(csrf_field()); ?>

                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" value="<?php echo e(old('name')); ?>" type="text" placeholder="čislo faktury" data-sb-validations="required" />
                                <label for="name">Jmeno</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Jmeno</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="adress" name="adress" value="<?php echo e(old('adress')); ?>" type="text" placeholder="Enter your name..."  data-sb-validations="required" />
                                <label for="name">Adresa</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Adresa</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="zip" name="zip" value="<?php echo e(old('zip')); ?>" type="text" placeholder="cena faktury"  data-sb-validations="required" />
                                <label for="name">PSČ</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">PSČ</div>
                            </div>
                            <!-- Submit Button-->
                            <button type="submit" class="btn btn-primary">Vlož klienta</button>
                        </form>
                    </div>
                </div>
    </div>
</section>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Pojisteni\resources\views/customers/createhappiness.blade.php ENDPATH**/ ?>