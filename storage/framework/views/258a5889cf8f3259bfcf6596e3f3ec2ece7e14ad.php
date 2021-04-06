<?php $__env->startSection('title', 'Dashbard Admin'); ?>
<?php $__env->startSection('judul', 'Dashboard'); ?>
<?php $__env->startSection('subjudul', 'Daftar Aduan Terbaru'); ?>
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
        <?php $__currentLoopData = $adt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($ad->tgl_aduan); ?></td>
        <td><?php echo e($ad->aduan); ?></td>
        <td>
          <div>
            <img src="<?php echo e(asset('imagesDB/' . $ad->foto)); ?>" class="img-fluid mb-2" alt="red sample">
          </div>
        </td>
        <td>
            <?php if($ad->status == '0'): ?>
            <span class="badge bg-danger">Belum Diproses</span></td>
            <?php elseif($ad->status =='proses'): ?>
            <span class="badge bg-warning">proses</span></td>
            <?php else: ?>
            <span class="badge bg-success"><a href="/a-show-aduan/<?php echo e($ad->id); ?>">Selesai</a></span></td>
            <?php endif; ?>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>