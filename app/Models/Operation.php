<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $fillable = [
      'from_entity_id',
      'to_entity_id ',
      'quantity',
      'created_by',
      'updated_by',
    ];
}
