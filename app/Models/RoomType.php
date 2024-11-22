<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_name',
    ];

    public function Rooms()
    {
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }
}
