<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyProgramme extends Model
{
    use HasFactory;


      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'start_date',
        'end_date',
        'programme_name',
        'invited_guest',
    ];


}
