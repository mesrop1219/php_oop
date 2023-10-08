<?php

abstract class Computer
{
    private string $cpu;
    private string $ssd_version;

    abstract public function set_params(string $cpu, string $ssd): void;
}

class HP extends Computer
{
    private string $cpu;
    private string $ssd_version;

    public function set_params(string $cpu, string $ssd): void
    {
        $this->cpu = $cpu;
        $this->ssd_version = $ssd;
    }
}

$hp_notebook = new HP();
$hp_notebook->set_params("Intel I7", "Kingston");

print_r($hp_notebook);