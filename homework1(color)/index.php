<?php



class color   // Object
{
    // Класс должен содержать три приватных свойства:

    private $red;
    private $green;
    private $blue;

    // Конструктор класса должен принимать параметры для каждого из цветов.
    // Constructer
    function __construct($red, $green, $blue)
    {

        $this->set_value_red($red);
        $this->set_value_green($green);
        $this->set_value_blue($blue);
    }

    // Для всех свойств создать публичные геттеры и приватные сеттеры.

    // В сеттерах цветов проверить передаваемое значение на диапазон от 0 до 255. Если передаваемое число выходит за диапазон - выбросить исключение.
    // setters
    private function set_value_red($red)
    {
        if (!is_numeric($red)) {
            throw new InvalidArgumentException("NOT A NUMBER");
        }
        if ($red > 255 or $red < 0) {
            throw new InvalidArgumentException("Error Processing Request. Value must be between 0 and 255");
        }
        $this->red = $red;   // dont need else{} because throw is kill
    }

    private function set_value_green($green)
    {
        if (!is_numeric($green)) {
            throw new InvalidArgumentException("NOT A NUMBER");
        }
        if ($green > 255 or $green < 0) {
            throw new InvalidArgumentException("Error Processing Request. Value must be between 0 and 255");
        }
        $this->green = $green;
    }

    private function set_value_blue($blue)
    {
        if (!is_numeric($blue)) {
            throw new InvalidArgumentException("NOT A NUMBER");
        }
        if ($blue > 255 or $blue < 0) {
            throw new InvalidArgumentException("Error Processing Request. Value must be between 0 and 255");
        }
        $this->blue = $blue;
    }

    // getters
    public function get_red()
    {
        return $this->red;
    }

    public function get_green()
    {
        return $this->green;
    }

    public function get_blue()
    {
        return $this->blue;
    }

    // Реализовать метод equals, который будет сравнивать объекты цветов и возвращать true или false.
    // da fuck am I suppose to do? like this?
    // Equals
    public function equals($color1, $color2)
    {
        if ($color1->get_red() == $color2->get_red() and $color1->get_green() == $color2->get_green() and $color1->get_blue() == $color2->get_blue()) {
            return true;
        } else {
            return false;
        }
    }

    // Реализовать статический метод random, который будет возвращать объект RGB цвета с случайными значениями свойств red, green, blue.
    // ran_col method
    public static function ran_col($some_color)
    {
        $some_color->set_value_red(rand(0, 255));
        $some_color->set_value_green(rand(0, 255));
        $some_color->set_value_blue(rand(0, 255));
    }

    // Реализовать метод mix, который будет цвета. Смешивать (вычислять среднее число для каждого свойства цвета).
    // MIX ME DADY method
    public function mix_me_dady($color1, $color2)
    {
        $new_color[] = round(($color1->get_red() + $color2->get_red()) / 2);
        $new_color[] = round(($color1->get_green() + $color2->get_green()) / 2);
        $new_color[] = round(($color1->get_blue() + $color2->get_blue()) / 2);

        return ($new_color);
    }
}