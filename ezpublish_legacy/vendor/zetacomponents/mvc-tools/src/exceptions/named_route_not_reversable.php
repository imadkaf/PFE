<?php
/**
 * File containing the ezcMvcNamedRouteNotReversableException class.
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
 * @package MvcTools
 * @version //autogentag//
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

/**
 * This exception is thrown when a reverse route is requested on a route class
 * that does not support it.
 *
 * @package MvcTools
 * @version //autogentag//
 */
class ezcMvcNamedRouteNotReversableException extends ezcMvcToolsException
{
    /**
     * Constructs an ezcMvcNamedRouteNotReversableException
     *
     * @param string $routeName
     * @param string $routerClass
     */
    public function __construct( $routeName, $routerClass )
    {
        $message = "The route with name '{$routeName}' is of the '{$routerClass}' class, which does not support reversed route generation.";
        parent::__construct( $message );
    }
}
?>
