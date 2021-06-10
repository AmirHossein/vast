<?php

namespace ahhp\Vast\Nodes;

class IconClickFallbackImages extends Node {
    public function __construct() {
        parent::__construct("IconClickFallbackImages");
    }public function addIconClickFallbackImage(IconClickFallbackImage $iconClickFallbackImage) {
        $this->appendChild($iconClickFallbackImage);
        return $this;
    }
}