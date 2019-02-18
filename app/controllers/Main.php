<?php

use Illuminate\Database\Capsule\Manager as Capsule;
/**
 * The default main controller, called when no controller/method has been passed
 * to the application.
 */

class Main extends Controller
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
     * The default controller index method.
     *
     * @return void
     */
    public function index($page = 'list', $order = 'asc')
    {
      $items = Pet::orderBy('name', $order)->get();
      foreach ($items as &$item) {
        $item->attributes = PetAttributeValue::leftJoin('pet_attributes','pet_attributes.id','=','pet_attribute_id')->where('pet_id','=',$item->id)->get()->toArray();
      }
      $this->view('main/index', array('page' => 'list', 'items' => $items->toArray(),'pet_attributes' => PetAttribute::all()->toArray(), 'category' => 'all', 'order' => $order));
    }

    /**
     * The default controller add method.
     *
     * @return void
     */
    public function add($page = 'add')
    {
      $this->view('main/add', array('page' => $page, 'item_types' => ItemType::all()->toArray(), 'pet_attributes' => PetAttribute::all()->toArray(), 'msg' => ''));
    }

    /**
     * The default controller pettypes method.
     * REST API only
     * @return JsonArray
     */
    public function pettypes($page = 'pettypes', $itemTypeId = 0)
    {
      print json_encode(PetType::where('item_type_id','=',$itemTypeId)->get()->toArray());
    }

    /**
     * The default controller saveitem method.
     * @return void
     */
    public function saveitem($page = 'saveitem')
    {
      $msg = 'Some error occurred while saving it.';
      $params = Utils::getInput();
      $pet = new Pet;
      $pet->name = $params['name'];
      $pet->description = $params['description'];
      $pet->pet_type_id = $params['pet_type_id'];
      $pet->item_type_id = $params['item_type_id'];
      $pet->is_toy = isset($params['is_toy']) ? 1 : 0;
      $pet->save();

      if(isset($params['pet_attribute']) && is_array($params['pet_attribute'])) {
        foreach ($params['pet_attribute'] as $attribute_id => $val) {
          $petAttributeValue = new PetAttributeValue;
          $petAttributeValue->pet_id = $pet->id;
          $petAttributeValue->pet_attribute_id = $attribute_id;
          $petAttributeValue->value = $val;
          $petAttributeValue->save();
        }
      }

      if($pet->id > 0) {
        $msg = 'Created Successfully!';
      }

      $this->view('main/add', array('page' => $page, 'item_types' => ItemType::all()->toArray(), 'pet_attributes' => PetAttribute::all()->toArray(), 'msg' => $msg));
    }
}
