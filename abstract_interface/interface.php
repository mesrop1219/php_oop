<?php

interface Work
{
    public function write(mixed $data): void;
    public function read(): mixed;
}

class Worker implements Work
{
    private mixed $data;
    public  string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function write(mixed $data): void
    {
        $this->data = $data;
    }

    public function read(): mixed
    {
        return $this->data;
    }
}

$programmer = new Worker("Mesrop Arakelyan");
$programmer->write("My age is 19");
echo  $programmer->read();