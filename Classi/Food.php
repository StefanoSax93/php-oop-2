<?php 

require_once __DIR__ . '/Products.php';

class Food extends Products {

        protected $type='cibo';
        
        public function getType()
        {
                return $this->type;
        }

}

?>