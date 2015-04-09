<?php
/**
 * CreateSignal class
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version 2014.11.1
 */

namespace eZ\Publish\Core\SignalSlot\Signal\URLWildcardService;

use eZ\Publish\Core\SignalSlot\Signal;

/**
 * CreateSignal class
 * @package eZ\Publish\Core\SignalSlot\Signal\URLWildcardService
 */
class CreateSignal extends Signal
{
    /**
     * UrlWildcardId
     *
     * @var mixed
     */
    public $urlWildcardId;
}
