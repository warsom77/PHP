<?php

namespace interfaces;

interface Renderable extends Summarizable
{
    public function render(): string;
}