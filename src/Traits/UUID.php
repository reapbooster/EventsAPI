<?php

namespace App\Traits;


use App\Utility\UUIDSeed;

trait UUID {

  public static function seedUUID($prop1, $prop2, $prop3, $prop4, $prop5, $prop6, $prop7, $prop8) {
    $seed = new UUIDSeed($prop1, $prop2, $prop3, $prop4, $prop5, $prop6, $prop7, $prop8);
    return UUID::getUUID($seed);
  }

  public static function getUUID(UUIDSeed $seed) {
    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', $seed->get(0), $seed->get(1), $seed->get(2), $seed->get(3), $seed->get(4), $seed->get(5), $seed->get(6), $seed->get(7));
  }

}




