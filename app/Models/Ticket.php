<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TicketFacility;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "tickets";

    protected $fillable = [
        'situation',
    ];

    public function ticketFacilities()
    {
        return $this->hasMany(TicketFacility::class);
    }
}
