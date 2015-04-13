<?php
/**
 * File containing the wrapper around the legacy index_cluster.php file
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */

 $legacyRoot = '/var/www/ayaville/ezpublish/../ezpublish_legacy';
 chdir( $legacyRoot );
 require 'index_cluster.php';
