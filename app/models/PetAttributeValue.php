<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class PetAttributeValue extends Eloquent
{
  /**
   * Fillable attributes for mass assignment.
   *
   * @var array
   */
  protected $fillable = [
    'pet_id', 'pet_attribute_id', 'value'
  ];
}
