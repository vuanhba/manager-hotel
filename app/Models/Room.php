<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Packages;
use App\Models\RoomType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{

    use HasFactory;
    protected $table = "rooms";
    protected $fillable = ['room_type_id','room_number','status','description'];
   
    public function packages()
    {
        return $this->belongsToMany(Packages::class, 'roompack', 'id_room', 'id_package');
    }
   
    public function roomPacks()
    {
        return $this->hasMany(RoomPack::class, 'id_room');
    }
    public function roomtype()
    {
        return $this->belongsTo(RoomType::class,'room_type_id');
    }
}
