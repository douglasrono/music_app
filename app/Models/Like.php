<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;


    protected $fillable = ['music_id', 'user_ip'];

    public function musics()
    {
        return $this->belongsToMany(Music::class);
    }
}
