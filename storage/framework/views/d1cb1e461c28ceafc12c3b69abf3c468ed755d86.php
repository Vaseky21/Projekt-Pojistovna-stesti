

<?php $__env->startSection('content'); ?>
<section class="masthead page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Uprav si štěstí</h2>
        <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form action="<?php echo e(route('update', ['id'=>$update->id])); ?>" method="PUT" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <?php echo e(csrf_field()); ?>

                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" value="<?php echo e($edit->id); ?>" id="number" name="name" type="numbr" placeholder="čislo faktury" data-sb-validations="required" />
                                <label for="name">Číslo faktury</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" value="<?php echo e($edit->date); ?>"  id="date" name="date" type="date" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Datum</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" value="<?php echo e($edit->total); ?>" id="total" name="total" type="text" placeholder="cena faktury" data-sb-validations="required" />
                                <label for="name">Častka</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Submit Button-->
                            <button type="submit" class="btn btn-primary">Uložit fakturu</button>
                        </form>
                    </div>
                </div>
    </div>
</section>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Pojisteni\resources\views/edithappiness.blade.php ENDPATH**/ ?>