<?php

namespace DataStore\Chapter2\NotMagento;

class YellowPencil implements PencilInterface   {
    public function getPencilType(){
        return "Yellow Pencil";
    }
}