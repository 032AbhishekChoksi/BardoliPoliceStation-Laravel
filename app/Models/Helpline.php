<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Helpline extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "helplines";
    protected $primaryKey = "helpline_id";
}
