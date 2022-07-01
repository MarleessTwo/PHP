<?php

class SocialMedia
{
  public string $name;
}

class Facebook extends SocialMedia
{
  // final tidak bisa di Override
  final public function login(string $username, string $password): bool
  {
    return true;
  }
}

// error
class FakeFacebook extends Facebook
{
  // error
  // public function login(string $username, string $password): bool
  // {
  //   return false;
  // }
}
