

<?php $__env->startSection('content'); ?>
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="card mb-6 mb-xl-9">
                <div class="card-body pt-9 pb-9">
                    <h1 class="text-dark fw-bolder mt-1 mb-10 fs-3">Get Access</h1>

                    <form action="<?php echo e(route('registeration-request.store')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="type" value="<?php echo e(request()->query('type')); ?>">
                        <input type="hidden" name="plan" value="<?php echo e(request()->query('plan')); ?>">

                        <div class="row g-9 mb-8">

                            <div class="col-md-6">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Name</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid required"
                                    placeholder="Enter name" name="name" />
                            </div>


                            <div class="col-md-6">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Country</span>
                                </label>
                                <!--end::Label-->
                                <select class="form-control form-control-solid required" name="country">
                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($country); ?>"><?php echo e($country); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>

                        </div>





                        <div class="row g-9 mb-8">



                            <div class="col-md-6">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Email</span>
                                </label>
                                <!--end::Label-->
                                <input type="email" class="form-control form-control-solid required"
                                    placeholder="Enter Email" name="email" />
                            </div>

                            <div class="col-md-6">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Phone no</span>
                                </label>
                                <!--end::Label-->
                                <input type="phone" class="form-control form-control-solid required"
                                    placeholder="Enter Number" name="phone" />
                            </div>

                        </div>



                        <!--begin::Actions-->
                        <div class="text-start mt-5">
                            <button type="reset" class="btn btn-light me-3">Cancel</button>
                            <button type="submit" style="margin-top:0px;" id="kt_modal_new_target_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                
                                
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                </div>
            </div>
            <div class="card mb-6 mt-5">
                <div class="card-body pt-9 pb-9">
                    <h1 class="text-dark fw-bolder mt-1 mb-10 fs-3">Payment Methods</h1>

                    <div class="row photos">
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="<?php echo e(asset('frontend/img-payment/p1.jpg')); ?>"
                                data-lightbox="photos"><img class="img-fluid"
                                    src="<?php echo e(asset('frontend/img-payment/p1.jpg')); ?>"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="<?php echo e(asset('frontend/img-payment/p2.jpg')); ?>"
                                data-lightbox="photos"><img class="img-fluid"
                                    src="<?php echo e(asset('frontend/img-payment/p2.jpg')); ?>"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="<?php echo e(asset('frontend/img-payment/p3.jpg')); ?>"
                                data-lightbox="photos"><img class="img-fluid"
                                    src="<?php echo e(asset('frontend/img-payment/p3.jpg')); ?>"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="<?php echo e(asset('frontend/img-payment/p4.jpg')); ?>"
                                data-lightbox="photos"><img class="img-fluid"
                                    src="<?php echo e(asset('frontend/img-payment/p4.jpg')); ?>"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="<?php echo e(asset('frontend/img-payment/p5.jpg')); ?>"
                                data-lightbox="photos"><img class="img-fluid"
                                    src="<?php echo e(asset('frontend/img-payment/p5.jpg')); ?>"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="<?php echo e(asset('frontend/img-payment/p6.jpg')); ?>"
                                data-lightbox="photos"><img class="img-fluid"
                                    src="<?php echo e(asset('frontend/img-payment/p6.jpg')); ?>"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="<?php echo e(asset('frontend/img-payment/p7.jpg')); ?>"
                                data-lightbox="photos"><img class="img-fluid"
                                    src="<?php echo e(asset('frontend/img-payment/p7.jpg')); ?>"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="<?php echo e(asset('frontend/img-payment/p8.jpg')); ?>"
                                data-lightbox="photos"><img class="img-fluid"
                                    src="<?php echo e(asset('frontend/img-payment/p8.jpg')); ?>"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="<?php echo e(asset('frontend/img-payment/p9.jpg')); ?>"
                                data-lightbox="photos"><img class="img-fluid"
                                    src="<?php echo e(asset('frontend/img-payment/p9.jpg')); ?>"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="<?php echo e(asset('frontend/img-payment/p10.jpg')); ?>"
                                data-lightbox="photos"><img class="img-fluid"
                                    src="<?php echo e(asset('frontend/img-payment/p10.jpg')); ?>"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="<?php echo e(asset('frontend/img-payment/11.jpg')); ?>"
                                data-lightbox="photos"><img class="img-fluid"
                                    src="<?php echo e(asset('frontend/img-payment/11.jpg')); ?>"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a
                                href="<?php echo e(asset('frontend/img-payment/p12.jpg')); ?>" data-lightbox="photos"><img
                                    class="img-fluid" src="<?php echo e(asset('frontend/img-payment/p12.jpg')); ?>"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a
                                href="<?php echo e(asset('frontend/img-payment/p13.jpg')); ?>" data-lightbox="photos"><img
                                    class="img-fluid" src="<?php echo e(asset('frontend/img-payment/p13.jpg')); ?>"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a
                                href="<?php echo e(asset('frontend/img-payment/p14.jpg')); ?>" data-lightbox="photos"><img
                                    class="img-fluid" src="<?php echo e(asset('frontend/img-payment/p14.jpg')); ?>"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a
                                href="<?php echo e(asset('frontend/img-payment/p11.jpg')); ?>" data-lightbox="photos"><img
                                    class="img-fluid" src="<?php echo e(asset('frontend/img-payment/p11.jpg')); ?>"></a></div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item"><a
                                        href="<?php echo e(asset('frontend/img-payment/google.png')); ?>" data-lightbox="photos"><img
                                            class="img-fluid" width="170px" src="<?php echo e(asset('frontend/img-payment/google.png')); ?>"></a></div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item"><a
                                                href="<?php echo e(asset('frontend/img-payment/apple.png')); ?>" data-lightbox="photos"><img
                                                    class="img-fluid" src="<?php echo e(asset('frontend/img-payment/apple.png')); ?>" height="100" width="300"></a></div>
                
        
        

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\System\laragon\www\edu-laravel\resources\views/frontend/pages/registeration-request.blade.php ENDPATH**/ ?>