<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

  //  protected $fillable = ["title", "body"];//is allowed to be mass assigned. u can only mass assign on these fields

    protected $guarded = []; //is not allowed to be mass assigned. U can mass assign on any field
}
