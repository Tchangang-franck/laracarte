<?php

namespace App\Models;

use App\Scopes\DateScopable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use DateScopable;
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'message'
    ];
}
