<?php

namespace Crafter\Composer;


class Container implements \Iterator
{
   private $position = 0;

   private $data = [];

    public function current()
    {
        return $this->data[$this->position];
    }

    public function next()
    {
        $this->position++;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        return isset($this->data[$this->position]);
    }

    public function rewind()
    {
        $this->position = 0;
    }


    public function add(string $data = NULL)
   {
       $item = new Item($data);
       array_push($this->data,$item);

   }

   public function count()
   {
       return $this->position;
   }

}