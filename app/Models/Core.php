<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jamesh\Uuid\HasUuid;

class Core extends Model
{
    use HasFactory, HasUuid;

    protected $casts = [
        'id' => 'string',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'name',
        'logo'
    ];

    public function juniorenterpises() {
        return $this->hasMany('App\Models\JuniorEnterpise');
    }
}
