
<?php $__env->startSection('content'); ?>
<div class="page-header d-print-none">
  <div class="container-xl">
    <h2 class="page-title">Detail Surat</h2>
  </div>
</div>

<div class="page-body">
  <div class="container-xl">
    <div class="card">
      <div class="card-body">
        <h3><?php echo e($arsip->judul); ?></h3>
        <p><strong>Kategori:</strong> <?php echo e($arsip->kategori->nama); ?></p>
        <p><strong>Tanggal:</strong> <?php echo e($arsip->created_at->format('d-m-Y')); ?></p>

        
        <embed src="<?php echo e(Storage::url($arsip->file)); ?>" type="application/pdf" width="100%" height="600px">

        <div class="mt-3">
          <a href="<?php echo e(route('arsipadmin')); ?>" class="btn btn-secondary">Kembali <<</a>
          <a href="<?php echo e(route('arsip.download', $arsip->id)); ?>" class="btn btn-primary">Unduh</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.tabler', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Muhammad Farid M\Downloads\lsp_ArsipSurat\resources\views/arsip/show.blade.php ENDPATH**/ ?>