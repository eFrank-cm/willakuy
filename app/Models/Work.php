<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    public function job(){
        return $this->belongsTo(Job::class);
    }

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
