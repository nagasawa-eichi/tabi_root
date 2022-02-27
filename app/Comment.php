<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
          'root_id',
          'destination_name',
          'root_comment',
          'destination_link',
        ]; 
}
