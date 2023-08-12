<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembersModel extends Model
{
    use HasFactory;

    protected $table = 'members';

    protected $fillable = [
   'name',
   'number',
   'joined_at',
   'role',
    ];
}
