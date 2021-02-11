<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{

    protected $table = 'labels';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'label',
      'desc'
    ];
}
