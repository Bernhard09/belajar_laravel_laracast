<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;
    protected $fillable = ['name'];
    public function jobs() {
        return $this->belongsToMany(JobModel::class, 'job_tag', relatedPivotKey:'job_listing_id');
    }

    public function posts() {
        return $this->belongsToMany(Post::class);
    }

}
