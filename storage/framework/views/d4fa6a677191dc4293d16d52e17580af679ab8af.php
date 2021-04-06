<?php $__env->startSection('title', 'Dashbard Petugas'); ?>
<?php $__env->startSection('judul', 'Dashboard'); ?>
<?php $__env->startSection('subjudul', 'Daftar Aduan Ditanggapi'); ?>
<?php $__env->startSection('content'); ?>
<table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">No</th>
        <th>Pengadu</th>
        <th>Tanggal Pengaduan</th>
        <th>Aduan</th>
        <th>foto</th>
        <th style="width: 40px">Status</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $tanggapan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tgp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($tgp->pengaduan->masyarakat->nama); ?></td>
        <td><?php echo e($tgp->pengaduan->tgl_aduan); ?></td>
        <td><?php echo e($tgp->pengaduan->aduan); ?></td>
        <td><div>
            <img src="<?php echo e(asset('imagesDB/' . $tgp->pengaduan->foto)); ?>" class="img-fluid mb-2" alt="red sample">
          </div></td>
        <td>
            <?php if($tgp->pengaduan->status == "0"): ?>
            <span class="badge bg-danger"><a href="/p-show-aduan/<?php echo e($tgp->id); ?>">Belum Diproses</a></span></td>
            <?php elseif($tgp->pengaduan->status =="proses"): ?>
            <span class="badge bg-warning"><a href="/p-show-aduan/<?php echo e($tgp->id); ?>">Diproses</a></span></td>
            <?php else: ?>
            <span class="badge bg-success"><a href="/p-show-aduan/<?php echo e($tgp->id); ?>">Selesai</a></span></td>
            <?php endif; ?>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.petugas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan\resources\views/petugas/dashboard.blade.php ENDPATH**/ ?>