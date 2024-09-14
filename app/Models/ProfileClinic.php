<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileClinic extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'logo',
        'description',
        'doctor_name',
        'unique_code',
    ];
}
// $table->string('name');
// $table->string('address');
// $table->string('phone');
// $table->string('email');
// $table->string('logo')->nullable();
// $table->string('description')->nullable();
// $table->string('doctor_name');
// $table->string('unique_code');