<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'person';

    protected $primaryKey = 'person_id';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'ssn',
        'is_active',
    ];


    use HasFactory;
}
