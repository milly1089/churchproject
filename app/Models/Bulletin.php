<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulletin extends Model
{
    use HasFactory;

    
   /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'bulletin_url'
    ];

    //get bulletin to be used in the frontend
    public static function getBulletinURL()
    {
        return Bulletin::all()[0]->bulletin_url;
    }
    
}
