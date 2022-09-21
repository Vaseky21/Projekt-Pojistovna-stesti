

<?php $__env->startSection('content'); ?>
<section class="masthead page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Pojisti si štěstí</h2>
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
                        <form action="<?php echo e(route('store')); ?>" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <?php echo e(csrf_field()); ?>

                            <!-- Name input-->
                            
                            <div class="form-floating mb-3">
                                <select name="customer" class="form-select" aria-label="Default select example">
                                    <option selected>Vyber klienta</option>
                                    <?php $__currentLoopData = App\Models\Customers:: all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>;
                                    <option value="<?php echo e($time->id); ?>"><?php echo e($time->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-floating mb-3">
                                <select name="name" class="form-select" aria-label="Default select example">
                                    <option selected>Vyber štěstí</option>
                                    <option value="V lasce">V LÁSCE</option>
                                    <option value="VE HŘE">VE HŘE</option>
                                    <option value="NA KAMARÁDY">NA KAMARÁDY</option>
                                </select>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="date" value="<?php echo e(old('date')); ?>" name="date" type="date" placeholder="Datum" data-sb-validations="required" />
                                <label for="name">Datum</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Datum</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="total" name="total" value="<?php echo e(old('total')); ?>" type="text" placeholder="cena faktury"  data-sb-validations="required" />
                                <label for="name">Častka</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Častka</div>
                            </div>
                            <!-- Submit Button-->
                            <button type="submit" class="btn btn-primary">Vlož štěstí</button>
                        </form>
                    </div>
                </div>
    </div>
</section>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Pojisteni\resources\views/createhappiness.blade.php ENDPATH**/ ?>