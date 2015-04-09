<?php
/**
 * File containing the TemplatesTest class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version 2014.11.1
 */

namespace eZ\Bundle\EzPublishCoreBundle\Tests\DependencyInjection\Configuration\Parser;

use eZ\Bundle\EzPublishCoreBundle\DependencyInjection\Configuration\Parser\FieldDefinitionSettingsTemplates;
use eZ\Bundle\EzPublishCoreBundle\DependencyInjection\Configuration\Parser\FieldTemplates;
use eZ\Bundle\EzPublishCoreBundle\DependencyInjection\EzPublishCoreExtension;
use Symfony\Component\Yaml\Yaml;

class TemplatesTest extends AbstractParserTestCase
{
    private $config;

    protected function getContainerExtensions()
    {
        return array(
            new EzPublishCoreExtension(
                array( new FieldTemplates(), new FieldDefinitionSettingsTemplates() )
            )
        );
    }

    protected function getMinimalConfiguration()
    {
        return $this->config = Yaml::parse( __DIR__ . '/../../Fixtures/ezpublish_templates.yml' );
    }

    public function testFieldTemplates()
    {
        $this->load();
        $fixedUpConfig = $this->getExpectedConfigFieldTemplates( $this->config );
        $groupFieldTemplates = $fixedUpConfig['system']['ezdemo_frontend_group']['field_templates'];
        $demoSiteFieldTemplates = $fixedUpConfig['system']['ezdemo_site']['field_templates'];
        $this->assertConfigResolverParameterValue(
            'field_templates',
            array_merge(
                // Adding default kernel value.
                array( array( 'template' => 'EzPublishCoreBundle::content_fields.html.twig', 'priority' => 0 ) ),
                $groupFieldTemplates,
                $demoSiteFieldTemplates
            ),
            'ezdemo_site',
            false
        );
        $this->assertConfigResolverParameterValue(
            'field_templates',
            array_merge(
                // Adding default kernel value.
                array( array( 'template' => 'EzPublishCoreBundle::content_fields.html.twig', 'priority' => 0 ) ),
                $groupFieldTemplates
            ),
            'fre',
            false
        );
        $this->assertConfigResolverParameterValue(
            'field_templates',
            array( array( 'template' => 'EzPublishCoreBundle::content_fields.html.twig', 'priority' => 0 ) ),
            'ezdemo_site_admin',
            false
        );
    }

    /**
     * Fixes up input configuration for field_templates as semantic configuration parser does, adding a default priority of 0 when not set.
     *
     * @param array $config
     *
     * @return array
     */
    private function getExpectedConfigFieldTemplates( array $config )
    {
        foreach ( $config['system']['ezdemo_frontend_group']['field_templates'] as &$block )
        {
            if ( !isset( $block['priority'] ) )
            {
                $block['priority'] = 0;
            }
        }

        return $config;
    }

    public function testFieldDefinitionSettingsTemplates()
    {
        $this->load();
        $fixedUpConfig = $this->getExpectedConfigFieldDefinitionSettingsTemplates( $this->config );
        $groupFieldTemplates = $fixedUpConfig['system']['ezdemo_frontend_group']['fielddefinition_settings_templates'];
        $demoSiteFieldTemplates = $fixedUpConfig['system']['ezdemo_site']['fielddefinition_settings_templates'];

        $this->assertConfigResolverParameterValue(
            'fielddefinition_settings_templates',
            array_merge(
                // Adding default kernel value.
                array( array( 'template' => 'EzPublishCoreBundle::fielddefinition_settings.html.twig', 'priority' => 0 ) ),
                $groupFieldTemplates,
                $demoSiteFieldTemplates
            ),
            'ezdemo_site',
            false
        );
        $this->assertConfigResolverParameterValue(
            'fielddefinition_settings_templates',
            array_merge(
                // Adding default kernel value.
                array( array( 'template' => 'EzPublishCoreBundle::fielddefinition_settings.html.twig', 'priority' => 0 ) ),
                $groupFieldTemplates
            ),
            'fre',
            false
        );
        $this->assertConfigResolverParameterValue(
            'fielddefinition_settings_templates',
            array( array( 'template' => 'EzPublishCoreBundle::fielddefinition_settings.html.twig', 'priority' => 0 ) ),
            'ezdemo_site_admin',
            false
        );
    }

    /**
     * Fixes up input configuration for fielddefinition_settings_templates as semantic configuration parser does, adding a default priority of 0 when not set.
     *
     * @param array $config
     *
     * @return array
     */
    private function getExpectedConfigFieldDefinitionSettingsTemplates( array $config )
    {
        foreach ( $config['system']['ezdemo_frontend_group']['fielddefinition_settings_templates'] as &$block )
        {
            if ( !isset( $block['priority'] ) )
            {
                $block['priority'] = 0;
            }
        }

        return $config;
    }
}