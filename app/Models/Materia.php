<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materia';
    use HasFactory;

    public function professores() {
        return $this->belongsTo('App\models\professor');
    }

    public function users() {
        return $this->belongsToMany('App\models\user');
    }
}