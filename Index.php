<?php
require_once 'Electronics.php';
require_once 'Food.php';
require_once 'Clothe.php';

$electronicItem = new Electronics("Smartphone", 799, "Electronics", 2);
$foodItem = new Food("Milk", 5, "Dairy", "2025-01-10");
$clotheItem = new Clothe("T-shirt", 25, "Clothing", "L", "Cotton");

echo $electronicItem->getDetails() . "<br>";
echo $foodItem->getDetails() . "<br>";
echo $clotheItem->getDetails() . "<br>";
?>


product


<?php
class Product {
    protected $name;
    protected $price;
    protected $category;

    public function __construct($name, $price, $category) {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function getDetails() {
        return "Product: $this->name, Price: $$this->price, Category: $this->category";
    }
}
?>



electronics

<?php
require_once 'Product.php';

class Electronics extends Product {
    private $warrantyPeriod;

    public function __construct($name, $price, $category, $warrantyPeriod) {
        parent::__construct($name, $price, $category);
        $this->warrantyPeriod = $warrantyPeriod;
    }

    public function getDetails() {
        return parent::getDetails() . ", Warranty Period: $this->warrantyPeriod years";
    }
}
?>



food

<?php
require_once 'Product.php';

class Food extends Product {
    private $expirationDate;

    public function __construct($name, $price, $category, $expirationDate) {
        parent::__construct($name, $price, $category);
        $this->expirationDate = $expirationDate;
    }

    public function getDetails() {
        return parent::getDetails() . ", Expiration Date: $this->expirationDate";
    }
}
?>

clothes

<?php
require_once 'Product.php';

class Clothe extends Product {
    private $size;
    private $material;

    public function __construct($name, $price, $category, $size, $material) {
        parent::__construct($name, $price, $category);
        $this->size = $size;
        $this->material = $material;
    }

    public function getDetails() {
        return parent::getDetails() . ", Size: $this->size, Material: $this->material";
    }
}
?>
