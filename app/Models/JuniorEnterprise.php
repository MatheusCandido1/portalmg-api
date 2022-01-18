<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jamesh\Uuid\HasUuid;

class JuniorEnterprise extends Model
{
    use HasFactory, HasUuid;

    protected $casts = [
        'id' => 'string',
    ];

    protected $fillable = [
        'name',
        'logo',
        'core_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function core() {
        return $this->belongsTo('App\Models\Core');
    }
}
