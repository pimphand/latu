<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Social_Media extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];
}
