<?php

/*
    Inheritance is the second of main principles in OOP. Inheritance is the process when we can extend second class
    from first class.
*/

class Worker
{
    protected string $name;
    protected string $lastname;
    protected int $age;

    public function __construct(string $name, string $lastname, int $age)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
    }
}

class Programmer extends Worker
{
    private string $lang;
    public function __construct(string $name, string $lastname, int $age, string $lang)
    {
        parent::__construct($name, $lastname, $age);
        $this->lang = $lang;
    }

    public  function get_programmer_info()
    {
        return [
            "name" => $this->name,
            "lastname" => $this->lastname,
            "age" => $this->age,
            "lang" => $this->lang,
        ];
    }
}

$php_programmer = new Programmer("Mesrop", "Arakelyan", 19, "PHP");
print_r($php_programmer->get_programmer_info());