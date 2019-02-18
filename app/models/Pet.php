<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Pet extends Eloquent
{
  /**
   * Fillable attributes for mass assignment.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'description', 'pet_type_id', 'item_type_id', 'is_toy'
  ];
}
