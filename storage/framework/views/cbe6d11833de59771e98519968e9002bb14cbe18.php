<?php $__env->startSection('title', 'Cetak Laporan'); ?>
<?php $__env->startSection('judul', 'Cetak'); ?>
<?php $__env->startSection('subjudul'); ?>
<a href="/admin-cetak-l">Cetak Laporan</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Tanggal Aduan</th>
        <th>Isi Laporan</th>
        <th>NIK Petugas</th>
        <th>Nama Petugas</th>
        <th>Tanggal Tanggapan</th>
        <th>Tanggapan</th>
        <th style="width: 40px">Status</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($ad->masyarakat->nik); ?></td>
        <td><?php echo e($ad->masyarakat->nama); ?></td>
        <th><?php echo e($ad->tgl_aduan); ?></th>
        <th><?php echo e($ad->aduan); ?></th>
        <th><?php echo e($ad->tanggapan->petugas->nik); ?></th>
        <th><?php echo e($ad->tanggapan->petugas->nama); ?></th>
        <th><?php echo e($ad->tanggapan->tgl_tanggapan); ?></th>
        <th><?php echo e($ad->tanggapan->tanggapan); ?></th>
        <td>
            <?php if($ad->status == '0'): ?>
            <span>Belum Diproses</span></td>
            <?php elseif($ad->status =='proses'): ?>
            <span>proses</span></td>
            <?php else: ?>
            <span>Selesai</span></td>
            <?php endif; ?>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan\resources\views/admin/cetaklaporan.blade.php ENDPATH**/ ?>