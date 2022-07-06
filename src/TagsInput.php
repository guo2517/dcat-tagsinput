<?php

namespace Fitop\TagsInput;

use Dcat\Admin\Form\Field;

class TagsInput extends Field
{
    protected $view = 'tags-input::index';

    public function render()
    {
        $this->defaultAttribute('name', $this->getElementName())
            ->defaultAttribute('value', $this->value())
            ->defaultAttribute('class', 'form-control '.$this->getElementClassString())
            ->defaultAttribute('placeholder', $this->placeholder());

        $this->script = "$(\"{$this->getElementClassSelector()} \").tagsinput();";
        return parent::render();
    }
}
