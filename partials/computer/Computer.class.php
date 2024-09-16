<?php

class Computer {
    public $gpu;
    public $cpu;
    public $ram;
    public $case;
    public $storage;
    public $psu;
    public $mainboard;

    public function __construct($gpu = null, $cpu = null, $ram = null, $case = null, $storage = null, $psu = null, $mainboard = null) {
        $this->gpu = $gpu;
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->case = $case;
        $this->storage = $storage;
        $this->psu = $psu;
        $this->mainboard = $mainboard;
    }

    public function setGpu($gpu) {
        $this->gpu = $gpu;
        return $this;
    }

    public function getGpu() {
        return $this->gpu;
    }


    public function setCpu($cpu) {
        $this->cpu = $cpu;
        return $this;
    }

    public function getCpu() {
        return $this->cpu;
    }

    public function setRam($ram) {
        $this->ram = $ram;
        return $this;
    }

    public function getRam() {
        return $this->ram;
    }

    public function setCase($case) {
        $this->case = $case;
        return $this;
    }

    public function getCase() {
        return $this->case;
    }

    public function setStorage($storage) {
        $this->storage = $storage;
        return $this;
    }

    public function getStorage() {
        return $this->storage;
    }

    public function setPsu($psu) {
        $this->psu = $psu;
        return $this;
    }

    public function getPsu() {
        return $this->psu;
    }

    public function setMainboard($mainboard) {
        $this->mainboard = $mainboard;
        return $this;
    }

    public function getMainboard() {
        return $this->mainboard;
    }

    public function renderComputerComponents() {
        $components = [
            'Mainboard' => $this->mainboard,
            'CPU' => $this->cpu,
            'GPU' => $this->gpu,
            'RAM' => $this->ram,
            'PSU' => $this->psu,
            'Storage' => $this->storage,
            'Case' => $this->case,
        ];

        $render = <<<HTML
            <ul>
        HTML;

        foreach ($components as $key => $component) {
            if (!$component) {
                continue;
            }

            $keyLower = strtolower($key);
            $render .= <<<HTML
                <li>
                    <img class="icon-computer-component" src="/asset/img/icons/computer-components/{$keyLower}.png">
                    <b>$key</b>: {$component->getPrefix()} {$component->getBrand()} <a href="{$component->getLink()}">{$component->getName()}</a>
                </li>
            HTML;
        }

        $render .= <<<HTML
                <span style="color: gray; font-size: 14px; margin-top: 24px; font-style: italic;">
                    <a style="color: gray;" target="_blank" href="https://icons8.com/icon/set/computer-hardware/material-outlined">Computer Hardware Icons</a>
                    by 
                    <a style="color: gray;" target="_blank" href="https://icons8.com">Icons8</a>
                </span>
            </ul>
        HTML;
        
        return $render;
    }
}