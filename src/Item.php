<?php


namespace Crafter\Composer;


class Item
{

    private $data = NULL;

    public function __construct(string $data = NULL)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * @param string $data
     */
    public function setData(string $data)
    {
        $this->data = $data;
    }



}