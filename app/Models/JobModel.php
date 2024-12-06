<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Arr;

class JobModel extends Model {

    use HasFactory;
    protected $table = 'job_listing';
    protected $fillable = ['title', 'salary'];

    public function employer() {
        return $this->belongsTo(Employer::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, table: 'job_tag',foreignPivotKey: "job_listing_id");
    }

    // public static function all(): array {
    //     return [
    //         [
    //             'id' => 1,
    //             'title' => 'Director',
    //             'salary' => '$320,000'
    //         ],
    //         [
    //             'id' => 2,
    //             'title' => 'Programmer',
    //             'salary' => '$120,000'
    //         ],
    //         [
    //             'id' => 3,
    //             'title' => 'UI/UX Designer',
    //             'salary' => '$100,000' 
    //         ],
    //         ]; 
    // }
    // public static function find(int $id): array {
    //     $job =  Arr::first(static::all(), function($jobs) use ($id){
    //         return $jobs['id'] == $id;
    //     });

    //     if (! $job) {
    //         abort(404, 'Your job you looking for didn\'t exist');
    //     }

    //     return $job;
    // }
}