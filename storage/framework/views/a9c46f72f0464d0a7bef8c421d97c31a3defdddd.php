
<?php $__env->startSection('title', 'Edit Mahasiswa'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Edit Mahasiswa</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('mahasiswa.update', $mahasiswa->id)); ?>" method="post">
                   <?php echo csrf_field(); ?>
                   <?php echo method_field('PUT'); ?>

                   <div class="form-group mb-3">
                       <label for="nim">NIM</label>
                       <input type="text" name="nim" class="<?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" value="<?php echo e(old('nim', $mahasiswa->id)); ?>" required>

                       <?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div class="mt-1">
                            <span class="text-danger"><?php echo e($message); ?></span>
                          </div>
                       <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                   </div>

                   <div class="form-group mb-3">
                    <label for="nama_lengkap">Nama</label>
                    <input type="text" name="nama_lengkap" class="form-control" value="<?php echo e(old('nama_lengkap', $mahasiswa->nama_lengkap)); ?>" required>
                </div>

                <div class="form-group mb-3">
                    <label for="kelas">Kelas</label>
                    <input type="text" name="kelas" class="form-control" value="<?php echo e(old('kelas', $mahasiswa->kelas)); ?>" required>
                </div>

                <div class="form-group mb-3">
                    <label for="prodi">Prodi</label>
                    <input type="text" name="prodi" class="form-control" value="<?php echo e(old('prodi', $mahasiswa->prodi)); ?>" required>
                </div>

                <div class="form-group mb-3">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" value="<?php echo e(old('tempat_lahir', $mahasiswa->tempat_lahir)); ?>" required>
                </div>

                <div class="form-group mb-3">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo e(old('tanggal_lahir', $mahasiswa->tanggal_lahir)); ?>" required>
                </div>

                <div class="form-group mb-3">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="laki-laki" <?php echo e(old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'laki-laki' ? 'selected' : ''); ?>>Laki-Laki</option>
                        <option value="perempuan" <?php echo e(old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'perempuan' ? 'selected' : ''); ?>>Perempuan</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" class="form-control"><?php echo e(old('alamat', $mahasiswa->alamat)); ?></textarea>
                </div>

                <div class="form-group d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?php echo e(route('mahasiswa.index')); ?>" class="btn btn-secondary">Kembali</a>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\friska\mahasiswa\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>