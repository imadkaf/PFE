<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Search\Facet\FieldFacet class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version 2014.11.1
 */
namespace eZ\Publish\API\Repository\Values\Content\Search\Facet;

use eZ\Publish\API\Repository\Values\Content\Search\Facet;

/**
 * This class represents a field facet which holds the collected terms for one or more fields
 *
 * @author christianbacher
 *
 */
class FieldFacet extends Facet
{
    /**
     * Number of documents not containing any terms in the queried fields
     *
     * @var int
     */
    public $missingCount;

    /**
     * The number of terms which are not in the queried top list
     *
     * @var int
     */
    public $otherCount;

    /**
     * The total count of terms found.
     *
     * @var int
     */
    public $totalCount;

    /**
     * An array of terms (key) and counts (value).
     *
     * @var array
     */
    public $entries;
}
