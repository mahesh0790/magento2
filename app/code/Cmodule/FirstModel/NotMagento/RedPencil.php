<?php

namespace Cmodule\FirstModel\NotMagento;

class RedPencil implements PencilInterface
{
    public function getPencilType(){
        return "Red pencil";
    }
}