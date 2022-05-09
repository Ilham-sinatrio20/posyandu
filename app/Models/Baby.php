<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baby extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'id_parent',
        'tempat_lahir',
        'tanggal_lahir',
        'anak_ke',
        'jenis_kelamin',
        'golongan_darah',
        'panjang_bayi',
        'berat_bayi',
    ];

    public function progressBaby(){
        return $this->hasMany(ProgressBaby::class);
    }

    public function parent() {
        return $this->belongsTo(Parents::class);
    }

    public function immunization() {
        return $this->hasMany(Immunization::class);
    }
}
