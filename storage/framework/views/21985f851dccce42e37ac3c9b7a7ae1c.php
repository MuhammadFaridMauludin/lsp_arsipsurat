
<?php $__env->startSection('content'); ?>
<div class="page-header d-print-none">
  <div class="container-xl">
    <h2 class="page-title">Edit Kategori</h2>
  </div>
</div>

<div class="page-body">
  <div class="container-xl">
    <form action="<?php echo e(route('kategori.update', $kategori->id)); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>
      <div class="mb-3">
        <label class="form-label">Nama Kategori</label>
        <input type="text" name="nama" class="form-control" value="<?php echo e($kategori->nama_kategori); ?>" required>
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="<?php echo e(route('kategori.index')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.tabler', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Muhammad Farid M\Downloads\absensigeotaggingandselifievideo\absensita\resources\views/kategori/edit.blade.php ENDPATH**/ ?>