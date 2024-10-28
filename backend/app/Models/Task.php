<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use SoftDeletes;
    use HasFactory, HasUlids;
    protected $fillable = [
        'title',
        'description',
        'completed'
    ];
}
