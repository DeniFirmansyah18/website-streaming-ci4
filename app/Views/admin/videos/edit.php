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
    padding: 8px;
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

/* Center the h3 text */
.form-header {
        text-align: center;
        margin-bottom: 20px;
}

@media (max-width: 768px) {
    form {
        padding: 15px;
    }
}
</style>


<div class="form-header">
    <h3 class="h3 mb-4 text-gray-800">Edit Videos</h3>
</div>

<?php if (isset($errors) && !empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $error): ?>
            <li><?= esc($error); ?></li>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form action="/admin/videos/update/<?= $video['id'] ?>" method="POST" enctype="multipart/form-data">
    <?= csrf_field(); ?>

    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" value="<?= esc($video['title']); ?>">
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" name="description"><?= esc($video['description']); ?></textarea>
    </div>

    <div class="form-group">
        <label for="thumbnail">Thumbnail:</label>
        <input type="file" class="form-control-file" id="thumbnail" name="thumbnail">
        <img src="<?= esc($video['thumbnail']); ?>" alt="<?= esc($video['title']); ?>" width="100">
    </div>

    <input type="hidden" name="existing_thumbnail" value="<?= esc($video['thumbnail']); ?>">

    <div class="form-group">
        <label for="backdrop">Backdrop:</label>
        <input type="file" class="form-control-file" id="backdrop" name="backdrop">
        <img src="<?= esc($video['backdrop']); ?>" alt="<?= esc($video['title']); ?>" width="100">
    </div>

    <input type="hidden" name="existing_backdrop" value="<?= esc($video['backdrop']); ?>">

    <div class="form-group">
        <label for="video_type">Video Type:</label>
        <select class="form-control" id="video_type" name="video_type">
            <option value="movie" <?= old('video_type', $video['video_type']) == 'movie' ? 'selected' : ''; ?>>Movie</option>
            <option value="series" <?= old('video_type', $video['video_type']) == 'series' ? 'selected' : ''; ?>>Series</option>
            <!-- Add more options as needed -->
        </select>
    </div>

    <div class="form-group">
        <label for="year">Year:</label>
        <input type="number" class="form-control" id="year" name="year" value="<?= old('year', $video['year']); ?>">
    </div>

    <div class="form-group">
        <label for="genre">Genre:</label>
        <input type="text" class="form-control" id="genre" name="genre" value="<?= old('genre', $video['genre']); ?>">
    </div>

    <div class="form-group">
        <label for="duration">Duration (minutes):</label>
        <input type="number" class="form-control" id="duration" name="duration" value="<?= old('duration', $video['duration']); ?>">
    </div>

    <div class="form-group">
        <label for="video_quality">Video Quality:</label>
        <select class="form-control" id="video_quality" name="video_quality">
            <option value="720p" <?= old('video_quality', $video['video_quality']) == '720p' ? 'selected' : ''; ?>>720p</option>
            <option value="1080p" <?= old('video_quality', $video['video_quality']) == '1080p' ? 'selected' : ''; ?>>1080p</option>
            <!-- Add more options as needed -->
        </select>
    </div>

    <!-- Episodes -->
    <div id="episodes-container">
        <h4 class="h4 mb-4 text-gray-800">Episodes</h4>
        <?php foreach ($episodes as $episode): ?>
            <div class="episode-group mb-3">
                <div class="form-group">
                    <label for="episode_title_<?= $episode['id'] ?>">Episode Title:</label>
                    <input type="text" class="form-control" id="episode_title_<?= $episode['id'] ?>" name="episodes[<?= $episode['id'] ?>][title]" value="<?= esc($episode['title']); ?>">
                </div>
                <div class="form-group">
                    <label for="episode_url_<?= $episode['id'] ?>">Episode URL:</label>
                    <input type="text" class="form-control" id="episode_url_<?= $episode['id'] ?>" name="episodes[<?= $episode['id'] ?>][url]" value="<?= esc($episode['url']); ?>">
                </div>
                <button type="button" class="btn btn-danger remove-episode" data-episode-id="<?= $episode['id'] ?>">Remove Episode</button>
            </div>
        <?php endforeach; ?>
    </div>

    <button type="button" class="btn btn-secondary" id="add-episode">Add New Episode</button>

    <button type="submit" class="btn btn-primary">Update Video</button>
</form>

<script>
document.getElementById('add-episode').addEventListener('click', function() {
    const container = document.getElementById('episodes-container');
    const index = container.children.length;
    const episodeGroup = document.createElement('div');
    episodeGroup.className = 'episode-group mb-3';
    episodeGroup.innerHTML = `
        <div class="form-group">
            <label for="new_episode_title_${index}">Episode Title:</label>
            <input type="text" class="form-control" id="new_episode_title_${index}" name="new_episodes[${index}][title]">
        </div>
        <div class="form-group">
            <label for="new_episode_url_${index}">Episode URL:</label>
            <input type="text" class="form-control" id="new_episode_url_${index}" name="new_episodes[${index}][url]">
        </div>
        <button type="button" class="btn btn-danger remove-episode">Remove Episode</button>
    `;
    container.appendChild(episodeGroup);

    episodeGroup.querySelector('.remove-episode').addEventListener('click', function() {
        container.removeChild(episodeGroup);
    });
});

document.querySelectorAll('.remove-episode').forEach(button => {
    button.addEventListener('click', function() {
        const episodeId = this.getAttribute('data-episode-id');
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'remove_episodes[]';
        input.value = episodeId;
        this.closest('form').appendChild(input);
        this.closest('.episode-group').remove();
    });
});
</script>

<?= $this->endSection(); ?>