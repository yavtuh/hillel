<?php
trait Trait1{
    public function method(){
        return "1";
    }
}
trait Trait2{
    public function method(){
        return "2";
    }
}
trait Trait3{
    public function method(){
        return "3";
    }
}
class Test{
    use Trait1,Trait2,Trait3 {
        Trait2::method insteadof Trait1;
        Trait3::method insteadof Trait2;
        Trait1::method as Trait1;
        Trait2::method as Trait2;
        Trait3::method as Trait3;
     }

     public function getSum(){
        return $this->Trait1()+$this->Trait2()+$this->Trait3();
     }
}
$test = new Test();
echo $test->getSum();
