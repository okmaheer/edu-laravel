<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="<?php echo e(route('frontend.index')); ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><img class="img-fluid mt-3 ms-5" width="135px"
                src="<?php echo e(asset('frontend/logo/logo.png')); ?>" alt=""></h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="<?php echo e(route('frontend.index')); ?>" class="nav-item nav-link active">Home</a>
            <a href="<?php echo e(route('frontend.index')); ?>#prepration-courses" class="nav-item nav-link"> IELTS Prepration Courses</a>
            <a href="<?php echo e(route('frontend.index')); ?>#prepration-material" class="nav-item nav-link"> IELTS Practice Material</a>
            <a href="<?php echo e(route('frontend.index')); ?>#prepration-online" class="nav-item nav-link"> Practice IELTS Online</a>
            <a href="<?php echo e(route('frontend.index')); ?>#prepration-testimonial" class="nav-item nav-link">Testimonial</a>
            <a href="<?php echo e(route('frontend.faqs')); ?>" class="nav-item nav-link">Faqs</a>
        </div>
      
    </div>
</nav>
<?php /**PATH D:\System\laragon\www\edu-laravel\resources\views/layouts/partials/frontend-navbar.blade.php ENDPATH**/ ?>