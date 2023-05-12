<?php

class Account
{
  private $pdo;
  private $errorArray = [];

  public function __construct()
  {
    $this->pdo = Database::instance();
  }

  public function register($fn, $ln, $un, $em, $pw, $cpw)
  {
    $this->validateFirstName($fn);
    $this->validateLastName($ln);
  }

  private function validateFirstName($fn)
  {
    if (strlen($fn) < 2 || strlen($fn) > 25) {
      return array_push($this->errorArray, Constants::$firstNameCharacters);
    }
  }

  private function validateLastName($fn)
  {
    if (strlen($ln) < 2 || strlen($ln) > 25) {
      return array_push($this->errorArray, Constants::$lastNameCharacters);
    }
  }

  public function generatesUsername($fn, $ln)
  {
    if (!empty($fn) && !empty($ln)) {
      if (
        !in_array(Constants::$firstNameCharacters, $this->errorArray) &&
        !in_array(Constants::$lastNameCharacters, $this->errorArray)
      ) {
        $username = strtolower($fn . "" . $ln); // concat first and last name
        if ($this->checkUsernameExists($username)) {
          $screenRand = rand();
          $userLink = $username . "" . $screenRand;
        } else {
          $userLink = $username;
        }
      }
    }
  }

  public function checkUsernameExists($username)
  {
    $stmt = $this->pdo->prepare(
      "SELECT * FROM `users` WHERE username = :username"
    );
    $stmt->bindParam(":username", $username, PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();
    if ($count > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function getErrorMessage($error)
  {
    if (in_array($error, $this->errorArray)) {
      return "<span class='errorMessage'>$error</span>";
    }
  }
}
?>
