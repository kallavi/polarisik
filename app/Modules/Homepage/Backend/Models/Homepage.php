<?php

namespace App\Modules\Homepage\Backend\Models;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
      protected $fillable = [
            'sort',
            'key',
            'value'
      ];
}
