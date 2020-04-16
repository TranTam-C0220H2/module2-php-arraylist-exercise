<?php


class MyList
{
    const  DEFAULT_CAPACITY = 10;
    protected $objectElement;
    protected $size;

    public function __construct($objectElement=[])
    {
        $this->size = 0;
        if (is_array($objectElement)) {
            $this->objectElement = $objectElement;
        } else {
            $this->objectElement = array();
        }
    }

    public function get($index)
    {
        return $this->objectElement[$index];
    }

    public function add($object)
    {
        array_push($this->objectElement, $object);
        $this->size++;
        return $this->objectElement;
    }

    public function remove($index)
    {
        array_splice($this->objectElement, $index, 1, null);
        $this->size--;
        return $this->objectElement;
    }

    public function size()
    {
        return $this->size;
    }

    public function insertElement($index, $element)
    {
        array_splice($this->objectElement, $index, 0, $element);
        $this->size++;
        return $this->objectElement;
    }

    public function contains($element)
    {
        return in_array($element, $this->objectElement);
    }

    public function indexOf($element)
    {
        foreach ($this->objectElement as $index => $value) {
            if ($value == $element) {
                return $index;
            }
        }
        return -1;
    }

    public function clear()
    {
        foreach ($this->objectElement as $index => $value) {
            if ($value == '') {
                array_splice($this->objectElement, $index, 1, null);
                $this->size--;
            }
        }
        return $this->objectElement;
    }

}
