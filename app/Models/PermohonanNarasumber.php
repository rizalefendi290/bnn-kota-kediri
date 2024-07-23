<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermohonanNarasumber extends Model
{
    use HasFactory;
    protected $table = 'permohonan_narasumbers';
    protected $fillable = [
        'name', 'phone', 'event_place', 'event_start_time', 'event_end_time', 'event_date', 'participants', 'request_letter', 'remarks'
    ];
}
