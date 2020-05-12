<?php


namespace App\Utility;

use App\Entity\Panel;

/**
 * Class URLParser
 *
 * @package App\Utility
 */
class URLParser {

  /**
   * @var array|false|int|string|null
   */
  protected $parsed;

  /**
   * URLParser constructor.
   *
   * @param string $string
   */
  public function __construct(string $string) {
    $this->parsed = parse_url($string);
  }

  /**
   * @return string
   */
  public function getBaseURI() {
    if (defined('APP_BASE_URI')) {
      return APP_BASE_URI;
    }
    else return $this->getThisURI();
  }

  public function getThisURI() {
    return $this->getScheme() .
      $this->getUser() .
      $this->getPass() .
      $this->getHost() .
      $this->getPort() .
      $this->getPath();
  }

  /**
   * @param $parsed_url
   *
   * @return string
   */
  public function __toString() {
    return $this->getScheme() .
      $this->getUser() .
      $this->getPass() .
      $this->getHost() .
      $this->getPort() .
      $this->getPath() .
      $this->getQuery() .
      $this->getFragment();
  }

  /**
   * @return string
   */
  public function getScheme() {
    return isset($this->parsed['scheme']) ? $this->parsed['scheme'] . '://' : '';
  }

  /**
   * @return mixed|string
   */
  public function getHost() {
    return isset($this->parsed['host']) ? $this->parsed['host'] : '';
  }

  /**
   * @return string
   */
  public function getPort() {
    return isset($this->parsed['port']) ? ':' . $this->parsed['port'] : '';
  }

  /**
   * @return mixed|string
   */
  public function getUser() {
    return isset($this->parsed['user']) ? $parsed_url['user'] : '';
  }

  /**
   * @return string
   */
  public function getPass() {
    $pass = isset($this->parsed['pass']) ? ':' . $this->parsed['pass'] : '';
    return ($this->getUser() || $pass) ? "$pass@" : '';
  }

  /**
   * @return mixed|string
   */
  public function getPath() {
    return isset($this->parsed['path']) ? $this->parsed['path'] : '';
  }

  /**
   * @return string
   */
  public function getQuery() {
    return isset($this->parsed['query']) ? '?' . $this->parsed['query'] : '';
  }

  /**
   * @return string
   */
  public function getFragment() {
    return isset($this->parsed['fragment']) ? '#' . $this->parsed['fragment'] : '';
  }

}