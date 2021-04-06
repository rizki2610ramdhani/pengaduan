<?php $__env->startSection('title', 'Profile Masyarakat'); ?>
<?php $__env->startSection('judul', 'Profile'); ?>
<?php $__env->startSection('subjudul', 'Profile Masyarakat'); ?>
<?php $__env->startSection('content'); ?>
<table >
    <thead>
    <tbody>
      <tr>
        <td style="width: 20px">NIK</td>
        <td style="width: 40px">:</td>
        <td><?php echo e(Auth::user()->nik); ?></td>
      </tr>
      <tr>
        <td style="width: 20px">Nama</td>
        <td style="width: 40px">:</td>
        <td><?php echo e(Auth::user()->nama); ?></td>
      </tr>
      <tr>
        <td style="width: 20px">Username</td>
        <td style="width: 40px">:</td>
        <td><?php echo e(Auth::user()->username); ?></td>
      </tr>
      <tr>
        <td style="width: 20px">Telepon</td>
        <td style="width: 40px">:</td>
        <td><?php echo e(Auth::user()->telp); ?></td>
      </tr>
    </tbody>
  </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.masyarakat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan\resources\views/masyarakat/profile.blade.php ENDPATH**/ ?>