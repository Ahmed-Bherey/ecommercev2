<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubDepartment extends Model
{
    use HasFactory;
    protected $fillable = [
        'mainDepartment_id',
        'name',
        'photo',

    ];

    public function main_departments()
    {
        return $this->belongsTo(MainDePartment::class, 'mainDepartment_id', 'id');
    }
}
