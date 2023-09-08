# PHP Object

Given an object (Foo in the sample), write a method such that, when executing "echo $foo", it prints its properties.

## Code

```php
<?php
class Foo
{
    /** @var string **/
    private $sHelloString = 'Hello world!';
    
    /** @var array **/
    public $aArray = [];

    public function printString(): void
    {
        echo $this->sHelloString; 
    }
    
    public function __toString()
    {
        $properties = get_object_vars($this);
        $output = "Foo Object Properties:\n";
        
        foreach ($properties as $name => $value) {
            $output .= "$name: $value\n";
        }
        
        return $output;
    }
}

$foo = new Foo();
echo $foo;
```

##Usage
1. Create an instance of the Foo class:
```php
$index = new index();
```

2. You can call the printString method to print the sHelloString property:

```php
$index->printString(); // Outputs: Hello world!
```

3. When you echo an instance of the Foo class, the __toString method will be automatically called, and it will print the object's properties:

```bash
echo $index;
```
Output:

```bash
Foo Object Properties:
sHelloString: Hello world!
aArray: Array
```