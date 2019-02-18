<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class ItemType extends Eloquent
{

  /**
   * Fillable attributes for mass assignment.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'description'
  ];
}
