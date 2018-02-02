<?php

namespace Crafter\Composer;


class Container implements \Iterator
{
   private $position = 0;

   private $data = [];

    /**
     * current
     * @return mixed
     */
    public function current()
    {
        return $this->data[$this->position];
    }

    /**
     * next
     */
    public function next()
    {
        $this->position++;
    }

    /**
     * key
     * @return int
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * valid
     * @return bool
     */
    public function valid()
    {
        return isset($this->data[$this->position]);
    }

    /**
     * rewind
     */
    public function rewind()
    {
        $this->position = 0;
    }


    /**
     * add data to array data
     * @param string|NULL $data
     */
    public function add(string $data = NULL)
   {
       $item = new Item($data);
       array_push($this->data,$item);

   }

    /**
     * Reverse data
     */
   public function reverse()
   {
       $this->data =  array_reverse($this->data);
   }

    /**
     * count
     * @return int
     */
   public function count()
   {
       return $this->position;
   }

}