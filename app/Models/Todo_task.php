<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo_task extends Model
{
    use HasFactory;
    protected $fillable = ['task', 'isCompleted', 'image'];
}
