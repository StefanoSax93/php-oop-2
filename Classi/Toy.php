<?php
require_once __DIR__ . '/Products.php';

class Toy extends Products {

    protected $type = 'giocattolo';
    protected $material;
    protected $color;
    protected $weight;

    public function __construct($_name, $_price, $_material, $_color, $_weight) {
        parent::__construct($_name, $_price);
        $this->setMaterial($_material);
        $this->setColor($_color);
        $this->setWeight($_weight);
    }

    public function getType()
    {
        return $this->type;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }
}

?>