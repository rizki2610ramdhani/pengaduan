<?php $__env->startSection('title', 'Daftar Aduan'); ?>
<?php $__env->startSection('judul', 'Pengaduan'); ?>
<?php $__env->startSection('subjudul', 'Daftar Pengaduan Yang Belum Diproses'); ?>
<?php $__env->startSection('content'); ?>
<table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">No</th>
        <th>NIK</th>
        <th>Pengadu</th>
        <th>Tanggal Pengaduan</th>
        <th>Aduan</th>
        <th style="width: 40px">Aksi</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $pengaduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aduan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($aduan->masyarakat->nik); ?></td>
        <td><?php echo e($aduan->masyarakat->nama); ?></td>
        <td><?php echo e($aduan->tgl_aduan); ?></td>
        <td><?php echo e($aduan->aduan); ?></td>
        <td>
            <a href="/petugas-proses/<?php echo e($aduan->id); ?>" class="btn btn-warning">
                Proses sekarang
            </a>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.petugas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan\resources\views/petugas/daftar-aduan.blade.php ENDPATH**/ ?>