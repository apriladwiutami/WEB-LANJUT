<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
	protected $table                = 'posts';
	protected $primaryKey           = 'post_id';
	protected $allowedFields        = ['judul', 'deskirpsi', 'gambar', 'author', 'kategori', 'slug', 'created_at', 'updated_at' ];
	protected $useTimestamps        = true;
}
