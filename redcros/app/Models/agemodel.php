<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agemodel extends Model
{
    use HasFactory;

    protected $table = "age";
    protected $primaryKey = "age_id";
}
