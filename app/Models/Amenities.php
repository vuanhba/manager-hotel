<?php

namespace App\Models;

use App\Models\Packages;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Amenities extends Model
{
    use HasFactory;
    protected $table="amenities";
    protected $fillable = [
    'names'
    ];
    public function packages()
    {
        return $this->belongsToMany(Packages::class, 'amenities_packages', 'id_amenitie', 'id_package');
    }
}
