<?php

class Seeder extends Controller {

    /**
     * Database seeder for item_types table.
     * @var void
    */
    static function seedItemType() {


      ItemType::create(array(
        'name' => 'Dog',
        'description' => 'The domestic dog (Canis lupus familiaris when considered a subspecies of the wolf or Canis familiaris when considered a distinct species) is a member of the genus Canis (canines), which forms part of the wolf-like canids, and is the most widely abundant terrestrial carnivore. The dog and the extant gray wolf are sister taxa as modern wolves are not closely related to the wolves that were first domesticated, which implies that the direct ancestor of the dog is extinct. The dog was the first species to be domesticated and has been selectively bred over millennia for various behaviors, sensory capabilities, and physical attributes.',
      ));

      ItemType::create(array(
        'name' => 'Cat',
        'description' => 'The cat or domestic cat (Felis catus) is a small carnivorous mammal. It is the only domesticated species in the family Felidae. The cat is either a house cat, kept as a pet; or a feral cat, freely ranging and avoiding human contact. A house cat is valued by humans for companionship and for its ability to hunt rodents. About 60 cat breeds are recognized by various cat registries.',
      ));

      ItemType::create(array(
        'name' => 'Reptile',
        'description' => 'Reptiles are tetrapod animals in the class Reptilia, comprising today\'s turtles, crocodilians, snakes, amphisbaenians, lizards, tuatara, and their extinct relatives. The study of these traditional reptile orders, historically combined with that of modern amphibians, is called herpetology.',
      ));

      ItemType::create(array(
        'name' => 'Toy',
        'description' => 'A toy is an item that is used in play, especially one designed for such use. Playing with toys can be an enjoyable means of training young children for life in society. Different materials like wood, clay, paper, and plastic are used to make toys.',
      ));

      ItemType::create(array(
        'name' => 'Carrier',
        'description' => 'From large crates to small carriers suitable for puppies and toy breeds, we make it easy to travel with your pet. Dog carriers and enclosures create a cozy place for your pet at main or on the go.',
      ));
    }

    /**
     * Database seeder for pet_types table.
     * @var void
     */
    static function seedPetType() {

      PetType::create(array(
        'name' => 'Hounds',
        'description' => 'A hound is a type of hunting dog used by hunters to track or chase prey.',
        'item_type_id' => 1
      ));

      PetType::create(array(
        'name' => 'Mutts',
        'description' => 'Mutts is a daily comic strip created by Patrick McDonnell in 1994. Distributed by King Features Syndicate, it follows the adventures of Earl, a dog, and Mooch, a cat. Earl and Mooch interact with each other, their human owners, and also the animals around their neighborhood.',
        'item_type_id' => 1
      ));

      PetType::create(array(
        'name' => 'Akita',
        'description' => 'The Akita is distinctive large and powerful dog with an aloof attitude.  The Akita can be territorial and the dog is not usually welcoming of strangers.',
        'item_type_id' => 1
      ));

      PetType::create(array(
        'name' => 'Siamese',
        'description' => 'Siamese Cats are incredibly social, intelligent and vocal—they’ll talk to anyone who wants to listen, and even those who don’t.',
        'item_type_id' => 2
      ));

      PetType::create(array(
        'name' => 'Mutts',
        'description' => 'Mutts is a daily comic strip created by Patrick McDonnell in 1994. Distributed by King Features Syndicate, it follows the adventures of Earl, a dog, and Mooch, a cat. Earl and Mooch interact with each other, their human owners, and also the animals around their neighborhood.',
        'item_type_id' => 2
      ));

      PetType::create(array(
        'name' => 'Korat',
        'description' => 'A rare Thai breed, the Korat is an affectionate constant companion that is gentle and good with children. Though this cat has an action-packed personality, the Korat moves slowly and cautiously and does not like sudden, loud noises.',
        'item_type_id' => 2
      ));

      PetType::create(array(
        'name' => 'Calico',
        'description' => 'Calico cats are domestic cats with a spotted or particolored coat that is predominantly white, with patches of two other colors. Outside North America, the pattern is more usually called tortoiseshell and white. In the province of Quebec, Canada, they are sometimes called chatte d\'Espagne.',
        'item_type_id' => 2
      ));

      PetType::create(array(
        'name' => 'Turtles',
        'description' => 'Turtles are diapsids of the order Testudines characterized by a special bony or cartilaginous shell developed from their ribs and acting as a shield.',
        'item_type_id' => 3
      ));

      PetType::create(array(
        'name' => 'Gecko',
        'description' => 'This gecko species is arboreal and require an enclosure that is taller than it is long, which makes it an easy pet for someone that might not have a lot of space for an enclosure.',
        'item_type_id' => 3
      ));

      PetType::create(array(
        'name' => 'Dragon',
        'description' => 'Bigger than geckos, and smaller than an iguana, this lizard species is a wonderful size for pet lovers of all ages.',
        'item_type_id' => 3
      ));

      PetType::create(array(
        'name' => 'Ball',
        'description' => 'Rubber Ball for Dogs or Cats',
        'item_type_id' => 4
      ));

      PetType::create(array(
        'name' => 'Rubber Bones',
        'description' => 'Rubber Bones for Dogs',
        'item_type_id' => 4
      ));

      PetType::create(array(
        'name' => 'Rubber Mice',
        'description' => 'Rubber Mice soft toy for Cats',
        'item_type_id' => 4
      ));

      PetType::create(array(
        'name' => 'Savic Trotter',
        'description' => 'Savic Trotter 1 - Pet Carrier - Atlantic Blue',
        'item_type_id' => 5
      ));

      PetType::create(array(
        'name' => 'Doggies Home',
        'description' => 'Dog home build of wooden',
        'item_type_id' => 5
      ));

      PetType::create(array(
        'name' => 'Tomtopp Breathable',
        'description' => 'Tomtopp Breathable for Dogs and Cats',
        'item_type_id' => 5
      ));
    }

    /**
     * Database seeder for pet_attributes table.
     * @var void
     */
    static function seedPetAttribute() {

      PetAttribute::create(array(
        'name' => 'color',
        'label' => 'Color (Optional)',
        'type' => 'text',
        'is_mandatory' => false,
      ));

      PetAttribute::create(array(
        'name' => 'lifespan',
        'label' => 'Lifespan',
        'type' => 'number',
        'is_mandatory' => true,
      ));

      PetAttribute::create(array(
        'name' => 'age',
        'label' => 'Age',
        'type' => 'number',
        'is_mandatory' => true,
      ));

      PetAttribute::create(array(
        'name' => 'price',
        'label' => 'Price',
        'type' => 'number',
        'is_mandatory' => true,
      ));

      PetAttribute::create(array(
        'name' => 'offer',
        'label' => 'Offer Price (Optional)',
        'type' => 'number',
        'is_mandatory' => false,
      ));
    }
}