<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Human extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function subjects()
   {
       return $this->belongsToMany(Subject::class, 'human_subject', 'human_id', 'subject_id');
   }
}
