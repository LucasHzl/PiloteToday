<?php

trait Response
{
    public function render($template, $data=[]) {
        if(!empty($data)) {
            foreach ($data as $key => $value) {
                ${$key} = $value;
            }
        }

        require_once __DIR__.'/../Templates/'.$template.'.php';
    }
}