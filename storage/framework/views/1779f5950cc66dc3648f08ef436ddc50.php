
<?php $__env->startSection('content'); ?>
  <div class="page-header d-print-none" aria-label="Page header">
      <div class="container-xl">
          <div class="row g-2 align-items-center">
              <div class="col">
                  <!-- Page pre-title -->
                  <div class="page-pretitle">Overview</div>
                  <h2 class="page-title">About</h2>
              </div>
          </div>
      </div>
  </div>

  <div class="page-body">
      <div class="container-xl">
          <div class="card">
              <div class="card-body text-center">
                  <!-- Foto -->
                  <img src="<?php echo e(asset('public/img/20221109_171424.jpg')); ?>" 
                       alt="Foto Profil" 
                       class="avatar avatar-xl mb-3 rounded-circle">

                  <!-- Nama -->
                  <h3 class="mb-1">Muhammad Farid Mauludin</h3>

                  <!-- NIM -->
                  <p class="text-muted">NIM: 2231740009</p>

                  <!-- Tanggal Pembuatan -->
                  <p class="text-muted">
                      Tanggal Pembuatan Aplikasi: <?php echo e(date('d F Y')); ?>

                  </p>
              </div>
          </div>
      </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.tabler', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Muhammad Farid M\Downloads\absensigeotaggingandselifievideo\absensita\resources\views/arsip/about.blade.php ENDPATH**/ ?>