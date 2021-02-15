<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminDataModel extends Model
{
    use HasFactory;
    protected $table = "admin_data_models";

    protected $fillable = [
        'fullname', 'email', 'password', 'proimage', 'active_status', 'block_status'
    ];
}
