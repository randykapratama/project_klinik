<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    /** 
     * Get the pasien that owns the Daftar
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pasien(): BelongsTo
    {
        return $this->belongsTo(Pasien::class);
    }

    /** 
     * Get the poli that owns the Daftar
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function poli(): BelongsTo
    {
        return $this->belongsTo(pasien::class)->withDefault(); // Menambahkan relasi ke model Poli
    }
}
