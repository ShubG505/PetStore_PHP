<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class PetType extends Eloquent
{
  /**
   * Fillable attributes for mass assignment.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'description', 'item_type_id'
  ];
}
