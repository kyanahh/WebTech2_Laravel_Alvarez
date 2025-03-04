<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    protected $table = 'task';
    protected $primaryKey = 'id';
    protected $fillable = ['tasks'];
    
    use HasFactory;
}
