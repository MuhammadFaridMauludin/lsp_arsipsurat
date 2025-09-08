
<?php $__env->startSection('content'); ?>

    <div class="page-header d-print-none" aria-label="Page header">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">Overview</div>
                <h2 class="page-title">Data Izin / Sakit</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row">
                    <div class="col-12">
                        <form action="/presensi/izinsakit" method="GET" autocomplete="off">
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                 <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-calendar-event"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 2a1 1 0 0 1 .993 .883l.007 .117v1h1a3 3 0 0 1 2.995 2.824l.005 .176v12a3 3 0 0 1 -2.824 2.995l-.176 .005h-12a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-12a3 3 0 0 1 2.824 -2.995l.176 -.005h1v-1a1 1 0 0 1 1.993 -.117l.007 .117v1h6v-1a1 1 0 0 1 1 -1m3 7h-14v9.625c0 .705 .386 1.286 .883 1.366l.117 .009h12c.513 0 .936 -.53 .993 -1.215l.007 -.16z" /><path d="M8 14h2v2h-2z" /></svg>
                                </span>
                                <input type="text" id="dari" value="<?php echo e(Request('dari')); ?>" class="form-control" name="dari" placeholder="Dari">
                    </div>
                                </div>
                                 <div class="col-6">
                                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                 <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-calendar-event"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 2a1 1 0 0 1 .993 .883l.007 .117v1h1a3 3 0 0 1 2.995 2.824l.005 .176v12a3 3 0 0 1 -2.824 2.995l-.176 .005h-12a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-12a3 3 0 0 1 2.824 -2.995l.176 -.005h1v-1a1 1 0 0 1 1.993 -.117l.007 .117v1h6v-1a1 1 0 0 1 1 -1m3 7h-14v9.625c0 .705 .386 1.286 .883 1.366l.117 .009h12c.513 0 .936 -.53 .993 -1.215l.007 -.16z" /><path d="M8 14h2v2h-2z" /></svg>
                                </span>
                                <input type="text" id="sampai" value="<?php echo e(Request('sampai')); ?>" class="form-control" name="sampai" placeholder="Sampai">
                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                               <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-barcode"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7v-1a2 2 0 0 1 2 -2h2" /><path d="M4 17v1a2 2 0 0 0 2 2h2" /><path d="M16 4h2a2 2 0 0 1 2 2v1" /><path d="M16 20h2a2 2 0 0 0 2 -2v-1" /><path d="M5 11h1v2h-1z" /><path d="M10 11l0 2" /><path d="M14 11h1v2h-1z" /><path d="M19 11l0 2" /></svg>
                                </span>
                                <input type="text" id="nik" value="<?php echo e(Request('nik')); ?>" class="form-control" name="nik" placeholder="Nik">
                    </div>

                                </div>
                                <div class="col-3">
                                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                               <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                                </span>
                                <input type="text" id="nama_lengkap" value="<?php echo e(Request('nama_lengkap')); ?>" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
                    </div>

                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <select name="status_approved" id="status_approved" class="form-select">
                                            <option value="">Pilih Status</option>
                                            <option value="0" <?php echo e(Request('status_approved') === '0' ? 'selected' : ''); ?>>Pending</option>
                                            <option value="1" <?php echo e(Request('status_approved') === 1 ? 'selected' : ''); ?>>Disetujui</option>
                                            <option value="2" <?php echo e(Request('status_approved') === 2 ? 'selected' : ''); ?>>Ditolak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-search"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
Cari Data
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                <div class="col-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nik</th>
                                <th>Tanggal</th>
                                <th>Nama Karyawan</th>
                                <th>Jabatan</th>
                                <th>Status</th>
                                <th>Keterangan</th>
                                <th>Status Approve</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $izinsakit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($d->nik); ?></td>
                                    <td><?php echo e(date('d-m-Y', strtotime($d->tgl_izin))); ?></td>
                                    <td><?php echo e($d->nama_lengkap); ?></td>
                                    <td><?php echo e($d->jabatan); ?></td>
                                    <td><?php echo e($d->status == "i" ? "izin" : "sakit"); ?></td>
                                    <td><?php echo e($d->keterangan); ?></td>
                                    <td>
                                        <?php if($d->status_approved==1): ?>
                                        <span class="badge bg-success text-white">Disetujui</span>
                                        <?php elseif($d->status_approved==2): ?>
                                        <span class="badge bg-danger text-white">Ditolak</span>
                                        <?php else: ?>
                                        <span class="badge bg-warning text-white">Pending</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($d->status_approved==0): ?>
                                        <a href="#" class="btn btn-sm btn-primary text-white btn-approve" id_izinsakit="<?php echo e($d->id); ?>">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-external-link"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" /><path d="M11 13l9 -9" /><path d="M15 4h5v5" /></svg>
                                        </a>
                                        <?php else: ?>
                                        <a href="/presensi/<?php echo e($d->id); ?>/batalkanizinsakit" class="btn btn-sm bg-danger text-white">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-square-rounded-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10l4 4m0 -4l-4 4" /><path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" /></svg>
                                        batalkan
                                        </a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php echo e($izinsakit->links('vendor.pagination.bootstrap-5')); ?>

                </div>
                </div>
            </div>
        </div>
          <div class="modal modal-blur fade" id="modal-izinsakit" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            
            <h5 class="modal-title">Izin / Sakit</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/presensi/approveizinsakit" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" id="id_izinsakit_form" name="id_izinsakit_form">
                <div class="row">
                <div class="class col-12">
                    <dov class="form-group">
                        <select name="status_approved" id="status_approved_modal" class="form-select">
                            <option value="1">Disetujui</option>
                            <option value="2">Ditolak</option>
                        </select>
                    </dov>
                    </div>
                    
                </div>
                <div class="row mt-1" id="input-alasan" style="display: none;">
  <div class="col-12">
    <div class="form-group">
      <label for="alasan_admin"></label>
      <textarea name="alasan_admin" id="alasan_admin" class="form-control" rows="3" placeholder="Tulis alasan penolakan..."></textarea>
    </div>
  </div>
</div>

                <div class="row mt-3">
                    <div class="col-12">
                        <div class="form-group">
                            <button class="btn btn-primary w-100" type="submit">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-send"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 14l11 -11" /><path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" /></svg>
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('myscript'); ?>
<script>
   $(function () {
    // Saat tombol approve diklik - perbaiki selector
    $(".btn-approve").click(function (e) {
        e.preventDefault();
        var id_izinsakit = $(this).attr("id_izinsakit");
        $("#id_izinsakit_form").val(id_izinsakit);
        
        // Reset modal ke kondisi awal setiap kali dibuka
        $("#status_approved_modal").val("1"); // set default ke "Disetujui"
        $("#input-alasan").hide(); // sembunyikan textarea
        $("#alasan_admin").val(""); // kosongkan textarea
        
        $("#modal-izinsakit").modal("show");
    });

    // Inisialisasi datepicker
    $("#dari, #sampai").datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd'
    });

    // Tampilkan textarea alasan hanya jika status ditolak (value = 2)
    $("#status_approved_modal").change(function () {
        if ($(this).val() == "2") {
            $("#input-alasan").show();
        } else {
            $("#input-alasan").hide();
            $("#alasan_admin").val(""); // reset textarea jika tidak ditolak
        }
    });

    // Event listener untuk reset modal saat ditutup
    $('#modal-izinsakit').on('hidden.bs.modal', function () {
        $("#status_approved_modal").val("1"); // reset ke "Disetujui"
        $("#input-alasan").hide(); // sembunyikan textarea
        $("#alasan_admin").val(""); // kosongkan textarea
    });
});
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.tabler', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Muhammad Farid M\Downloads\absensigeotaggingandselifievideo\absensita\resources\views/presensi/izinsakit.blade.php ENDPATH**/ ?>