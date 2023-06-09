<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Carrier extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "carriers";

    protected $fillable = [
        'name',
    ];

    public function facilities()
    {
        return $this->hasMany(Facility::class, 'carrier_id', 'id');
    }
}
