<?php

class Account
{
  private $pdo;

  public function __construct()
  {
    $this->pdo = Database::instance();
  }
}
?>
