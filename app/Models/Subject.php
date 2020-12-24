<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function humans()
   {
       return $this->belongsToMany(Human::class, 'human_subject', 'subject_id', 'human_id');
   }
}
