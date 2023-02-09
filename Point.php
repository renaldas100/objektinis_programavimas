<?php


class Point{
    private $x;
    private $y;


    function __construct($x,$y){
        $this->x=$x;
        $this->y=$y;
    }


    /** Skaičiuoja atstumą nuo pradžios taško (0,0) iki taško
     * @return float
     */
    public function distanceFromOrigin(){

        return sqrt($this->x**2+$this->y**2);
    }



    /** Perstumia tašką per dx ir dy vienetus
     * @param $dx - x ašies koordinatė
     * @param $dy - y ašies koordinatė
     * @return void
     */
    public function translate($dx = 0,$dy = 0)
    {
        $this->x+=$dx;
        $this->y+=$dy;
    }



    /** Atvaizduoja taško vietą formatu [x;y]
     * @return string
     */
    public function __toString(): string
    {
        return "[$this->x, $this->y]";
    }


    /** Grąžina atstumą iki taško p nuo esamo taško
     * @param $x1 - x ašies koordinatė
     * @param $y1 - y ašies koordinatė
     * @return float
     */
    public function distance($x1,$y1){

        return sqrt(($this->x-$x1)**2+($this->y-$y1)**2);
    }


    /** Pakeičia esamo taško koordinates
     * @param int $x - x ašies koordinatė
     * @param int $y - y ašies koordinatė
     * @return void
     */
    public function setLocation(int $x, int $y){
        $this->setX($x);
        $this->setY($y);

    }



    /** Gaunama x reikšmė
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }


    /** Nustatoma x reikšmė
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }


    /** Gaunama y reikšmė
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }


    /** Nustatoma y reikšmė
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }


}


