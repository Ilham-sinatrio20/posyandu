<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $table = 'vaccine';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description',
    ];

    public function immunization() {
        return $this->hasMany(Immunization::class, 'vaccine_id');
    }
}
