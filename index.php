<?php

/**
 * @file
 * The PHP page that serves all page requests on a Drupal installation.
 *
 * All Drupal code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt files in the "core" directory.
 */

use Drupal\Core\DrupalKernel;
use Drupal\Core\Site\Settings;
use Symfony\Component\HttpFoundation\Request;

$autoloader = require_once __DIR__ . '/core/vendor/autoload.php';

echo "anup git testing";
<<<<<<< HEAD
echo "By Iqbal";
=======
echo "2nd edit by anup";
<<<<<<< HEAD
echo "3d edit by anup";
=======
>>>>>>> 71186e90e49e908c691a133b4fae149c7709b382
>>>>>>> bed200e83fd504a5ce4dbd58441ce5a099244d68
try {

  $request = Request::createFromGlobals();
  $kernel = DrupalKernel::createFromRequest($request, $autoloader, 'prod');
  $response = $kernel
      ->handle($request)
      // Handle the response object.
      ->prepare($request)->send();
  $kernel->terminate($request, $response);
}
catch (Exception $e) {
  $message = 'If you have just changed code (for example deployed a new module or moved an existing one) read <a href="http://drupal.org/documentation/rebuild">http://drupal.org/documentation/rebuild</a>';
  if (Settings::get('rebuild_access', FALSE)) {
    $rebuild_path = $GLOBALS['base_url'] . '/rebuild.php';
    $message .= " or run the <a href=\"$rebuild_path\">rebuild script</a>";
  }

  // Set the response code manually. Otherwise, this response will default to a
  // 200.
  http_response_code(500);
  print $message;
  throw $e;
}
