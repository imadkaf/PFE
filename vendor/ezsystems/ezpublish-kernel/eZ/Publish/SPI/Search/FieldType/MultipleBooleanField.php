<?php
/**
 * File containing the eZ\Publish\SPI\Search\FieldType\MultipleBooleanField class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version 2014.11.1
 */
namespace eZ\Publish\SPI\Search\FieldType;

use eZ\Publish\SPI\Search\FieldType;

/**
 * Boolean document field
 */
class MultipleBooleanField extends FieldType
{
    /**
     * The type name of the facet. Has to be handled by the solr schema.
     *
     * @var string
     */
    protected $type = 'ez_mboolean';
}

