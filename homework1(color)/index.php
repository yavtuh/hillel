<?php
class Color
{    /* Класс должен содержать три приватных свойства*/
    private int $red;
    private int $green;
    private int $blue;

    /* В сеттерах цветов проверить передаваемое значение на диапазон от 0 до 255. Если передаваемое число выходит за диапазон - выбросить исключение.*/
    private function set_red($red)
    {
        if (!is_numeric($red)) {
           echo "Пустое значение red";
        }else{
            if ( $red < 0 || $red > 255) {
                echo "Значение ".$red." red не входит в диапазон от 0 до 255";
            }else{
            $this->red = $red;   
            }
        }
    }
    private function set_green($green)
    {
        if (!is_numeric($green)) {
            echo "Пустое значение green";
         }else{
             if ( $green < 0 || $green > 255) {
                 echo "Значение ".$green." green не входит в диапазон от 0 до 255";
             }else{
             $this->green = $green;   
             }
         }
    }
    private function set_blue($blue)
    {
        if (!is_numeric($blue)) {
            echo "Пустое значение blue";
         }else{
             if ( $blue < 0 || $blue > 255) {
                 echo "Значение ".$blue." green не входит в диапазон от 0 до 255";
             }else{
             $this->blue = $blue;   
             }
         }
    }
    /*геттеры */
    public function getRed():int
    {
        return $this->red;
    }
    public function getGreen():int
    {
        return $this->green;
    }
    public function getBlue():int
    {
        return $this->blue;
    }
    /*Конструктор класса должен принимать параметры для каждого из цветов*/
    public function __construct(int $red, int $green, int $blue)
    {
        $this->set_red($red);
        $this->set_green($green);
        $this->set_blue($blue);
    }
    /* Реализовать метод equals, который будет сравнивать объекты цветов и возвращать true или false.*/
    public function equals (Color $value) :bool {
        if (($this->red == $value) && ($this->green == $value->getGreen()) && ($this->blue == $value->getBlue())) {
            return true;
        } 
        else{
            return false;
        }
    }
/* Реализовать метод mix, который будет цвета. Смешивать (вычислять среднее число для каждого свойства цвета).*/
    public function mix(Color $value): Color
    {
        $mixred = $value->getRed();
        $mixgreen = $value->getGreen();
        $mixblue = $value->getBlue();

        $mixred = intdiv($mixred + $this->getRed(),2);
        $mixgreen = intdiv($mixgreen + $this->getGreen(),2);
        $mixblue = intdiv($mixblue + $this->getBlue(),2);

        return (new Color ($mixred, $mixgreen, $mixblue));
    }
    /* Реализовать статический метод random, который будет возвращать объект RGB цвета с случайными значениями свойств red, green, blue.*/
    public static function rand(Color $value): Color
    {
        $randred = $value->getRed();
        $randgreen = $value->getGreen();
        $randblue = $value->getBlue();
        return (new Color ($randred, $randgreen, $randblue));
    }

}
$color = new Color(200, 200, 200);
$mixedColor = $color->mix(new Color(100, 100, 100));
$mixedColor->getRed(); // 150
$mixedColor->getGreen(); // 150
$mixedColor->getBlue(); // 150

echo "Реализовать метод equals, который будет сравнивать объекты цветов и возвращать true или false:<br>";
var_dump($color->equals(new Color(100, 100, 100)));
echo "<br>";
echo "Реализовать метод mix, который будет цвета. Смешивать (вычислять среднее число для каждого свойства цвета):<br>";
var_dump($mixedColor);
echo "<br>";
echo "Реализовать статический метод random, который будет возвращать объект RGB цвета с случайными значениями свойств red, green, blue:<br>";
var_dump($color->rand(new Color(rand(0, 255), rand(0, 255), rand(0, 255))));
