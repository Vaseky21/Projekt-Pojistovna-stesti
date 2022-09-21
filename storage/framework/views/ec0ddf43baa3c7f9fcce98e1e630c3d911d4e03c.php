

<?php $__env->startSection('content'); ?>
<section class="masthead page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Editace klienta</h2>
        <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form action="<?php echo e(route('update1',['id'=>$customer ->id])); ?>" method="PUT" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <?php echo e(csrf_field()); ?>

                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" value="<?php echo e($customer->name); ?>" id="number" name="name" type="text" placeholder="čislo faktury" data-sb-validations="required" />
                                <label for="name">Jméno a Příjmení</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Jméno a Příjmení</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" value="<?php echo e($customer->adress); ?>"  id="adress" name="adress" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Adresa</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Adresa</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" value="<?php echo e($customer->zip); ?>" id="zip" name="zip" type="text" placeholder="cena faktury" data-sb-validations="required" />
                                <label for="name">PSČ</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">PSČ</div>
                            </div>
                            <!-- Submit Button-->
                            <button type="submit" class="btn btn-primary">Uložit</button>
                        </form>
                    </div>
                </div>
    </div>
</section>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Pojisteni\resources\views/customers/edit.blade.php ENDPATH**/ ?>