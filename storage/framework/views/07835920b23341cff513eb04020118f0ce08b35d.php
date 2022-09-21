

<?php $__env->startSection('content'); ?>
        <section class="masthead page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Seznam klientů</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <?php if(session()->has('message')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session()->get('message')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div> 
                <?php endif; ?>
                
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Jemno klienta</th>
                          <th scope="col">Adresa</th>
                          <th scope="col">PSČ</th> 
                          <th scope="col">Akce</th>                         
                        </tr>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $seznam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($customer ->id); ?></th>
                                <td><?php echo e($customer->name); ?></td>
                                <td><?php echo e($customer->adress); ?></td>
                                <td><?php echo e($customer->zip); ?></td> 
                                <td>
                                 <form  method="POST" action="<?php echo e(route('klient.destroy',['klient'=>$customer->id])); ?>">
                                  <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit" class="btn btn-danger" >Vymazat</button>
                                    <a href="<?php echo e(route('klient.edit',['klient'=>$customer->id])); ?>" class="btn btn-primary">Edituj</a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                 </form>                               
                                </td> 
                            </tr>
                                   
                      </tbody>
                  </table>
            </div>
        </section>
 

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Pojisteni\resources\views/customers/listofhappiness.blade.php ENDPATH**/ ?>