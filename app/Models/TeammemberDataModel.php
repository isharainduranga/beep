<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeammemberDataModel extends Model
{
    use HasFactory;
    protected $table = "teammember_data_models";
    
    protected $fillable = [
        'fullname', 'email', 'password', 'proimage', 'active_status', 'block_status'
    ];
}
