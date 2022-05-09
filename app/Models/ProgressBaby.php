<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressBaby extends Model
{
    use HasFactory;

    protected $fillable = [
      'id_bayi',
      'bulan_ke',
      'panjang_bayi',
      'berat_bayi'
    ];

    public function baby() {
        return $this->belongsTo(Baby::class);
    }
}
