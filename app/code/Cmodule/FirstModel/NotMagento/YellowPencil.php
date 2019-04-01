<?php

namespace Cmodule\FirstModel\NotMagento;

class YellowPencil implements PencilInterface
{
    public function getPencilType(){
        return "Yellow pencil";
    }
}