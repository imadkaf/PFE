<?php
/**
 * File containing the ezcWebdavErrorResponse class.
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 * 
 *   http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @package Webdav
 * @version //autogentag//
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
/**
 * Class generated by the backend to indicate an error
 *
 * If a {@link ezcWebdavBackend} produces an error, it will return an instance
 * of this class, which might also be encapsulated in an {@link
 * ezcWebdavMultistatusResponse}.
 *
 * @property string|null $requestUri
 *           Path refering to the resource that produced the error.
 * @property string|null $responseDescription
 *           Details about the error.
 *
 * @version //autogentag//
 * @package Webdav
 */
class ezcWebdavErrorResponse extends ezcWebdavResponse
{
    /**
     * Creates a new response object.
     *
     * Creates a new error response, with the given $status code, which refers
     * to the resource identified by $requestUri. Further details about the
     * error may be provided in $desc.
     * 
     * @param int $status 
     * @param string $requestUri 
     * @param string $desc
     * @return void
     */
    public function __construct( $status, $requestUri = null, $desc = null )
    {
        parent::__construct( $status );

        // Initialize property
        $this->properties['requestUri'] = null;

        if ( $requestUri !== null )
        {
            $this->requestUri = $requestUri;
        }
        if ( $desc !== null )
        {
            $this->responseDescription = $desc;
        }
    }

    /**
     * Sets a property.
     *
     * This method is called when an property is to be set.
     * 
     * @param string $propertyName The name of the property to set.
     * @param mixed $propertyValue The property value.
     * @return void
     * @ignore
     *
     * @throws ezcBasePropertyNotFoundException
     *         if the given property does not exist.
     * @throws ezcBaseValueException
     *         if the value to be assigned to a property is invalid.
     * @throws ezcBasePropertyPermissionException
     *         if the property to be set is a read-only property.
     */
    public function __set( $propertyName, $propertyValue )
    {
        switch ( $propertyName )
        {
            case 'requestUri':
                if ( !is_string( $propertyValue ) )
                {
                    throw new ezcBaseValueException( $propertyName, $propertyValue, 'string' );
                }

                $this->properties[$propertyName] = $propertyValue;
                break;
            case 'responseDescription':
               if ( $this->responseDescription !== null )
               {
                    $this->setHeader( 'Warning', 'eZComponents error "' . $this->responseDescription . '"' );
               }
               parent::__set( $propertyName, $propertyValue );
               break;
            default:
                parent::__set( $propertyName, $propertyValue );
        }
    }
}

?>
