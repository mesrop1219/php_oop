<?php

trait HasMenu
{
    public function get_menu(): array
    {
        return $this->items;
    }
}

class Matchs
{
    private array $items;

    use HasMenu;

    public function __construct()
    {
        $this->items = [
            "Beer",
            "Nachos",
            "Burger"
        ];
    }

    public function count(): string
    {
        return "1 - 0";
    }

}

class Lab
{
    public string $lab_name;
    private array $items;

    use HasMenu;
    public function __construct(string $lab_name)
    {
        $this->items = ["Beer", "Burger"];
        $this->lab_name = $lab_name;
    }
}


$matchs = new Matchs();
$lab = new Lab("Synopsys");

var_dump($matchs->get_menu());
print_r($lab->get_menu());