<?php

class Computer {
    public ?ComputerComponent $gpu;
    public ?ComputerComponent $cpu;
    public ?ComputerComponent $ram;
    public ?ComputerComponent $case;
    public ?ComputerComponent $storage;
    public ?ComputerComponent $psu;
    public ?ComputerComponent $mainboard;

    public function __construct(
            ?ComputerComponent $gpu,
            ?ComputerComponent $cpu,
            ?ComputerComponent $ram,
            ?ComputerComponent $case,
            ?ComputerComponent $storage,
            ?ComputerComponent $psu,
            ?ComputerComponent $mainboard) {
        $this->gpu = $gpu;
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->case = $case;
        $this->storage = $storage;
        $this->psu = $psu;
        $this->mainboard = $mainboard;
    }

    public function setGpu($gpu): static {
        $this->gpu = $gpu;
        return $this;
    }

    public function getGpu(): ComputerComponent {
        return $this->gpu;
    }


    public function setCpu($cpu): static {
        $this->cpu = $cpu;
        return $this;
    }

    public function getCpu(): ComputerComponent {
        return $this->cpu;
    }

    public function setRam($ram): static {
        $this->ram = $ram;
        return $this;
    }

    public function getRam(): ComputerComponent {
        return $this->ram;
    }

    public function setCase($case): static {
        $this->case = $case;
        return $this;
    }

    public function getCase(): ComputerComponent {
        return $this->case;
    }

    public function setStorage($storage): static {
        $this->storage = $storage;
        return $this;
    }

    public function getStorage(): ComputerComponent {
        return $this->storage;
    }

    public function setPsu($psu): static {
        $this->psu = $psu;
        return $this;
    }

    public function getPsu(): ComputerComponent {
        return $this->psu;
    }

    public function setMainboard($mainboard): static {
        $this->mainboard = $mainboard;
        return $this;
    }

    public function getMainboard(): ComputerComponent {
        return $this->mainboard;
    }

    public function renderComputerComponents(): string {
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