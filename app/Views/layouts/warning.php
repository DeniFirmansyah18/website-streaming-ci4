<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title and GIF Link</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    text-align: center;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.title {
    font-size: 2em;
    margin-bottom: 20px;
    color: #333;
}

.gif-image {
    max-width: 100%;
    height: auto;
    border: 2px solid #ddd;
    border-radius: 10px;
    transition: transform 0.3s ease;
}

.gif-image:hover {
    transform: scale(1.05);
}
</style>
<body>
    <div class="container">
        <h1 class="title">Cari Apa Bang?</h1>
        <img src="<?= base_url(); ?>img/warning.webp" alt="Gambar">
    </div>
</body>
</html>