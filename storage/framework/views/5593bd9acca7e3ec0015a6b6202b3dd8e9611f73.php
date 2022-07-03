
<?php $__env->startSection('title', 'Data Mahasiswa'); ?>
<?php $__env->startSection('content'); ?>

<?php if(session()->has('berhasil')): ?>
    <div class="alert alert-success">
        <?php echo e(session()->get('berhasil')); ?>

    </div>
<?php endif; ?>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3>Data Mahasiswa</h3>
        </div>

        <div class="card-body">
            <div class="form-group">
                <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-success">Tambah</a>
            </div>
            <table class="table table-striped tabel-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Prodi</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>    
                </thead>
                <tbody>
                    <?php
                        $increment = 1;
                    ?>
                    <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($increment++); ?></td>
                        <td><?php echo e($item->nim); ?></td>
                        <td><?php echo e($item->nama_lengkap); ?></td>
                        <td><?php echo e($item->kelas); ?></td>
                        <td><?php echo e($item->prodi); ?></td>
                        <td><?php echo e($item->jenis_kelamin); ?></td>
                        <td><?php echo e($item->tempat_lahir); ?></td>
                        <td><?php echo e($item->tanggal_lahir); ?></td>
                        <td><?php echo e($item->alamat); ?></td>
                        <td>
                            <a href="<?php echo e(route('mahasiswa.edit', $item->id)); ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo e(route('mahasiswa.destroy', $item->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button type="submit" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\friska\mahasiswa\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>