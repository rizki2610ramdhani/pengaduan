<?php $__env->startSection('title', 'Create Tanggapan'); ?>
<?php $__env->startSection('judul', 'Create Tanggapan'); ?>
<?php $__env->startSection('subjudul', 'Form Tanggapan'); ?>
<?php $__env->startSection('content'); ?>
<form action="/petugas-lanjutan/<?php echo e($id); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group">
    <?php if($errors->any()): ?>
									<div class="alert alert-danger">
										<ul>
											<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<li><?php echo e($error); ?></li>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</ul>
									</div>
							<?php endif; ?>
                                </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" readonly class="form-control" id="exampleInputEmail1" placeholder="Nama" value="<?php echo e(Auth::user()->nama); ?>">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Tanggal Tanggapan</label>
      <input type="text" readonly class="form-control" id="exampleInputEmail1" value="<?php echo e(date('Y-m-d')); ?>" name="tgl_tanggapan">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Isi Tanggapan</label>
      <textarea name="tanggapan" class="form-control" id="exampleInputPassword1" placeholder="Isi tanggapan"></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-success">Save</button>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.petugas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan\resources\views/petugas/petugas-laporan.blade.php ENDPATH**/ ?>