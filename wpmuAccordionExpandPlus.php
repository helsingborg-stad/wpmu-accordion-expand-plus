<?php

/*
Plugin Name:    WPMU Accordion Expand Plus
Description:    Replaces the default accordion icon with plus-icon.
Version:        1.0
Author:         Sebastian Thulin
*/

namespace WPMUAccordionExpandPlus;

class WPMUAccordionExpandPlus
{
    public function __construct()
    {
        add_filter('ComponentLibrary/Component/Accordion__item/Data', array($this, 'replaceIcon'));
    }

    public function replaceIcon($data)
    {
        if (isset($data['icon'])) {
            $data['icon'] = "add_circle";
        }

        return $data;
    }
}

new \WPMUAccordionExpandPlus\WPMUAccordionExpandPlus();
