<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Facility extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "facilities";

    protected $fillable = [
        'name',
        'address',
        'designation',
        'carrier_id',
    ];

    public function carrier()
    {
        return $this->belongsTo(Carrier::class, 'carrier_id', 'id');
    }

    public function ticketFacilities()
    {
        return $this->hasMany(TicketFacility::class);
    }
}
