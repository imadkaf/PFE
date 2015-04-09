<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Query\FacetBuilder\DateRangeFacetBuilder class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version 2014.11.1
 *
 * @package eZ\Publish\API\Repository\Values\Content\Query\FacetBuilder
 */

namespace eZ\Publish\API\Repository\Values\Content\Query\FacetBuilder;

use eZ\Publish\API\Repository\Values\Content\Query\FacetBuilder;

/**
 * Build a date range facet
 *
 * If provided the search service returns a DateRangeFacet depending on the provided
 * type (PUBLISHED, CREATED, MODIFIED)
 *
 * @package eZ\Publish\API\Repository\Values\Content\Query
 */
abstract class DateRangeFacetBuilder extends FacetBuilder
{
    const PUBLISHED = 0;
    const CREATED = 1;
    const MODIFIED = 2;

    public $type = self::PUBLISHED;

    /**
     * Adds a range entry with explicit to and unbounded from.
     *
     * @param \DateTime $to
     */
    public abstract function addUnboundedFrom( $to );

    /**
     * Adds a date range
     *
     * @param \DateTime $from
     * @param \DateTime $to
     */
    public abstract function addRange( $from, $to );

    /**
     * Adds a range entry with explicit from and unbounded to.
     *
     * @param \DateTime $from
     */
    public abstract function addUnboundedTo( $from );
}
