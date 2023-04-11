<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pasien extends Model
{
    use HasFactory;
    public $table = "pasien";
    protected $guarded = [];  

    public function rumahsakit(): BelongsTo
    {
        return $this->belongsTo(Rumahsakit::class);
        // return $this->belongsTo(Rumahsakit::class, 'rumahsakit_id', 'id');
    }
}
