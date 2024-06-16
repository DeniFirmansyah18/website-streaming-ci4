<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>

<style>
    /* General form styling */
form {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

form h1 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

.form-control,
.form-control-file,
.form-control select {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.form-control-file {
    padding: 3px;
}

.form-control:focus,
.form-control-file:focus,
.form-control select:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    font-size: 1rem;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    display: block;
    width: 100%;
    text-align: center;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.alert {
    margin-bottom: 20px;
    padding: 15px;
    border: 1px solid transparent;
    border-radius: 4px;
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}

.alert-danger li {
    list-style-type: none;
}

@media (max-width: 768px) {
    form {
        padding: 15px;
    }
}
</style>

<h3 class="h3 mb-4 text-gray-800">Add New Videos</h3>

<?php if (isset($errors) && !empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $error): ?>
            <li><?= esc($error); ?></li>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form action="<?= base_url('/store'); ?>" method="POST" enctype="multipart/form-data">
    <?= csrf_field(); ?>

    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" value="<?= old('title'); ?>">
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" name="description"><?= old('description'); ?></textarea>
    </div>

    <div class="form-group">
        <label for="thumbnail">Thumbnail:</label>
        <input type="file" class="form-control-file" id="thumbnail" name="thumbnail">
    </div>

    <div class="form-group">
        <label for="backdrop">Backdrop:</label>
        <input type="file" class="form-control-file" id="backdrop" name="backdrop">
    </div>

    <div class="form-group">
        <label for="video_type">Video Type:</label>
        <select class="form-control" id="video_type" name="video_type">
            <option value="movie" <?= old('video_type') == 'movie' ? 'selected' : ''; ?>>Movie</option>
            <option value="series" <?= old('video_type') == 'series' ? 'selected' : ''; ?>>Series</option>
            <!-- Add more options as needed -->
        </select>
    </div>

    <div class="form-group">
        <label for="year">Year:</label>
        <input type="number" class="form-control" id="year" name="year" value="<?= old('year'); ?>">
    </div>

    <div class="form-group">
        <label for="genre">Genre:</label>
        <input type="text" class="form-control" id="genre" name="genre" value="<?= old('genre'); ?>">
    </div>

    <div class="form-group">
        <label for="duration">Duration (minutes):</label>
        <input type="number" class="form-control" id="duration" name="duration" value="<?= old('duration'); ?>">
    </div>

    <div class="form-group">
        <label for="video_quality">Video Quality:</label>
        <select class="form-control" id="video_quality" name="video_quality">
            <option value="720p" <?= old('video_quality') == '720p' ? 'selected' : ''; ?>>720p</option>
            <option value="1080p" <?= old('video_quality') == '1080p' ? 'selected' : ''; ?>>1080p</option>
            <!-- Add more options as needed -->
        </select>
    </div>

    <!-- Episode section -->
    <div id="episodes" class="form-group">
        <label for="episode_titles[]">Episodes:</label>
        <div>
            <input type="text" class="form-control" name="episode_titles[]" placeholder="Episode Title" value="<?= old('episode_titles[]'); ?>">
            <input type="url" class="form-control mt-2" name="episode_urls[]" placeholder="Episode URL" value="<?= old('episode_urls[]'); ?>">
        </div>
    </div>
    <button type="button" class="btn btn-secondary mt-2" onclick="addEpisode()">Add Episode</button>

    <button type="submit" class="btn btn-primary mt-4">Add Video</button>
</form>

<script>
function addEpisode() {
    var episodesDiv = document.getElementById('episodes');
    var newEpisodeDiv = document.createElement('div');
    newEpisodeDiv.classList.add('mt-2');
    newEpisodeDiv.innerHTML = `
        <input type="text" class="form-control" name="episode_titles[]" placeholder="Episode Title">
        <input type="url" class="form-control mt-2" name="episode_urls[]" placeholder="Episode URL">
    `;
    episodesDiv.appendChild(newEpisodeDiv);
}
</script>

<?= $this->endSection(); ?>