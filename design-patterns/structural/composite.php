<?php

// To treat a group of objects the same way as a single instance of the object.

interface Renderable
{
    public function render(): string;
}

class Form implements Renderable
{
    private array $elements;

    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        return $formCode . '</form>';
    }

    public function addElement(Renderable $element)
    {
        $this->elements[] = $element;
    }
}

class InputElement implements Renderable
{
    public function render(): string
    {
        return '<input type="text" />';
    }
}

class TextElement implements Renderable
{
    public function __construct(string $text)
    {
    }

    public function render(): string
    {
        return $this->text;
    }
}

$form = new Form();
$form->addElement(new TextElement('Email:'));
$form->addElement(new InputElement());
$embed = new Form();
$embed->addElement(new TextElement('Password:'));
$embed->addElement(new InputElement());
$form->addElement($embed);

// This is just an example, in a real world scenario it is important 
// to remember that web browsers do not currently support nested forms

echo $form->render();
