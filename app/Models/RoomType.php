<?php

namespace App\Models;

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomType extends Model
{
    use HasFactory ,SoftDeletes;// ;
    protected $table = "room_type";
    protected $fillable = ['name','description','image','price_per_night'];
    public function rooms()
    {
        return $this->hasMany(Room::class,'room_type_id');
    }
}
