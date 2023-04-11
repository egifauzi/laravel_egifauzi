<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rumahsakit extends Model
{
    use HasFactory;
    public $table = "rumahsakit";
    protected $guarded = [];  

    public function Pasien(): HasMany
    {
        return $this->hasMany(Pasien::class);
        // return $this->hasMany(Pasien::class, 'rumahsakit_id', 'id');
    }
}
