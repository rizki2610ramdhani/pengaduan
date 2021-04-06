<?php $__env->startSection('title', 'Daftar Masyarakat'); ?>
<?php $__env->startSection('judul', 'Masyarakat'); ?>
<?php $__env->startSection('subjudul', 'Daftar Masyarakat'); ?>
<?php $__env->startSection('content'); ?>
<table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Telepon</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $adt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($ad->nik); ?></td>
        <td><?php echo e($ad->nama); ?></td>
        <td><?php echo e($ad->username); ?></td>
        <td><?php echo e($ad->telp); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan\resources\views/admin/masyarakat.blade.php ENDPATH**/ ?>