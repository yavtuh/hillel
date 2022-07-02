<?php
interface  TaxiType
{
    public function price();
    public function model();
}
abstract class Taxi
{
    abstract public function createTaxi();
    public function getTaxi()
    {
        $price = $this->createTaxi()->price();
        $model = $this->createTaxi()->model();
        return compact('price', 'model');
    }
}
class EconomTaxi implements TaxiType
{

    public function price()
    {
        return '10';
    }

    public function model()
    {
        return 'Econom';
    }
}
class Econom extends Taxi
{

    public function createTaxi()
    {
        return new EconomTaxi();
    }
}
class StandardTaxi implements TaxiType
{

    public function price()
    {
        return '20';
    }

    public function model()
    {
        return 'Standard';
    }
}
class Standard extends Taxi
{

    public function createTaxi()
    {
        return new StandardTaxi();
    }
}
class LuxTaxi implements TaxiType
{

    public function price()
    {
        return '30';
    }

    public function model()
    {
        return 'Lux';
    }
}
class Lux extends Taxi
{

    public function createTaxi()
    {
        return new LuxTaxi();
    }
}
$econom = new Econom();
var_dump($econom->getTaxi());
$standard = new Standard();
var_dump($standard->getTaxi());
$lux = new Lux();
var_dump($lux->getTaxi());
