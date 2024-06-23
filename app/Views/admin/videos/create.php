<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>

<style>
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

    .form-control.is-invalid,
    .form-control-file.is-invalid,
    .form-control select.is-invalid {
        border-color: #dc3545;
    }

    .invalid-feedback {
        color: #dc3545;
        font-size: 0.875rem;
        margin-top: 0.25rem;
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
    <h3 class="h3 mb-4 text-gray-800">Add New Videos</h3>
</div>

<form action="<?= base_url('/store'); ?>" method="POST" enctype="multipart/form-data">
    <?= csrf_field(); ?>

    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control <?= isset(session('errors')['title']) ? 'is-invalid' : ''; ?>" id="title" name="title" value="<?= old('title'); ?>">
        <?php if (isset(session('errors')['title'])): ?>
            <div class="invalid-feedback">
                <?= esc(session('errors')['title']); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control <?= isset(session('errors')['description']) ? 'is-invalid' : ''; ?>" id="description" name="description"><?= old('description'); ?></textarea>
        <?php if (isset(session('errors')['description'])): ?>
            <div class="invalid-feedback">
                <?= esc(session('errors')['description']); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="thumbnail">Thumbnail:</label>
        <input type="file" class="form-control-file <?= isset(session('errors')['thumbnail']) ? 'is-invalid' : ''; ?>" id="thumbnail" name="thumbnail">
    </div>

    <div class="form-group">
        <label for="backdrop">Backdrop:</label>
        <input type="file" class="form-control-file <?= isset(session('errors')['backdrop']) ? 'is-invalid' : ''; ?>" id="backdrop" name="backdrop">
    </div>

    <div class="form-group">
        <label for="video_type">Video Type:</label>
        <select class="form-control <?= isset(session('errors')['video_type']) ? 'is-invalid' : ''; ?>" id="video_type" name="video_type">
            <option value="movie" <?= old('video_type') == 'movie' ? 'selected' : ''; ?>>Movie</option>
            <option value="series" <?= old('video_type') == 'series' ? 'selected' : ''; ?>>Series</option>
        </select>
        <?php if (isset(session('errors')['video_type'])): ?>
            <div class="invalid-feedback">
                <?= esc(session('errors')['video_type']); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="year">Year:</label>
        <input type="number" class="form-control <?= isset(session('errors')['year']) ? 'is-invalid' : ''; ?>" id="year" name="year" value="<?= old('year'); ?>">
        <?php if (isset(session('errors')['year'])): ?>
            <div class="invalid-feedback">
                <?= esc(session('errors')['year']); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="genre">Genre:</label>
        <input type="text" class="form-control <?= isset(session('errors')['genre']) ? 'is-invalid' : ''; ?>" id="genre" name="genre" value="<?= old('genre'); ?>">
        <?php if (isset(session('errors')['genre'])): ?>
            <div class="invalid-feedback">
                <?= esc(session('errors')['genre']); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="duration">Duration (minutes):</label>
        <input type="number" class="form-control <?= isset(session('errors')['duration']) ? 'is-invalid' : ''; ?>" id="duration" name="duration" value="<?= old('duration'); ?>">
        <?php if (isset(session('errors')['duration'])): ?>
            <div class="invalid-feedback">
                <?= esc(session('errors')['duration']); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="video_quality">Video Quality:</label>
        <select class="form-control <?= isset(session('errors')['video_quality']) ? 'is-invalid' : ''; ?>" id="video_quality" name="video_quality">
            <option value="720p" <?= old('video_quality') == '720p' ? 'selected' : ''; ?>>720p</option>
            <option value="1080p" <?= old('video_quality') == '1080p' ? 'selected' : ''; ?>>1080p</option>
        </select>
        <?php if (isset(session('errors')['video_quality'])): ?>
            <div class="invalid-feedback">
                <?= esc(session('errors')['video_quality']); ?>
            </div>
        <?php endif; ?>
    </div>

    <div id="episodes" class="form-group">
        <label for="episode_titles">Episodes:</label>
        <?php $episode_titles = old('episode_titles') ?? ['']; ?>
        <?php $episode_urls = old('episode_urls') ?? ['']; ?>

        <?php foreach ($episode_titles as $index => $episode_title): ?>
            <div class="episode">
                <input type="text" class="form-control mb-2 <?= isset(session('errors')['episode_titles'][$index]) ? 'is-invalid' : ''; ?>" id="episode_titles_<?= $index; ?>" name="episode_titles[]" placeholder="Episode Title" value="<?= esc($episode_title); ?>">
                <?php if (isset(session('errors')['episode_titles'][$index])): ?>
                    <div class="invalid-feedback">
                        <?= esc(session('errors')['episode_titles'][$index]); ?>
                    </div>
                <?php endif; ?>
                <input type="text" class="form-control mb-2 <?= isset(session('errors')['episode_urls'][$index]) ? 'is-invalid' : ''; ?>" id="episode_urls_<?= $index; ?>" name="episode_urls[]" placeholder="Episode URL" value="<?= esc($episode_urls[$index]); ?>">
                <?php if (isset(session('errors')['episode_urls'][$index])): ?>
                    <div class="invalid-feedback">
                        <?= esc(session('errors')['episode_urls'][$index]); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>

    <button type="button" class="btn btn-secondary mb-3" id="add_episode_btn">Add Episode</button>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script>
    document.getElementById('add_episode_btn').addEventListener('click', function () {
        const episodesContainer = document.getElementById('episodes');
        const episodeCount = episodesContainer.getElementsByClassName('episode').length;

        const episodeDiv = document.createElement('div');
        episodeDiv.classList.add('episode');
        
        const titleInput = document.createElement('input');
        titleInput.type = 'text';
        titleInput.classList.add('form-control', 'mb-2');
        titleInput.name = 'episode_titles[]';
        titleInput.placeholder = 'Episode Title';
        
        const urlInput = document.createElement('input');
        urlInput.type = 'text';
        urlInput.classList.add('form-control', 'mb-2');
        urlInput.name = 'episode_urls[]';
        urlInput.placeholder = 'Episode URL';

        episodeDiv.appendChild(titleInput);
        episodeDiv.appendChild(urlInput);
        
        episodesContainer.appendChild(episodeDiv);
    });
</script>

<?= $this->endSection(); ?>
