<?php
class Add {
    private $num1;
    private $num2;
    
    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    
    public function addNumbers() {
        return $this->num1 + $this->num2;
    }
}
$addition = new Add(5, 6);
$result = $addition->addNumbers();
echo "Result: " . $result;  // Output: Result: 11
?>
