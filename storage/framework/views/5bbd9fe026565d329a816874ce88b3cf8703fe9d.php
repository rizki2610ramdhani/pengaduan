<?php $__env->startSection('title', 'Create Aduan'); ?>
<?php $__env->startSection('judul', 'Create Aduan'); ?>
<?php $__env->startSection('subjudul', 'Form Aduan'); ?>
<?php $__env->startSection('content'); ?>
<form action="/masyarakat-create-aduan" method="post" enctype="multipart/form-data">
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
      <label for="exampleInputEmail1">Tanggal Aduan</label>
      <input type="text" readonly class="form-control" id="exampleInputEmail1" value="<?php echo e(date('Y-m-d')); ?>" name="tgl_aduan">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Isi Laporan</label>
      <textarea name="aduan" class="form-control" id="exampleInputPassword1" placeholder="Isi Laporan"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputFile"></label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="exampleInputFile" name="foto">
          <label class="custom-file-label" for="exampleInputFile">Bukti Foto</label>
        </div>
        <div class="input-group-append">
          <span class="input-group-text">Upload</span>
        </div>
      </div>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-success">Save</button>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.masyarakat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan\resources\views/masyarakat/create-aduan.blade.php ENDPATH**/ ?>