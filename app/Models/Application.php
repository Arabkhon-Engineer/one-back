<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subject',
        'message',
        'file_url'
    ];

    public function role(){return $this->belongsTo(related: Role::class);}

    public function applications (){ return $this->hasMany(related: Application::class);}
}
