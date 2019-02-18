<?php

use Illuminate\Database\Capsule\Manager as Capsule;
/**
 * The default main controller, called when no controller/method has been passed
 * to the application.
 */

class Migration extends Controller
{
    /**
     * Generating all tables
     *
     * @return void
     */
    static function migrate()
    {

      if(!Capsule::schema()->hasTable('item_types')) {
        Capsule::schema()->create('item_types', function ($table) {
          $table->increments('id');
          $table->string('name', 255);
          $table->text('description');
          $table->timestamp('created_at')->nullable();
          $table->timestamp('updated_at')->nullable();
        });
        Seeder::seedItemType();
      }

      if(!Capsule::schema()->hasTable('pet_types')) {
        Capsule::schema()->create('pet_types', function ($table) {
          $table->increments('id');
          $table->string('name', 255);
          $table->text('description');
          $table->integer('item_type_id');
          $table->timestamp('created_at')->nullable();
          $table->timestamp('updated_at')->nullable();
        });
        Seeder::seedPetType();
      }

      if(!Capsule::schema()->hasTable('pets')) {
        Capsule::schema()->create('pets', function ($table) {
          $table->increments('id');
          $table->string('name', 255);
          $table->text('description');
          $table->integer('pet_type_id');
          $table->integer('item_type_id');
          $table->boolean('is_toy')->default(false);
          $table->timestamp('created_at')->nullable();
          $table->timestamp('updated_at')->nullable();
        });
      }

      if(!Capsule::schema()->hasTable('pet_attributes')) {
        Capsule::schema()->create('pet_attributes', function ($table) {
          $table->increments('id');
          $table->string('name', 255);
          $table->string('label', 255);
          $table->string('type', 50);
          $table->boolean('is_mandatory')->default(false);
          $table->timestamp('created_at')->nullable();
          $table->timestamp('updated_at')->nullable();
        });
        Seeder::seedPetAttribute();
      }

      if(!Capsule::schema()->hasTable('pet_attribute_values')) {
        Capsule::schema()->create('pet_attribute_values', function ($table) {
          $table->increments('id');
          $table->integer('pet_attribute_id');
          $table->integer('pet_id');
          $table->text('value');
          $table->timestamp('created_at')->nullable();
          $table->timestamp('updated_at')->nullable();
        });
      }
    }
}
