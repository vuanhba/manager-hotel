<?php

namespace App\Models;

use App\Models\Room;
use App\Models\Amenities;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Packages extends Model
{
    use HasFactory;
    protected $table="packages";
    protected $fillable = [
        'name','description','price'
    ];
    public function amenities()
    {
        return $this->belongsToMany(Amenities::class, 'amenities_packages', 'id_package', 'id_amenitie');
    }
    public function roomPacks()
    {
        return $this->hasMany(RoomPack::class, 'id_package');
    }
    public function rooms()
{
    return $this->belongsToMany(Room::class, 'roompack', 'id_package', 'id_room');
}
}
