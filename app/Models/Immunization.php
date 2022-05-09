<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Immunization extends Model {
    use HasFactory;

    protected $guarded = ['id'];

    public function baby() {
        return $this->belongsTo(Baby::class);
    }

    public function vaccine() {
        return $this->belongsTo(Vaccine::class);
    }
}
