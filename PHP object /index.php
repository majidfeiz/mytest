<?php
class index
{
    /** @var string **/
    private $sHelloString = 'Hello world!';

    /** @var array **/
    public $aArray = [];

    public function printString(): void
    {
        echo $this->helloString;
    }

    public function __toString()
    {
        $properties= get_object_vars($this);
        $output="Foo Object Properties : \n";

        foreach($properties as $name => $value)
        {
            $output.="$name : $value \n";
        }

        return $output;
    }

}

$index = new index();
echo $index;