<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">User Detail</h1>

<?php if (session()->getFlashdata('pesan')): ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>

<div class="row">
    <div class="col-lg-8">
        <form action="<?= base_url('admin/update/' . $user->id); ?>" method="post">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= $user->username; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $user->email; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

        <form action="<?= base_url('admin/delete/' . $user->id); ?>" method="post" class="mt-2">
            <?= csrf_field(); ?>
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

        <a href="<?= base_url('admin'); ?>" class="btn btn-secondary mt-5">Kembali ke halaman awal</a>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>
