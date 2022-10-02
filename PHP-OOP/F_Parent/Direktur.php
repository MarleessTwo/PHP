<?php


namespace F_Parent {

  class Direktur
  {
    private string $phoneNumber = "+6281234567890";
    protected string $name;
    protected int $age;
    protected string $address;

    // parent class
    public function __construct(
      $name,
      $age,
      $address
    ) {
      $this->name = $name;
      $this->age = $age;
      $this->address = $address;
    }

    public function showData()
    {
      echo "Name : " . $this->name . "<br>";
      echo "Age : " . $this->age . "<br>";
      echo "Address : " . $this->address . "<br>";
    }

    protected function showPhoneNumber()
    {
      echo "Phone Number : " . $this->phoneNumber . "<br>";
    }
  }

  class Manager extends Direktur
  {
    private string $phoneNumber = "+6281234567891";

    // child class
    public function setData($name, $age, $address)
    {
      $this->setData($name, $age, $address);
    }

    public function showPhoneNumber()
    {
      echo "Phone Number : " . $this->phoneNumber . "<br>";
    }

    public function showParentPhoneNumber()
    {
      parent::showPhoneNumber();
    }
  }
}
