<?php
/**
 * UpdateContentMetadataSignal class
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version 2014.11.1
 */

namespace eZ\Publish\Core\SignalSlot\Signal\ContentService;

use eZ\Publish\Core\SignalSlot\Signal;

/**
 * UpdateContentMetadataSignal class
 * @package eZ\Publish\Core\SignalSlot\Signal\ContentService
 */
class UpdateContentMetadataSignal extends Signal
{
    /**
     * ContentId
     *
     * @var mixed
     */
    public $contentId;
}
