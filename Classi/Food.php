<?php 

require_once __DIR__ . '/Products.php';

class Food extends Products {

        protected $type='food';
        
        public function getType()
        {
                return $this->type;
        }

}

?>