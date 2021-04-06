<?php $__env->startSection('title', 'Detail Aduan'); ?>
<?php $__env->startSection('judul', 'Detail'); ?>
<?php $__env->startSection('subjudul', 'Detail Aduan'); ?>
<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $tanggapan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th colspan="5">Pengaduan</th>
        </tr>
      <tr>
        <th style="width: 10px">No</th>
        <th>Tanggal Aduan</th>
        <th>Isi Laporan</th>
        <th>Foto</th>
        <th style="width: 40px">Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($tg->pengaduan->tgl_aduan); ?></td>
        <td><?php echo e($tg->pengaduan->aduan); ?></td>
        <td>
          <div>
            <img src="<?php echo e(asset('imagesDB/' . $tg->pengaduan->foto)); ?>" class="img-fluid mb-2" alt="red sample">
          </div>
        </td>
        <td>
            <?php if($tg->pengaduan->status == '0'): ?>
            <span class="badge bg-danger">Belum Diproses</span></td>
            <?php elseif($tg->pengaduan->status =='proses'): ?>
            <span class="badge bg-warning">Diproses</span></td>
            <?php else: ?>
            <span class="badge bg-success">Selesai</span></td>
            <?php endif; ?>
      </tr>
    </tbody>
  </table>
  <hr>
  <?php if($tg->pengaduan->status = 'selesai'): ?>
  <table class="table table-bordered">
    <thead>
        <tr>
            <th colspan="5">Tanggapan</th>
        </tr>
      <tr>
        <th style="width: 10px">NIK Petugas</th>
        <th>Nama Petugas</th>
        <th>Tanggal Tanggapan</th>
        <th>Tanggapan</th>
        <th style="width: 40px">Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo e($tg->petugas->nik); ?></td>
        <td><?php echo e($tg->petugas->nama); ?></td>
        <td><?php echo e($tg->tgl_tanggapan); ?></td>
        <td><?php echo e($tg->tanggapan); ?></td>
        <td>
            <?php if($tg->status == '0'): ?>
            <span class="badge bg-danger">Belum Diproses</span></td>
            <?php elseif($tg->status =='proses'): ?>
            <span class="badge bg-warning">Diproses</span></td>
            <?php else: ?>
            <span class="badge bg-success">Selesai</span></td>
            <?php endif; ?>
      </tr>
    </tbody>
  </table>
  <?php else: ?>

  <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.masyarakat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan\resources\views/admin/detail-aduan.blade.php ENDPATH**/ ?>