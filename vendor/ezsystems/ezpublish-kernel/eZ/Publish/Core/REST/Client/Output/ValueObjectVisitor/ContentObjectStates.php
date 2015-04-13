<?php
/**
 * File containing the ContentObjectStates visitor class
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version 2014.11.1
 */

namespace eZ\Publish\Core\REST\Client\Output\ValueObjectVisitor;

use eZ\Publish\Core\REST\Common\Output\ValueObjectVisitor;
use eZ\Publish\Core\REST\Common\Output\Generator;
use eZ\Publish\Core\REST\Common\Output\Visitor;

/**
 * ContentObjectStates value object visitor
 */
class ContentObjectStates extends ValueObjectVisitor
{
    /**
     * Visit struct returned by controllers
     *
     * @param \eZ\Publish\Core\REST\Common\Output\Visitor $visitor
     * @param \eZ\Publish\Core\REST\Common\Output\Generator $generator
     * @param mixed $data
     */
    public function visit( Visitor $visitor, Generator $generator, $data )
    {
        $generator->startObjectElement( 'ContentObjectStates' );
        $visitor->setHeader( 'Content-Type', $generator->getMediaType( 'ContentObjectStates' ) );

        $generator->startList( 'ObjectState' );

        foreach ( $data->states as $state )
        {
            $generator->startObjectElement( 'ObjectState' );
            $generator->startAttribute(
                'href',
                $this->requestParser->generate(
                    'objectstate',
                    array(
                        'objectstategroup' => $state->groupId,
                        'objectstate' => $state->objectState->id
                    )
                )
            );
            $generator->endAttribute( 'href' );
            $generator->endObjectElement( 'ObjectState' );
        }

        $generator->endList( 'ObjectState' );

        $generator->endObjectElement( 'ContentObjectStates' );
    }
}
