<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Client(){
        return $this->belongsTo(Client::class , 'client_id' , 'id');
    }
    public function Sector(){
        return $this->belongsTo(Sector::class , 'sector_id' , 'id');
    }
}
