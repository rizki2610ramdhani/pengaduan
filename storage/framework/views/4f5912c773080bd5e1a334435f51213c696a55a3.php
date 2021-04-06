<?php $__env->startSection('title', 'Dashbard Masyarakat'); ?>
<?php $__env->startSection('judul', 'Dashboard'); ?>
<?php $__env->startSection('subjudul', 'Daftar Aduan Saya'); ?>
<?php $__env->startSection('content'); ?>
<table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">No</th>
        <th>Tanggal Aduan</th>
        <th>Isi Laporan</th>
        <th>Foto</th>
        <th style="width: 40px">Status</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $aduanuser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $au): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($au->tgl_aduan); ?></td>
        <td><?php echo e($au->aduan); ?></td>
        <td>
          <div>
            <img src="<?php echo e(asset('imagesDB/' . $au->foto)); ?>" class="img-fluid mb-2" alt="red sample">
          </div>
        </td>
        <td>
            <?php if($au->status == '0'): ?>
            <span class="badge bg-danger"><a href="/m-show-aduan/<?php echo e($au->id); ?>">Belum Diproses</a></span></td>
            <?php elseif($au->status =='proses'): ?>
            <span class="badge bg-warning"><a href="/m-show-aduan/<?php echo e($au->id); ?>">Diproses</a></span></td>
            <?php else: ?>
            <span class="badge bg-success"><a href="/m-show-aduan/<?php echo e($au->id); ?>">Selesai</a></span></td>
            <?php endif; ?>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.masyarakat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan\resources\views/Masyarakat/dashboard.blade.php ENDPATH**/ ?>