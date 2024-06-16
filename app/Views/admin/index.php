<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">User List</h1>

<?php if (session()->getFlashdata('pesan')): ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>

<div class="row">
    <div class="col-lg-8">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach ($users as $user) : ?>

    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $user->username; ?></td>
      <td><?= $user->email; ?></td>
      <td>
        <a href="<?= base_url('admin/' . $user->id); ?>" class="btn btn-sm btn-primary">Edit</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>