<?php

/**
 * @file
 * DataResource class 
 */

namespace NYPL\BiblioCommons\Api;

class DataResource {

  protected $data;

  /**
   * SimpleResource object constructor.
   *
   * @param StdObj $data 
   *   Parsed JSON for the object.
   */
  public function __construct($data) {
    $this->data = $data;
  }
}