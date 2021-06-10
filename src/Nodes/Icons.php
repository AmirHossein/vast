<?php

namespace ahhp\Vast\Nodes;

class Icons extends Node {
    public function __construct() {
        parent::__construct("Icons");
    }public function addIcon(Icon $icon) {
        $this->appendChild($icon);
        return $this;
    }
}