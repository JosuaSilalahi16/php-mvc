<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'PostID';
    protected $fillable = [
        'Title', 
        'Content', 
        'Image_url', 
        'Category',
        'Tags'
    ];
}
