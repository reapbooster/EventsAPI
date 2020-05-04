<?php


namespace App\Utility;


use App\Exception\UUIDException;

class UUIDSeed {

  protected $seedValues;

  public function __construct() {
    $seedValues = func_get_args();
    if (count($seedValues) !== 8) {
      throw new UUIDException("I do not have enough pieces to form a proper UUID");
    }
    $this->seedValues = $seedValues;
  }

  function get(int $number) {
    return isset($this->seedValues[$number]) ? $this->seedValues[$number] : null;
  }


}