<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'TITLE_BLOG', 'SLUG_BLOG', 'DESC_BLOG', 'MAIN_IMG_BLOG', 'POST_CONTENT_BLOG', 'USER_ID'
    ];

    public function user() {
        return $this->belongsTo( 'App\Models\User', 'USER_ID', 'id' );
    }
}
