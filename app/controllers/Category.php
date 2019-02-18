<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * The Category controller
 * to the application.
 */

class Category extends Controller
{
    /**
     * The default constructor method.
     *
     * @return void
     */
    public function __construct()
    {
      Migration::migrate();
    }

    /**
     * The Category controller index method.
     *
     * @return void
     */
    public function index($category = 'all', $order='asc')
    {
      $items = Pet::where('id','>',0);
      if($category != 'all') {
        $items->where('item_type_id','=',ItemType::where('name','=',$category)->first()->id);
      }
      $items->orderBy('name',$order);
      $items = $items->get();
      foreach ($items as &$item) {
        $item->attributes = PetAttributeValue::leftJoin('pet_attributes','pet_attributes.id','=','pet_attribute_id')->where('pet_id','=',$item->id)->get()->toArray();
      }
      $this->view('main/index', array('page' => 'list', 'items' => $items->toArray(), 'pet_attributes' => PetAttribute::all()->toArray(), 'category' => $category, 'order' => $order));
    }

    /**
     * The Category controller filter method.
     * to get data as per attributes
     * @return void
     */
    public function filter($filter= '', $category = 'all')
    {
      $params = Utils::getInput();

      $items = PetAttribute::leftJoin('pet_attribute_values','pet_attribute_id','=','pet_attributes.id')
      ->leftJoin('pets','pets.id','=','pet_id');
      if($category != 'all') {
        $items->where('item_type_id','=',ItemType::where('name','=',$category)->first()->id);
      }
      $items->where('pet_attribute_id','=',$params['attribute_name_filter_id'])
        ->where('value','LIKE','%'.$params['attribute_name_filter_value'].'%');
      $items->orderBy('pets.name',$params['attribute_name_filter_order']);
      $items = $items->get();

      foreach ($items as &$item) {
        $item->attributes = PetAttributeValue::leftJoin('pet_attributes','pet_attributes.id','=','pet_attribute_id')->where('pet_id','=',$item->id)->get()->toArray();
      }
      $this->view('main/index', array('page' => 'list', 'items' => $items->toArray(), 'pet_attributes' => PetAttribute::all()->toArray(), 'category' => $category, 'order' => $params['attribute_name_filter_order'], 'filter' => $params));
    }
}
