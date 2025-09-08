
<?php $__env->startSection('content'); ?>
<div class="page-header d-print-none">
  <div class="container-xl">
    <h2 class="page-title"><?php echo e(isset($arsip) ? 'Edit Arsip Surat' : 'Tambah Arsip Surat'); ?></h2>
  </div>
</div>

<div class="page-body">
  <div class="container-xl">
    <div class="card">
      <div class="card-body">
        <form action="<?php echo e(isset($arsip) ? route('arsip.update', $arsip->id) : route('arsip.store')); ?>" 
              method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <?php if(isset($arsip)): ?>
            <?php echo method_field('PUT'); ?>
          <?php endif; ?>

          <div class="mb-3">
            <label class="form-label">Judul Surat</label>
            <input type="text" name="judul" class="form-control" 
                   value="<?php echo e(old('judul', $arsip->judul ?? '')); ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select name="kategori_id" class="form-select" required>
              <option value="">-- Pilih Kategori --</option>
              <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($k->id); ?>" 
                  <?php echo e((old('kategori_id', $arsip->kategori_id ?? '') == $k->id) ? 'selected' : ''); ?>>
                  <?php echo e($k->nama); ?>

                </option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Upload File (PDF)</label>
            <input type="file" name="file" class="form-control" accept="application/pdf"
                   <?php if(!isset($arsip)): ?> required <?php endif; ?>>
          </div>

          <div class="d-flex">
            <a href="<?php echo e(route('arsipadmin')); ?>" class="btn btn-secondary me-2">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.tabler', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Muhammad Farid M\Downloads\lsp_ArsipSurat\resources\views/arsip/form.blade.php ENDPATH**/ ?>