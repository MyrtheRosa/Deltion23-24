<?php


class rekenen
{
    public $round; //property
    public function __construct($round = 2)
    {
        $this->round = $round;
    }
    //functie binnen een class is een method

    public function somuitvoeren($x, int $y = 555) //parameters
    {
        $som = $x + $y;
        return round($som, $this->round);

        //NOOIT echo's hier doen! ALTIJD return
    }

    private function productuitvoeren($x, $y)
    {
        return $x * $y;
    }

}

$y = 12;
$obj = new rekenen(2);
$obj2 = new rekenen(3);
$waarde = $obj->somuitvoeren(20.234, $y);

?>
<html>

<h1> qwerty</h1>
<?php echo $waarde; ?> <br>
<?php echo $obj2->round; ?>

</html>