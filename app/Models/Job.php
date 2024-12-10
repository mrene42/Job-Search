<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'offer',
        'company',
        'description',
        'status',
    ];

    public function follows(){
        return $this->hasMany(Follow::class);
    }
}
