<?php

class JQueryColorPicker_HeadHelper extends App_ViewHelper_Abstract
{
    public function head()
    {
            $this->getView()->broker()->headScript()->append(
                $this->getView()->staticpath() . '/jquery-colorpicker/js/colorpicker.js', 'jquery' );
            
            $this->getView()->broker()->headLink()->append(
                $this->getView()->staticpath() . '/jquery-colorpicker/css/colorpicker.css' );
    }
}
