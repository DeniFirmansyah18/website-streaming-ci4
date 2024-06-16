<?php

namespace App\Models;

use CodeIgniter\Model;

class VideoModel extends Model
{
    protected $table = 'videos';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'title', 'description', 'thumbnail', 'backdrop', 'video_type', 
        'year', 'genre', 'duration', 'video_quality'
    ];
}

