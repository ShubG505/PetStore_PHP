<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class PetAttribute extends Eloquent
{
  /**
   * Fillable attributes for mass assignment.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'label', 'type', 'is_mandatory'
  ];
}
