<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<style>
    .table td, .table th {
        margin: 15px;
    }
    .episode-list {
        margin-top: 10px;
    }
    .episode-title {
        font-weight: bold;
    }
</style>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Videos</h1>

<?php if (session('success')): ?>
    <div class="alert alert-success">
        <?= session('success'); ?>
    </div>
<?php endif; ?>

<a href="/admin/videos/create" class="btn btn-primary">Add New Video</a>

<div style="overflow-x: auto;">
    <table class="table table-striped" style="border-spacing: 0 10px; border-collapse: separate;">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Thumbnail</th>
                <th>Backdrop</th>
                <th>Description</th>
                <th>Type</th>
                <th>Year</th>
                <th>Genre</th>
                <th>Duration</th>
                <th>Quality</th>
                <th>Episodes</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($videos as $video): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= esc($video['title']); ?></td>
                    <td>
                        <img src="<?= esc($video['thumbnail']); ?>" alt="<?= esc($video['title']); ?>" width="100">
                    </td>
                    <td>
                        <img src="<?= esc($video['backdrop']); ?>" alt="<?= esc($video['title']); ?>" width="100">
                    </td>
                    <td><?= esc($video['description']); ?></td>
                    <td><?= esc($video['video_type']); ?></td>
                    <td><?= esc($video['year']); ?></td>
                    <td><?= esc($video['genre']); ?></td>
                    <td><?= esc($video['duration']); ?></td>
                    <td><?= esc($video['video_quality']); ?></td>
                    <td>
                        <?php if (!empty($video['episodes'])): ?>
                            <div class="episode-list">
                                <?php foreach ($video['episodes'] as $episode): ?>
                                    <div class="episode-title"><?= esc($episode['title']); ?></div>
                                    <div class="episode-url"><?= esc($episode['url']); ?></div>
                                <?php endforeach; ?>
                            </div>
                        <?php else: ?>
                            No episodes available
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="/admin/videos/edit/<?= $video['id']; ?>" class="btn btn-secondary">Edit</a>
                        <a href="/admin/videos/delete/<?= $video['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>
