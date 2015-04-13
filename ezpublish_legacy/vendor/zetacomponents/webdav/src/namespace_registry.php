<?php
/**
 * File containing the ezcWebdavNamespaceRegistry class.
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
 * Class to map XML namespaces to their shortcuts.
 *
 * An instance of this class is used in {@link ezcWebdavXmlTool} to keep track
 * of used namespace shortcuts and the creation of new ones, if necessary.
 * 
 * @package Webdav
 * @version //autogen//
 */
class ezcWebdavNamespaceRegistry implements ArrayAccess
{
    /**
     * Counter to create new shortcuts.
     * 
     * @var int
     */
    protected $shortcutCounter = 0;

    /**
     * Base string to be used for new shortcuts.
     * 
     * @var string
     */
    protected $shortcutBase = 'ezc';

    /**
     * Maps namespace URIs to shortcuts.
     * 
     * <code>
     * array(
     *      'uri' => '<shortcut>',
     *      // ...
     * )
     * </code>
     *
     * @var array(string=>string)
     */
    protected $namespaceMap = array();

    /**
     * Stores shortcuts that are already in use.
     *
     * <code>
     * array(
     *      '<shortcut>' => true,
     *      // ...
     * )
     * </code>
     * 
     * @var array(string=>bool)
     */
    protected $usedShortcuts = array();

    /**
     * Create a new namespace registry.
     *
     * Registers the standard namespace 'DAV:' with the shortcut 'D', which is
     * common in the RFC document.
     * 
     * @return void
     */
    public function __construct()
    {
        $this['DAV:']                             = 'D';
        $this[ezcWebdavLockPlugin::XML_NAMESPACE] = 'ezclock';
    }

    /**
     * ArrayAccess set access.
     *
     * Required by the ArrayAccess interface.
     * 
     * @param string $offset 
     * @param string $value 
     * @return void
     * @ignore
     *
     * @throws ezcBaseValueException
     *         if the given namespace is already registered.
     */
    public function offsetSet( $offset, $value )
    {
        if ( isset( $this->namespaceMap[$offset] ) )
        {
            throw new ezcBaseValueException(
                'offset',
                $offset,
                'non-existent'
            );
        }
        $this->namespaceMap[$offset] = $value;
        $this->usedShortcuts[$value] = true;
    }

    /**
     * ArrayAccess get access.
     *
     * Required by the ArrayAccess interface.
     * 
     * @param string $offset 
     * @return string
     * @ignore
     */
    public function offsetGet( $offset )
    {
        if ( !isset( $this->namespaceMap[$offset] ) )
        {
            $this[$offset] = $this->newShortcut();
        }
        return $this->namespaceMap[$offset];
    }

    /**
     * Array unset() access.
     *
     * Required by the ArrayAccess interface.
     *
     * @param string $offset 
     * @return void
     * @ignore
     */
    public function offsetUnset( $offset )
    {
        if ( isset( $this->namespaceMap[$offset] ) )
        {
            unset( $this->usedShortcuts[$this->namespaceMap[$offset]] );
            unset( $this->namespaceMap[$offset] );
        }
    }

    /**
     * Array isset() access.
     *
     * Required by the ArrayAccess interface.
     * 
     * @param string $offset 
     * @return bool
     * @ignore
     */
    public function offsetExists( $offset )
    {
        return isset( $this->namespaceMap[$offset] );
    }
    
    /**
     * Creates a new namespace shortcut.
     *
     * Produces a new shortcut for a namespace by using {@link
     * $this->shortcutBase} and the first 5 characters of the MD5 hash of the
     * current microtime. Only returns unused shortcuts.
     * 
     * @return string
     */
    protected function newShortcut()
    {
        do
        {
            $shortcut = sprintf( "%s%'05s", $this->shortcutBase, $this->shortcutCounter++ );
        }
        while ( isset( $this->usedShortcuts[$shortcut] ) );
        return $shortcut;
    }
}

?>
