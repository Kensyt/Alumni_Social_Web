<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'username', 'avatar', 'description','git', 'linkend','link'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
