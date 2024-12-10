<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    protected $fillable =[
        'job_id',
        'news',
       // 'observations',
       // 'status',
    ];

    public function job(){
        return $this->belongsTo(Job::class);
    }
}
