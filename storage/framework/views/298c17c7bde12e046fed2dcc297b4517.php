
<?php $__env->startSection('content'); ?>
<div class="page-header d-print-none">
  <div class="container-xl">
    <h2 class="page-title">Kategori Surat</h2>
  </div>
</div>

<div class="page-body">
  <div class="container-xl">
    <?php if(session('success')): ?>
      <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <a href="<?php echo e(route('kategori.create')); ?>" class="btn btn-primary mb-3">Tambah Kategori</a>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama Kategori</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($item->id); ?></td>
          <td><?php echo e($item->nama); ?></td>
          <td>
            <a href="<?php echo e(route('kategori.edit', $item->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
            <form action="<?php echo e(route('kategori.destroy', $item->id)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus kategori ini?')">
              <?php echo csrf_field(); ?>
              <?php echo method_field('DELETE'); ?>
              <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            </form>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.tabler', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Muhammad Farid M\Downloads\lsp_ArsipSurat\resources\views/kategori/index.blade.php ENDPATH**/ ?>