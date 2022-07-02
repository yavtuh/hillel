<?php

class Contacts{}
interface AddContact
{
    public function name($value);
    public function surname($value);
    public function phone($value);
    public function email($value);
    public function address($value);
}
class Contact implements AddContact
{
    private $contact;
    public function __construct()
    {
        $this->add();
    }
    public function add()
    {
        $this->contact = new Contacts();
        return $this;
    }
    public function phone($value)
    {
        $this->contact->phone = $value;
        return $this;
    }
    public function name($value)
    {
        $this->contact->name = $value;
        return $this;
    }
    public function surname($value)
    {
        $this->contact->surname = $value;
        return $this;
    }
    public function email($value)
    {
        $this->contact->email = $value;
        return $this;
    }
    public function address($value)
    {
        $this->contact->address = $value;
        return $this;
    }
    public function build()
    {
        $build = $this->contact;
        $this->add();
        return $build;
    }
}

$contact = new Contact();
$newcontact = $contact->phone('0668248919')->name("Vlad")->surname("Vladko")->email("vlad@email.com")->address("hz")->build();
$newcontact1 = $contact->phone('0678248912')->name("Tolik")->surname("Tolko")->email("tolik@email.com")->address("hz")->build();

echo '<pre>';
var_dump($newcontact);
var_dump($newcontact1);