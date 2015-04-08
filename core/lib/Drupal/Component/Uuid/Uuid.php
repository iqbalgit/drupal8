<?php

/**
 * @file
 * Contains \Drupal\Component\Uuid\Uuid.
 */

namespace Drupal\Component\Uuid;

/**
 * UUID Helper methods.
 */
class Uuid {

  /**
   * Checks that a string appears to be in the format of a UUID.
   *
   * Implementations should not implement validation, since UUIDs should be in
   * a consistent format across all implementations.
   *
   * @param string $uuid
   *   The string to test.
   *
   * @return bool
   *   TRUE if the string is well formed, FALSE otherwise.
   */
  public static function isValid($uuid) {
    return (bool) preg_match("/^[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $uuid);
  }

}
