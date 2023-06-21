<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class US extends Model
{
    protected $fillable = [
        'address',
        
    ];
    use HasFactory;
    * @var array<int, string>
     */
    protected $hidden = [
        'address',
        
    ];
}
