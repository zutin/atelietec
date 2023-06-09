<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TicketFacility extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'ticket_facilities';
    protected $fillable = [
        'facility_id',
        'ticket_id',
        'protocol',
    ];


    public function facility()
    {
        return $this->belongsTo(Facility::class, 'facility_id', 'id');
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'ticket_id', 'id');
    }
}
