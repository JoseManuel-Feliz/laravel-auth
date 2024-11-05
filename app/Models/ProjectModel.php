<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
    use HasFactory;

    protected $filleable = [
        'title',
        'status',
        'description',
        'Project_start _date'
    ];
}
