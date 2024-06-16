<?php

namespace App\Models;

use CodeIgniter\Model;

class EpisodeModel extends Model
{
    protected $table = 'episodes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['video_id', 'episode_number', 'title', 'url'];
}