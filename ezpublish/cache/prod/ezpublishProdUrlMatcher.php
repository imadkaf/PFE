<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * ezpublishProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ezpublishProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // a_yaline_hello_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'a_yaline_hello_homepage')), array (  '_controller' => 'aYaline\\HelloBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'ezpublish.security.controller:loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/content')) {
            // _ezpublishLocation
            if (0 === strpos($pathinfo, '/content/location') && preg_match('#^/content/location/(?P<locationId>[^/]++)(?:/(?P<viewType>[^/]++)(?:/(?P<layout>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_ezpublishLocation')), array (  '_controller' => 'ez_content:viewLocation',  'viewType' => 'full',  'layout' => true,));
            }

            if (0 === strpos($pathinfo, '/content/versionview')) {
                // _ezpublishPreviewContent
                if (preg_match('#^/content/versionview/(?P<contentId>[^/]++)/(?P<versionNo>[^/]++)/(?P<language>[^/]++)/site_access/(?P<siteAccessName>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_ezpublishPreviewContent')), array (  '_controller' => 'ezpublish.controller.content.preview:previewContentAction',));
                }

                // _ezpublishPreviewContentDefaultSa
                if (preg_match('#^/content/versionview/(?P<contentId>[^/]++)/(?P<versionNo>[^/]++)/(?P<language>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_ezpublishPreviewContentDefaultSa')), array (  '_controller' => 'ezpublish.controller.content.preview:previewContentAction',));
                }

            }

        }

        // _ez_user_hash
        if ($pathinfo === '/_fos_user_context_hash') {
            return array('_route' => '_ez_user_hash');
        }

        // _ezpublishLegacyTreeMenu
        if (0 === strpos($pathinfo, '/content/treemenu') && preg_match('#^/content/treemenu/(?P<nodeId>[^/]++)/(?P<modified>[^/]++)/(?P<expiry>[^/]++)/(?P<perm>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_ezpublishLegacyTreeMenu')), array (  '_controller' => 'ezpublish_legacy.treemenu.controller:viewMenu',  '_format' => 'json',));
        }

        // ezpublishSetup
        if ($pathinfo === '/ezsetup') {
            return array (  '_controller' => 'ezpublish_legacy.setup.controller:init',  '_route' => 'ezpublishSetup',);
        }

        if (0 === strpos($pathinfo, '/user/log')) {
            // _ezpublishLegacyLogin
            if ($pathinfo === '/user/login') {
                return array (  '_controller' => 'ezpublish_legacy.controller:loginAction',  '_route' => '_ezpublishLegacyLogin',);
            }

            // _ezpublishLegacyLogout
            if ($pathinfo === '/user/logout') {
                return array (  '_controller' => 'ezpublish_legacy.controller:logoutAction',  '_route' => '_ezpublishLegacyLogout',);
            }

        }

        if (0 === strpos($pathinfo, '/api/ezp/v2')) {
            // ezpublish_rest_loadRootResource
            if (rtrim($pathinfo, '/') === '/api/ezp/v2') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadRootResource;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ezpublish_rest_loadRootResource');
                }

                return array (  '_controller' => 'ezpublish_rest.controller.root:loadRootResource',  '_route' => 'ezpublish_rest_loadRootResource',);
            }
            not_ezpublish_rest_loadRootResource:

            if (0 === strpos($pathinfo, '/api/ezp/v2/content')) {
                if (0 === strpos($pathinfo, '/api/ezp/v2/content/sections')) {
                    // ezpublish_rest_listSections
                    if ($pathinfo === '/api/ezp/v2/content/sections') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_listSections;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.section:listSections',  '_route' => 'ezpublish_rest_listSections',);
                    }
                    not_ezpublish_rest_listSections:

                    // ezpublish_rest_createSection
                    if ($pathinfo === '/api/ezp/v2/content/sections') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createSection;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.section:createSection',  '_route' => 'ezpublish_rest_createSection',);
                    }
                    not_ezpublish_rest_createSection:

                    // ezpublish_rest_loadSection
                    if (preg_match('#^/api/ezp/v2/content/sections/(?P<sectionId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadSection;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadSection')), array (  '_controller' => 'ezpublish_rest.controller.section:loadSection',));
                    }
                    not_ezpublish_rest_loadSection:

                    // ezpublish_rest_updateSection
                    if (preg_match('#^/api/ezp/v2/content/sections/(?P<sectionId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_ezpublish_rest_updateSection;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateSection')), array (  '_controller' => 'ezpublish_rest.controller.section:updateSection',));
                    }
                    not_ezpublish_rest_updateSection:

                    // ezpublish_rest_deleteSection
                    if (preg_match('#^/api/ezp/v2/content/sections/(?P<sectionId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteSection;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteSection')), array (  '_controller' => 'ezpublish_rest.controller.section:deleteSection',));
                    }
                    not_ezpublish_rest_deleteSection:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects')) {
                    // ezpublish_rest_redirectContent
                    if ($pathinfo === '/api/ezp/v2/content/objects') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_redirectContent;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.content:redirectContent',  '_route' => 'ezpublish_rest_redirectContent',);
                    }
                    not_ezpublish_rest_redirectContent:

                    // ezpublish_rest_createContent
                    if ($pathinfo === '/api/ezp/v2/content/objects') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createContent;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.content:createContent',  '_route' => 'ezpublish_rest_createContent',);
                    }
                    not_ezpublish_rest_createContent:

                    // ezpublish_rest_updateContentMetadata
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_ezpublish_rest_updateContentMetadata;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateContentMetadata')), array (  '_controller' => 'ezpublish_rest.controller.content:updateContentMetadata',));
                    }
                    not_ezpublish_rest_updateContentMetadata:

                    // ezpublish_rest_loadContent
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadContent;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadContent')), array (  '_controller' => 'ezpublish_rest.controller.content:loadContent',));
                    }
                    not_ezpublish_rest_loadContent:

                    // ezpublish_rest_deleteContent
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteContent;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteContent')), array (  '_controller' => 'ezpublish_rest.controller.content:deleteContent',));
                    }
                    not_ezpublish_rest_deleteContent:

                    // ezpublish_rest_copyContent
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'COPY') {
                            $allow[] = 'COPY';
                            goto not_ezpublish_rest_copyContent;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_copyContent')), array (  '_controller' => 'ezpublish_rest.controller.content:copyContent',));
                    }
                    not_ezpublish_rest_copyContent:

                    // ezpublish_rest_redirectCurrentVersionRelations
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/relations$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_redirectCurrentVersionRelations;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_redirectCurrentVersionRelations')), array (  '_controller' => 'ezpublish_rest.controller.content:redirectCurrentVersionRelations',));
                    }
                    not_ezpublish_rest_redirectCurrentVersionRelations:

                    // ezpublish_rest_loadContentVersions
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadContentVersions;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadContentVersions')), array (  '_controller' => 'ezpublish_rest.controller.content:loadContentVersions',));
                    }
                    not_ezpublish_rest_loadContentVersions:

                    // ezpublish_rest_loadVersionRelations
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)/relations$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadVersionRelations;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadVersionRelations')), array (  '_controller' => 'ezpublish_rest.controller.content:loadVersionRelations',));
                    }
                    not_ezpublish_rest_loadVersionRelations:

                    // ezpublish_rest_createRelation
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)/relations$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createRelation;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_createRelation')), array (  '_controller' => 'ezpublish_rest.controller.content:createRelation',));
                    }
                    not_ezpublish_rest_createRelation:

                    // ezpublish_rest_loadVersionRelation
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)/relations/(?P<relationId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadVersionRelation;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadVersionRelation')), array (  '_controller' => 'ezpublish_rest.controller.content:loadVersionRelation',));
                    }
                    not_ezpublish_rest_loadVersionRelation:

                    // ezpublish_rest_removeRelation
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)/relations/(?P<relationId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_removeRelation;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_removeRelation')), array (  '_controller' => 'ezpublish_rest.controller.content:removeRelation',));
                    }
                    not_ezpublish_rest_removeRelation:

                    // ezpublish_rest_loadContentInVersion
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadContentInVersion;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadContentInVersion')), array (  '_controller' => 'ezpublish_rest.controller.content:loadContentInVersion',));
                    }
                    not_ezpublish_rest_loadContentInVersion:

                    // ezpublish_rest_updateVersion
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_ezpublish_rest_updateVersion;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateVersion')), array (  '_controller' => 'ezpublish_rest.controller.content:updateVersion',));
                    }
                    not_ezpublish_rest_updateVersion:

                    // ezpublish_rest_deleteContentVersion
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteContentVersion;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteContentVersion')), array (  '_controller' => 'ezpublish_rest.controller.content:deleteContentVersion',));
                    }
                    not_ezpublish_rest_deleteContentVersion:

                    // ezpublish_rest_createDraftFromVersion
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'COPY') {
                            $allow[] = 'COPY';
                            goto not_ezpublish_rest_createDraftFromVersion;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_createDraftFromVersion')), array (  '_controller' => 'ezpublish_rest.controller.content:createDraftFromVersion',));
                    }
                    not_ezpublish_rest_createDraftFromVersion:

                    // ezpublish_rest_publishVersion
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUBLISH') {
                            $allow[] = 'PUBLISH';
                            goto not_ezpublish_rest_publishVersion;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_publishVersion')), array (  '_controller' => 'ezpublish_rest.controller.content:publishVersion',));
                    }
                    not_ezpublish_rest_publishVersion:

                    // ezpublish_rest_redirectCurrentVersion
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/currentversion$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_redirectCurrentVersion;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_redirectCurrentVersion')), array (  '_controller' => 'ezpublish_rest.controller.content:redirectCurrentVersion',));
                    }
                    not_ezpublish_rest_redirectCurrentVersion:

                    // ezpublish_rest_createDraftFromCurrentVersion
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/currentversion$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'COPY') {
                            $allow[] = 'COPY';
                            goto not_ezpublish_rest_createDraftFromCurrentVersion;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_createDraftFromCurrentVersion')), array (  '_controller' => 'ezpublish_rest.controller.content:createDraftFromCurrentVersion',));
                    }
                    not_ezpublish_rest_createDraftFromCurrentVersion:

                }

                // ezpublish_rest_binaryContent_getImageVariation
                if (0 === strpos($pathinfo, '/api/ezp/v2/content/binary/images') && preg_match('#^/api/ezp/v2/content/binary/images/(?P<imageId>\\d+-\\d+)/variations/(?P<variationIdentifier>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ezpublish_rest_binaryContent_getImageVariation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_binaryContent_getImageVariation')), array (  '_controller' => 'ezpublish_rest.controller.binary_content:getImageVariation',));
                }
                not_ezpublish_rest_binaryContent_getImageVariation:

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/views')) {
                    // ezpublish_rest_createView
                    if ($pathinfo === '/api/ezp/v2/content/views') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createView;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.content:createView',  '_route' => 'ezpublish_rest_createView',);
                    }
                    not_ezpublish_rest_createView:

                    // ezpublish_rest_listView
                    if ($pathinfo === '/api/ezp/v2/content/views') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_listView;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.content:listView',  '_route' => 'ezpublish_rest_listView',);
                    }
                    not_ezpublish_rest_listView:

                    // ezpublish_rest_getView
                    if (preg_match('#^/api/ezp/v2/content/views/(?P<viewId>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_getView;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_getView')), array (  '_controller' => 'ezpublish_rest.controller.content:getView',));
                    }
                    not_ezpublish_rest_getView:

                    // ezpublish_rest_loadViewResults
                    if (preg_match('#^/api/ezp/v2/content/views/(?P<viewId>[^/]++)/results$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadViewResults;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadViewResults')), array (  '_controller' => 'ezpublish_rest.controller.content:loadViewResults',));
                    }
                    not_ezpublish_rest_loadViewResults:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects')) {
                    if (0 === strpos($pathinfo, '/api/ezp/v2/content/objectstategroups')) {
                        // ezpublish_rest_loadObjectStateGroups
                        if ($pathinfo === '/api/ezp/v2/content/objectstategroups') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_ezpublish_rest_loadObjectStateGroups;
                            }

                            return array (  '_controller' => 'ezpublish_rest.controller.object_state:loadObjectStateGroups',  '_route' => 'ezpublish_rest_loadObjectStateGroups',);
                        }
                        not_ezpublish_rest_loadObjectStateGroups:

                        // ezpublish_rest_createObjectStateGroup
                        if ($pathinfo === '/api/ezp/v2/content/objectstategroups') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_ezpublish_rest_createObjectStateGroup;
                            }

                            return array (  '_controller' => 'ezpublish_rest.controller.object_state:createObjectStateGroup',  '_route' => 'ezpublish_rest_createObjectStateGroup',);
                        }
                        not_ezpublish_rest_createObjectStateGroup:

                        // ezpublish_rest_loadObjectStateGroup
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_ezpublish_rest_loadObjectStateGroup;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadObjectStateGroup')), array (  '_controller' => 'ezpublish_rest.controller.object_state:loadObjectStateGroup',));
                        }
                        not_ezpublish_rest_loadObjectStateGroup:

                        // ezpublish_rest_updateObjectStateGroup
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_ezpublish_rest_updateObjectStateGroup;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateObjectStateGroup')), array (  '_controller' => 'ezpublish_rest.controller.object_state:updateObjectStateGroup',));
                        }
                        not_ezpublish_rest_updateObjectStateGroup:

                        // ezpublish_rest_deleteObjectStateGroup
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_ezpublish_rest_deleteObjectStateGroup;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteObjectStateGroup')), array (  '_controller' => 'ezpublish_rest.controller.object_state:deleteObjectStateGroup',));
                        }
                        not_ezpublish_rest_deleteObjectStateGroup:

                        // ezpublish_rest_loadObjectStates
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)/objectstates$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_ezpublish_rest_loadObjectStates;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadObjectStates')), array (  '_controller' => 'ezpublish_rest.controller.object_state:loadObjectStates',));
                        }
                        not_ezpublish_rest_loadObjectStates:

                        // ezpublish_rest_createObjectState
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)/objectstates$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_ezpublish_rest_createObjectState;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_createObjectState')), array (  '_controller' => 'ezpublish_rest.controller.object_state:createObjectState',));
                        }
                        not_ezpublish_rest_createObjectState:

                        // ezpublish_rest_loadObjectState
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)/objectstates/(?P<objectStateId>\\d+)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_ezpublish_rest_loadObjectState;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadObjectState')), array (  '_controller' => 'ezpublish_rest.controller.object_state:loadObjectState',));
                        }
                        not_ezpublish_rest_loadObjectState:

                        // ezpublish_rest_updateObjectState
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)/objectstates/(?P<objectStateId>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_ezpublish_rest_updateObjectState;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateObjectState')), array (  '_controller' => 'ezpublish_rest.controller.object_state:updateObjectState',));
                        }
                        not_ezpublish_rest_updateObjectState:

                        // ezpublish_rest_deleteObjectState
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)/objectstates/(?P<objectStateId>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_ezpublish_rest_deleteObjectState;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteObjectState')), array (  '_controller' => 'ezpublish_rest.controller.object_state:deleteObjectState',));
                        }
                        not_ezpublish_rest_deleteObjectState:

                    }

                    // ezpublish_rest_getObjectStatesForContent
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/objectstates$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_getObjectStatesForContent;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_getObjectStatesForContent')), array (  '_controller' => 'ezpublish_rest.controller.object_state:getObjectStatesForContent',));
                    }
                    not_ezpublish_rest_getObjectStatesForContent:

                    // ezpublish_rest_setObjectStatesForContent
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/objectstates$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_ezpublish_rest_setObjectStatesForContent;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_setObjectStatesForContent')), array (  '_controller' => 'ezpublish_rest.controller.object_state:setObjectStatesForContent',));
                    }
                    not_ezpublish_rest_setObjectStatesForContent:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/locations')) {
                    // ezpublish_rest_redirectLocation
                    if ($pathinfo === '/api/ezp/v2/content/locations') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_redirectLocation;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.location:redirectLocation',  '_route' => 'ezpublish_rest_redirectLocation',);
                    }
                    not_ezpublish_rest_redirectLocation:

                    // ezpublish_rest_loadLocation
                    if (preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadLocation;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadLocation')), array (  '_controller' => 'ezpublish_rest.controller.location:loadLocation',));
                    }
                    not_ezpublish_rest_loadLocation:

                    // ezpublish_rest_updateLocation
                    if (preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_ezpublish_rest_updateLocation;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateLocation')), array (  '_controller' => 'ezpublish_rest.controller.location:updateLocation',));
                    }
                    not_ezpublish_rest_updateLocation:

                    // ezpublish_rest_deleteSubtree
                    if (preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteSubtree;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteSubtree')), array (  '_controller' => 'ezpublish_rest.controller.location:deleteSubtree',));
                    }
                    not_ezpublish_rest_deleteSubtree:

                    // ezpublish_rest_copySubtree
                    if (preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'COPY') {
                            $allow[] = 'COPY';
                            goto not_ezpublish_rest_copySubtree;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_copySubtree')), array (  '_controller' => 'ezpublish_rest.controller.location:copySubtree',));
                    }
                    not_ezpublish_rest_copySubtree:

                    // ezpublish_rest_moveSubtree
                    if (preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'MOVE') {
                            $allow[] = 'MOVE';
                            goto not_ezpublish_rest_moveSubtree;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_moveSubtree')), array (  '_controller' => 'ezpublish_rest.controller.location:moveSubtree',));
                    }
                    not_ezpublish_rest_moveSubtree:

                    // ezpublish_rest_swapLocation
                    if (preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'SWAP') {
                            $allow[] = 'SWAP';
                            goto not_ezpublish_rest_swapLocation;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_swapLocation')), array (  '_controller' => 'ezpublish_rest.controller.location:swapLocation',));
                    }
                    not_ezpublish_rest_swapLocation:

                    // ezpublish_rest_loadLocationChildren
                    if (preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)/children$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadLocationChildren;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadLocationChildren')), array (  '_controller' => 'ezpublish_rest.controller.location:loadLocationChildren',));
                    }
                    not_ezpublish_rest_loadLocationChildren:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects')) {
                    // ezpublish_rest_loadLocationsForContent
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/locations$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadLocationsForContent;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadLocationsForContent')), array (  '_controller' => 'ezpublish_rest.controller.location:loadLocationsForContent',));
                    }
                    not_ezpublish_rest_loadLocationsForContent:

                    // ezpublish_rest_createLocation
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/locations$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createLocation;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_createLocation')), array (  '_controller' => 'ezpublish_rest.controller.location:createLocation',));
                    }
                    not_ezpublish_rest_createLocation:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/t')) {
                    if (0 === strpos($pathinfo, '/api/ezp/v2/content/type')) {
                        if (0 === strpos($pathinfo, '/api/ezp/v2/content/typegroups')) {
                            // ezpublish_rest_loadContentTypeGroupList
                            if ($pathinfo === '/api/ezp/v2/content/typegroups') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_loadContentTypeGroupList;
                                }

                                return array (  '_controller' => 'ezpublish_rest.controller.content_type:loadContentTypeGroupList',  '_route' => 'ezpublish_rest_loadContentTypeGroupList',);
                            }
                            not_ezpublish_rest_loadContentTypeGroupList:

                            // ezpublish_rest_createContentTypeGroup
                            if ($pathinfo === '/api/ezp/v2/content/typegroups') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_ezpublish_rest_createContentTypeGroup;
                                }

                                return array (  '_controller' => 'ezpublish_rest.controller.content_type:createContentTypeGroup',  '_route' => 'ezpublish_rest_createContentTypeGroup',);
                            }
                            not_ezpublish_rest_createContentTypeGroup:

                            // ezpublish_rest_loadContentTypeGroup
                            if (preg_match('#^/api/ezp/v2/content/typegroups/(?P<contentTypeGroupId>\\d+)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_loadContentTypeGroup;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadContentTypeGroup')), array (  '_controller' => 'ezpublish_rest.controller.content_type:loadContentTypeGroup',));
                            }
                            not_ezpublish_rest_loadContentTypeGroup:

                            // ezpublish_rest_updateContentTypeGroup
                            if (preg_match('#^/api/ezp/v2/content/typegroups/(?P<contentTypeGroupId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'PATCH') {
                                    $allow[] = 'PATCH';
                                    goto not_ezpublish_rest_updateContentTypeGroup;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateContentTypeGroup')), array (  '_controller' => 'ezpublish_rest.controller.content_type:updateContentTypeGroup',));
                            }
                            not_ezpublish_rest_updateContentTypeGroup:

                            // ezpublish_rest_deleteContentTypeGroup
                            if (preg_match('#^/api/ezp/v2/content/typegroups/(?P<contentTypeGroupId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'DELETE') {
                                    $allow[] = 'DELETE';
                                    goto not_ezpublish_rest_deleteContentTypeGroup;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteContentTypeGroup')), array (  '_controller' => 'ezpublish_rest.controller.content_type:deleteContentTypeGroup',));
                            }
                            not_ezpublish_rest_deleteContentTypeGroup:

                            // ezpublish_rest_listContentTypesForGroup
                            if (preg_match('#^/api/ezp/v2/content/typegroups/(?P<contentTypeGroupId>\\d+)/types$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_listContentTypesForGroup;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_listContentTypesForGroup')), array (  '_controller' => 'ezpublish_rest.controller.content_type:listContentTypesForGroup',));
                            }
                            not_ezpublish_rest_listContentTypesForGroup:

                            // ezpublish_rest_createContentType
                            if (preg_match('#^/api/ezp/v2/content/typegroups/(?P<contentTypeGroupId>\\d+)/types$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_ezpublish_rest_createContentType;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_createContentType')), array (  '_controller' => 'ezpublish_rest.controller.content_type:createContentType',));
                            }
                            not_ezpublish_rest_createContentType:

                        }

                        if (0 === strpos($pathinfo, '/api/ezp/v2/content/types')) {
                            // ezpublish_rest_listContentTypes
                            if ($pathinfo === '/api/ezp/v2/content/types') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_listContentTypes;
                                }

                                return array (  '_controller' => 'ezpublish_rest.controller.content_type:listContentTypes',  '_route' => 'ezpublish_rest_listContentTypes',);
                            }
                            not_ezpublish_rest_listContentTypes:

                            // ezpublish_rest_copyContentType
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'COPY') {
                                    $allow[] = 'COPY';
                                    goto not_ezpublish_rest_copyContentType;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_copyContentType')), array (  '_controller' => 'ezpublish_rest.controller.content_type:copyContentType',));
                            }
                            not_ezpublish_rest_copyContentType:

                            // ezpublish_rest_loadContentType
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_loadContentType;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadContentType')), array (  '_controller' => 'ezpublish_rest.controller.content_type:loadContentType',));
                            }
                            not_ezpublish_rest_loadContentType:

                            // ezpublish_rest_createContentTypeDraft
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_ezpublish_rest_createContentTypeDraft;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_createContentTypeDraft')), array (  '_controller' => 'ezpublish_rest.controller.content_type:createContentTypeDraft',));
                            }
                            not_ezpublish_rest_createContentTypeDraft:

                            // ezpublish_rest_deleteContentType
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'DELETE') {
                                    $allow[] = 'DELETE';
                                    goto not_ezpublish_rest_deleteContentType;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteContentType')), array (  '_controller' => 'ezpublish_rest.controller.content_type:deleteContentType',));
                            }
                            not_ezpublish_rest_deleteContentType:

                            // ezpublish_rest_deleteContentTypeDraft
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'DELETE') {
                                    $allow[] = 'DELETE';
                                    goto not_ezpublish_rest_deleteContentTypeDraft;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteContentTypeDraft')), array (  '_controller' => 'ezpublish_rest.controller.content_type:deleteContentTypeDraft',));
                            }
                            not_ezpublish_rest_deleteContentTypeDraft:

                            // ezpublish_rest_loadContentTypeFieldDefinitionList
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/fieldDefinitions$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_loadContentTypeFieldDefinitionList;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadContentTypeFieldDefinitionList')), array (  '_controller' => 'ezpublish_rest.controller.content_type:loadContentTypeFieldDefinitionList',));
                            }
                            not_ezpublish_rest_loadContentTypeFieldDefinitionList:

                            // ezpublish_rest_loadContentTypeFieldDefinition
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/fieldDefinitions/(?P<fieldDefinitionId>\\d+)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_loadContentTypeFieldDefinition;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadContentTypeFieldDefinition')), array (  '_controller' => 'ezpublish_rest.controller.content_type:loadContentTypeFieldDefinition',));
                            }
                            not_ezpublish_rest_loadContentTypeFieldDefinition:

                            // ezpublish_rest_loadContentTypeDraft
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_loadContentTypeDraft;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadContentTypeDraft')), array (  '_controller' => 'ezpublish_rest.controller.content_type:loadContentTypeDraft',));
                            }
                            not_ezpublish_rest_loadContentTypeDraft:

                            // ezpublish_rest_updateContentTypeDraft
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'PATCH') {
                                    $allow[] = 'PATCH';
                                    goto not_ezpublish_rest_updateContentTypeDraft;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateContentTypeDraft')), array (  '_controller' => 'ezpublish_rest.controller.content_type:updateContentTypeDraft',));
                            }
                            not_ezpublish_rest_updateContentTypeDraft:

                            // ezpublish_rest_publishContentTypeDraft
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'PUBLISH') {
                                    $allow[] = 'PUBLISH';
                                    goto not_ezpublish_rest_publishContentTypeDraft;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_publishContentTypeDraft')), array (  '_controller' => 'ezpublish_rest.controller.content_type:publishContentTypeDraft',));
                            }
                            not_ezpublish_rest_publishContentTypeDraft:

                            // ezpublish_rest_loadContentTypeDraftFieldDefinitionList
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft/fieldDefinitions$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_loadContentTypeDraftFieldDefinitionList;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadContentTypeDraftFieldDefinitionList')), array (  '_controller' => 'ezpublish_rest.controller.content_type:loadContentTypeDraftFieldDefinitionList',));
                            }
                            not_ezpublish_rest_loadContentTypeDraftFieldDefinitionList:

                            // ezpublish_rest_addContentTypeDraftFieldDefinition
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft/fieldDefinitions$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_ezpublish_rest_addContentTypeDraftFieldDefinition;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_addContentTypeDraftFieldDefinition')), array (  '_controller' => 'ezpublish_rest.controller.content_type:addContentTypeDraftFieldDefinition',));
                            }
                            not_ezpublish_rest_addContentTypeDraftFieldDefinition:

                            // ezpublish_rest_loadContentTypeDraftFieldDefinition
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft/fieldDefinitions/(?P<fieldDefinitionId>\\d+)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_loadContentTypeDraftFieldDefinition;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadContentTypeDraftFieldDefinition')), array (  '_controller' => 'ezpublish_rest.controller.content_type:loadContentTypeDraftFieldDefinition',));
                            }
                            not_ezpublish_rest_loadContentTypeDraftFieldDefinition:

                            // ezpublish_rest_updateContentTypeDraftFieldDefinition
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft/fieldDefinitions/(?P<fieldDefinitionId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'PATCH') {
                                    $allow[] = 'PATCH';
                                    goto not_ezpublish_rest_updateContentTypeDraftFieldDefinition;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateContentTypeDraftFieldDefinition')), array (  '_controller' => 'ezpublish_rest.controller.content_type:updateContentTypeDraftFieldDefinition',));
                            }
                            not_ezpublish_rest_updateContentTypeDraftFieldDefinition:

                            // ezpublish_rest_removeContentTypeDraftFieldDefinition
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft/fieldDefinitions/(?P<fieldDefinitionId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'DELETE') {
                                    $allow[] = 'DELETE';
                                    goto not_ezpublish_rest_removeContentTypeDraftFieldDefinition;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_removeContentTypeDraftFieldDefinition')), array (  '_controller' => 'ezpublish_rest.controller.content_type:removeContentTypeDraftFieldDefinition',));
                            }
                            not_ezpublish_rest_removeContentTypeDraftFieldDefinition:

                            // ezpublish_rest_loadGroupsOfContentType
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/groups$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_loadGroupsOfContentType;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadGroupsOfContentType')), array (  '_controller' => 'ezpublish_rest.controller.content_type:loadGroupsOfContentType',));
                            }
                            not_ezpublish_rest_loadGroupsOfContentType:

                            // ezpublish_rest_linkContentTypeToGroup
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/groups$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_ezpublish_rest_linkContentTypeToGroup;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_linkContentTypeToGroup')), array (  '_controller' => 'ezpublish_rest.controller.content_type:linkContentTypeToGroup',));
                            }
                            not_ezpublish_rest_linkContentTypeToGroup:

                            // ezpublish_rest_unlinkContentTypeFromGroup
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/groups/(?P<contentTypeGroupId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'DELETE') {
                                    $allow[] = 'DELETE';
                                    goto not_ezpublish_rest_unlinkContentTypeFromGroup;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_unlinkContentTypeFromGroup')), array (  '_controller' => 'ezpublish_rest.controller.content_type:unlinkContentTypeFromGroup',));
                            }
                            not_ezpublish_rest_unlinkContentTypeFromGroup:

                        }

                    }

                    if (0 === strpos($pathinfo, '/api/ezp/v2/content/trash')) {
                        // ezpublish_rest_loadTrashItems
                        if ($pathinfo === '/api/ezp/v2/content/trash') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_ezpublish_rest_loadTrashItems;
                            }

                            return array (  '_controller' => 'ezpublish_rest.controller.trash:loadTrashItems',  '_route' => 'ezpublish_rest_loadTrashItems',);
                        }
                        not_ezpublish_rest_loadTrashItems:

                        // ezpublish_rest_emptyTrash
                        if ($pathinfo === '/api/ezp/v2/content/trash') {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_ezpublish_rest_emptyTrash;
                            }

                            return array (  '_controller' => 'ezpublish_rest.controller.trash:emptyTrash',  '_route' => 'ezpublish_rest_emptyTrash',);
                        }
                        not_ezpublish_rest_emptyTrash:

                        // ezpublish_rest_loadTrashItem
                        if (preg_match('#^/api/ezp/v2/content/trash/(?P<trashItemId>\\d+)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_ezpublish_rest_loadTrashItem;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadTrashItem')), array (  '_controller' => 'ezpublish_rest.controller.trash:loadTrashItem',));
                        }
                        not_ezpublish_rest_loadTrashItem:

                        // ezpublish_rest_deleteTrashItem
                        if (preg_match('#^/api/ezp/v2/content/trash/(?P<trashItemId>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_ezpublish_rest_deleteTrashItem;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteTrashItem')), array (  '_controller' => 'ezpublish_rest.controller.trash:deleteTrashItem',));
                        }
                        not_ezpublish_rest_deleteTrashItem:

                        // ezpublish_rest_restoreTrashItem
                        if (preg_match('#^/api/ezp/v2/content/trash/(?P<trashItemId>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'MOVE') {
                                $allow[] = 'MOVE';
                                goto not_ezpublish_rest_restoreTrashItem;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_restoreTrashItem')), array (  '_controller' => 'ezpublish_rest.controller.trash:restoreTrashItem',));
                        }
                        not_ezpublish_rest_restoreTrashItem:

                    }

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/urlwildcards')) {
                    // ezpublish_rest_listURLWildcards
                    if ($pathinfo === '/api/ezp/v2/content/urlwildcards') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_listURLWildcards;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.url_wildcard:listURLWildcards',  '_route' => 'ezpublish_rest_listURLWildcards',);
                    }
                    not_ezpublish_rest_listURLWildcards:

                    // ezpublish_rest_createURLWildcard
                    if ($pathinfo === '/api/ezp/v2/content/urlwildcards') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createURLWildcard;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.url_wildcard:createURLWildcard',  '_route' => 'ezpublish_rest_createURLWildcard',);
                    }
                    not_ezpublish_rest_createURLWildcard:

                    // ezpublish_rest_loadURLWildcard
                    if (preg_match('#^/api/ezp/v2/content/urlwildcards/(?P<urlWildcardId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadURLWildcard;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadURLWildcard')), array (  '_controller' => 'ezpublish_rest.controller.url_wildcard:loadURLWildcard',));
                    }
                    not_ezpublish_rest_loadURLWildcard:

                    // ezpublish_rest_deleteURLWildcard
                    if (preg_match('#^/api/ezp/v2/content/urlwildcards/(?P<urlWildcardId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteURLWildcard;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteURLWildcard')), array (  '_controller' => 'ezpublish_rest.controller.url_wildcard:deleteURLWildcard',));
                    }
                    not_ezpublish_rest_deleteURLWildcard:

                }

            }

            if (0 === strpos($pathinfo, '/api/ezp/v2/user')) {
                // ezpublish_rest_listPoliciesForUser
                if ($pathinfo === '/api/ezp/v2/user/policies') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ezpublish_rest_listPoliciesForUser;
                    }

                    return array (  '_controller' => 'ezpublish_rest.controller.role:listPoliciesForUser',  '_route' => 'ezpublish_rest_listPoliciesForUser',);
                }
                not_ezpublish_rest_listPoliciesForUser:

                if (0 === strpos($pathinfo, '/api/ezp/v2/user/roles')) {
                    // ezpublish_rest_listRoles
                    if ($pathinfo === '/api/ezp/v2/user/roles') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_listRoles;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.role:listRoles',  '_route' => 'ezpublish_rest_listRoles',);
                    }
                    not_ezpublish_rest_listRoles:

                    // ezpublish_rest_createRole
                    if ($pathinfo === '/api/ezp/v2/user/roles') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createRole;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.role:createRole',  '_route' => 'ezpublish_rest_createRole',);
                    }
                    not_ezpublish_rest_createRole:

                    // ezpublish_rest_loadRole
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadRole;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadRole')), array (  '_controller' => 'ezpublish_rest.controller.role:loadRole',));
                    }
                    not_ezpublish_rest_loadRole:

                    // ezpublish_rest_updateRole
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_ezpublish_rest_updateRole;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateRole')), array (  '_controller' => 'ezpublish_rest.controller.role:updateRole',));
                    }
                    not_ezpublish_rest_updateRole:

                    // ezpublish_rest_deleteRole
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteRole;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteRole')), array (  '_controller' => 'ezpublish_rest.controller.role:deleteRole',));
                    }
                    not_ezpublish_rest_deleteRole:

                    // ezpublish_rest_loadPolicies
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/policies$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadPolicies;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadPolicies')), array (  '_controller' => 'ezpublish_rest.controller.role:loadPolicies',));
                    }
                    not_ezpublish_rest_loadPolicies:

                    // ezpublish_rest_addPolicy
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/policies$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_addPolicy;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_addPolicy')), array (  '_controller' => 'ezpublish_rest.controller.role:addPolicy',));
                    }
                    not_ezpublish_rest_addPolicy:

                    // ezpublish_rest_deletePolicies
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/policies$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deletePolicies;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deletePolicies')), array (  '_controller' => 'ezpublish_rest.controller.role:deletePolicies',));
                    }
                    not_ezpublish_rest_deletePolicies:

                    // ezpublish_rest_loadPolicy
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/policies/(?P<policyId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadPolicy;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadPolicy')), array (  '_controller' => 'ezpublish_rest.controller.role:loadPolicy',));
                    }
                    not_ezpublish_rest_loadPolicy:

                    // ezpublish_rest_updatePolicy
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/policies/(?P<policyId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_ezpublish_rest_updatePolicy;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updatePolicy')), array (  '_controller' => 'ezpublish_rest.controller.role:updatePolicy',));
                    }
                    not_ezpublish_rest_updatePolicy:

                    // ezpublish_rest_deletePolicy
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/policies/(?P<policyId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deletePolicy;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deletePolicy')), array (  '_controller' => 'ezpublish_rest.controller.role:deletePolicy',));
                    }
                    not_ezpublish_rest_deletePolicy:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/user/users')) {
                    // ezpublish_rest_loadUsers
                    if ($pathinfo === '/api/ezp/v2/user/users') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadUsers;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.user:loadUsers',  '_route' => 'ezpublish_rest_loadUsers',);
                    }
                    not_ezpublish_rest_loadUsers:

                    // ezpublish_rest_loadUser
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadUser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadUser')), array (  '_controller' => 'ezpublish_rest.controller.user:loadUser',));
                    }
                    not_ezpublish_rest_loadUser:

                    // ezpublish_rest_updateUser
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_ezpublish_rest_updateUser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateUser')), array (  '_controller' => 'ezpublish_rest.controller.user:updateUser',));
                    }
                    not_ezpublish_rest_updateUser:

                    // ezpublish_rest_deleteUser
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteUser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteUser')), array (  '_controller' => 'ezpublish_rest.controller.user:deleteUser',));
                    }
                    not_ezpublish_rest_deleteUser:

                    // ezpublish_rest_loadUserGroupsOfUser
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/groups$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadUserGroupsOfUser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadUserGroupsOfUser')), array (  '_controller' => 'ezpublish_rest.controller.user:loadUserGroupsOfUser',));
                    }
                    not_ezpublish_rest_loadUserGroupsOfUser:

                    // ezpublish_rest_assignUserToUserGroup
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/groups$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_assignUserToUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_assignUserToUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.user:assignUserToUserGroup',));
                    }
                    not_ezpublish_rest_assignUserToUserGroup:

                    // ezpublish_rest_unassignUserFromUserGroup
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/groups/(?P<groupPath>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_unassignUserFromUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_unassignUserFromUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.user:unassignUserFromUserGroup',));
                    }
                    not_ezpublish_rest_unassignUserFromUserGroup:

                    // ezpublish_rest_loadUserDrafts
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/drafts$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadUserDrafts;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadUserDrafts')), array (  '_controller' => 'ezpublish_rest.controller.user:loadUserDrafts',));
                    }
                    not_ezpublish_rest_loadUserDrafts:

                    // ezpublish_rest_loadRoleAssignmentsForUser
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/roles$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadRoleAssignmentsForUser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadRoleAssignmentsForUser')), array (  '_controller' => 'ezpublish_rest.controller.role:loadRoleAssignmentsForUser',));
                    }
                    not_ezpublish_rest_loadRoleAssignmentsForUser:

                    // ezpublish_rest_assignRoleToUser
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/roles$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_assignRoleToUser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_assignRoleToUser')), array (  '_controller' => 'ezpublish_rest.controller.role:assignRoleToUser',));
                    }
                    not_ezpublish_rest_assignRoleToUser:

                    // ezpublish_rest_loadRoleAssignmentForUser
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadRoleAssignmentForUser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadRoleAssignmentForUser')), array (  '_controller' => 'ezpublish_rest.controller.role:loadRoleAssignmentForUser',));
                    }
                    not_ezpublish_rest_loadRoleAssignmentForUser:

                    // ezpublish_rest_unassignRoleFromUser
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_unassignRoleFromUser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_unassignRoleFromUser')), array (  '_controller' => 'ezpublish_rest.controller.role:unassignRoleFromUser',));
                    }
                    not_ezpublish_rest_unassignRoleFromUser:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/user/groups')) {
                    // ezpublish_rest_loadUserGroups
                    if ($pathinfo === '/api/ezp/v2/user/groups') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadUserGroups;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.user:loadUserGroups',  '_route' => 'ezpublish_rest_loadUserGroups',);
                    }
                    not_ezpublish_rest_loadUserGroups:

                    // ezpublish_rest_loadRootUserGroup
                    if ($pathinfo === '/api/ezp/v2/user/groups/root') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadRootUserGroup;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.user:loadRootUserGroup',  '_route' => 'ezpublish_rest_loadRootUserGroup',);
                    }
                    not_ezpublish_rest_loadRootUserGroup:

                    // ezpublish_rest_createRootUserGroup
                    if ($pathinfo === '/api/ezp/v2/user/groups/subgroups') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createRootUserGroup;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.user:createUserGroup',  '_route' => 'ezpublish_rest_createRootUserGroup',);
                    }
                    not_ezpublish_rest_createRootUserGroup:

                    // ezpublish_rest_loadUserGroup
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.user:loadUserGroup',));
                    }
                    not_ezpublish_rest_loadUserGroup:

                    // ezpublish_rest_updateUserGroup
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_ezpublish_rest_updateUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.user:updateUserGroup',));
                    }
                    not_ezpublish_rest_updateUserGroup:

                    // ezpublish_rest_deleteUserGroup
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.user:deleteUserGroup',));
                    }
                    not_ezpublish_rest_deleteUserGroup:

                    // ezpublish_rest_moveUserGroup
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'MOVE') {
                            $allow[] = 'MOVE';
                            goto not_ezpublish_rest_moveUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_moveUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.user:moveUserGroup',));
                    }
                    not_ezpublish_rest_moveUserGroup:

                    // ezpublish_rest_loadSubUserGroups
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/subgroups$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadSubUserGroups;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadSubUserGroups')), array (  '_controller' => 'ezpublish_rest.controller.user:loadSubUserGroups',));
                    }
                    not_ezpublish_rest_loadSubUserGroups:

                    // ezpublish_rest_createUserGroup
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/subgroups$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_createUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.user:createUserGroup',));
                    }
                    not_ezpublish_rest_createUserGroup:

                    // ezpublish_rest_loadUsersFromGroup
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/users$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadUsersFromGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadUsersFromGroup')), array (  '_controller' => 'ezpublish_rest.controller.user:loadUsersFromGroup',));
                    }
                    not_ezpublish_rest_loadUsersFromGroup:

                    // ezpublish_rest_createUser
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/users$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createUser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_createUser')), array (  '_controller' => 'ezpublish_rest.controller.user:createUser',));
                    }
                    not_ezpublish_rest_createUser:

                    // ezpublish_rest_loadRoleAssignmentsForUserGroup
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/roles$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadRoleAssignmentsForUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadRoleAssignmentsForUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.role:loadRoleAssignmentsForUserGroup',));
                    }
                    not_ezpublish_rest_loadRoleAssignmentsForUserGroup:

                    // ezpublish_rest_assignRoleToUserGroup
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/roles$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_assignRoleToUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_assignRoleToUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.role:assignRoleToUserGroup',));
                    }
                    not_ezpublish_rest_assignRoleToUserGroup:

                    // ezpublish_rest_loadRoleAssignmentForUserGroup
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadRoleAssignmentForUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadRoleAssignmentForUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.role:loadRoleAssignmentForUserGroup',));
                    }
                    not_ezpublish_rest_loadRoleAssignmentForUserGroup:

                    // ezpublish_rest_unassignRoleFromUserGroup
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_unassignRoleFromUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_unassignRoleFromUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.role:unassignRoleFromUserGroup',));
                    }
                    not_ezpublish_rest_unassignRoleFromUserGroup:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/user/sessions')) {
                    // ezpublish_rest_createSession
                    if ($pathinfo === '/api/ezp/v2/user/sessions') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createSession;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.user:createSession',  '_route' => 'ezpublish_rest_createSession',);
                    }
                    not_ezpublish_rest_createSession:

                    // ezpublish_rest_deleteSession
                    if (preg_match('#^/api/ezp/v2/user/sessions/(?P<sessionId>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteSession;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteSession')), array (  '_controller' => 'ezpublish_rest.controller.user:deleteSession',));
                    }
                    not_ezpublish_rest_deleteSession:

                    // ezpublish_rest_refreshSession
                    if (preg_match('#^/api/ezp/v2/user/sessions/(?P<sessionId>[^/]++)/refresh$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_refreshSession;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_refreshSession')), array (  '_controller' => 'ezpublish_rest.controller.user:refreshSession',));
                    }
                    not_ezpublish_rest_refreshSession:

                }

            }

            if (0 === strpos($pathinfo, '/api/ezp/v2/content')) {
                // ezpublish_rest_listGlobalURLAliases
                if ($pathinfo === '/api/ezp/v2/content/urlaliases') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ezpublish_rest_listGlobalURLAliases;
                    }

                    return array (  '_controller' => 'ezpublish_rest.controller.url_alias:listGlobalURLAliases',  '_route' => 'ezpublish_rest_listGlobalURLAliases',);
                }
                not_ezpublish_rest_listGlobalURLAliases:

                // ezpublish_rest_listLocationURLAliases
                if (0 === strpos($pathinfo, '/api/ezp/v2/content/locations') && preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)/urlaliases$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ezpublish_rest_listLocationURLAliases;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_listLocationURLAliases')), array (  '_controller' => 'ezpublish_rest.controller.url_alias:listLocationURLAliases',));
                }
                not_ezpublish_rest_listLocationURLAliases:

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/urlaliases')) {
                    // ezpublish_rest_createURLAlias
                    if ($pathinfo === '/api/ezp/v2/content/urlaliases') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createURLAlias;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.url_alias:createURLAlias',  '_route' => 'ezpublish_rest_createURLAlias',);
                    }
                    not_ezpublish_rest_createURLAlias:

                    // ezpublish_rest_loadURLAlias
                    if (preg_match('#^/api/ezp/v2/content/urlaliases/(?P<urlAliasId>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadURLAlias;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadURLAlias')), array (  '_controller' => 'ezpublish_rest.controller.url_alias:loadURLAlias',));
                    }
                    not_ezpublish_rest_loadURLAlias:

                    // ezpublish_rest_deleteURLAlias
                    if (preg_match('#^/api/ezp/v2/content/urlaliases/(?P<urlAliasId>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteURLAlias;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteURLAlias')), array (  '_controller' => 'ezpublish_rest.controller.url_alias:deleteURLAlias',));
                    }
                    not_ezpublish_rest_deleteURLAlias:

                }

            }

            // ezpublish_rest_loadCountryList
            if ($pathinfo === '/api/ezp/v2/services/countries') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadCountryList;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.services:loadCountryList',  '_route' => 'ezpublish_rest_loadCountryList',);
            }
            not_ezpublish_rest_loadCountryList:

            // ezpublish_rest_options_
            if ($pathinfo === '/api/ezp/v2/') {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_ezpublish_rest_options_;
                }

                return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',  '_route' => 'ezpublish_rest_options_',);
            }
            not_ezpublish_rest_options_:

            if (0 === strpos($pathinfo, '/api/ezp/v2/content')) {
                if (0 === strpos($pathinfo, '/api/ezp/v2/content/sections')) {
                    // ezpublish_rest_options_content_sections
                    if ($pathinfo === '/api/ezp/v2/content/sections') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_sections;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',  '_route' => 'ezpublish_rest_options_content_sections',);
                    }
                    not_ezpublish_rest_options_content_sections:

                    // ezpublish_rest_options_content_sections_{sectionId}
                    if (preg_match('#^/api/ezp/v2/content/sections/(?P<sectionId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_sections_sectionId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_sections_{sectionId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE',));
                    }
                    not_ezpublish_rest_options_content_sections_sectionId:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects')) {
                    // ezpublish_rest_options_content_objects
                    if ($pathinfo === '/api/ezp/v2/content/objects') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_objects;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',  '_route' => 'ezpublish_rest_options_content_objects',);
                    }
                    not_ezpublish_rest_options_content_objects:

                    // ezpublish_rest_options_content_objects_{contentId}
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_objects_contentId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objects_{contentId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'PATCH,GET,DELETE,COPY',));
                    }
                    not_ezpublish_rest_options_content_objects_contentId:

                    // ezpublish_rest_options_content_objects_{contentId}_relations
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/relations$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_objects_contentId_relations;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objects_{contentId}_relations')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',));
                    }
                    not_ezpublish_rest_options_content_objects_contentId_relations:

                    // ezpublish_rest_options_content_objects_{contentId}_versions
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_objects_contentId_versions;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objects_{contentId}_versions')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',));
                    }
                    not_ezpublish_rest_options_content_objects_contentId_versions:

                    // ezpublish_rest_options_content_objects_{contentId}_versions_{versionNumber}_relations
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)/relations$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_objects_contentId_versions_versionNumber_relations;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objects_{contentId}_versions_{versionNumber}_relations')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                    }
                    not_ezpublish_rest_options_content_objects_contentId_versions_versionNumber_relations:

                    // ezpublish_rest_options_content_objects_{contentId}_versions_{versionNumber}_relations_{relationId}
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)/relations/(?P<relationId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_objects_contentId_versions_versionNumber_relations_relationId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objects_{contentId}_versions_{versionNumber}_relations_{relationId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,DELETE',));
                    }
                    not_ezpublish_rest_options_content_objects_contentId_versions_versionNumber_relations_relationId:

                    // ezpublish_rest_options_content_objects_{contentId}_versions_{versionNumber}
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_objects_contentId_versions_versionNumber;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objects_{contentId}_versions_{versionNumber}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE,COPY,PUBLISH',));
                    }
                    not_ezpublish_rest_options_content_objects_contentId_versions_versionNumber:

                    // ezpublish_rest_options_content_objects_{contentId}_currentversion
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/currentversion$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_objects_contentId_currentversion;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objects_{contentId}_currentversion')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,COPY',));
                    }
                    not_ezpublish_rest_options_content_objects_contentId_currentversion:

                }

                // ezpublish_rest_options_content_binary_images_{imageId}_variations_{variationIdentifier}
                if (0 === strpos($pathinfo, '/api/ezp/v2/content/binary/images') && preg_match('#^/api/ezp/v2/content/binary/images/(?P<imageId>\\d+-\\d+)/variations/(?P<variationIdentifier>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_ezpublish_rest_options_content_binary_images_imageId_variations_variationIdentifier;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_binary_images_{imageId}_variations_{variationIdentifier}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',));
                }
                not_ezpublish_rest_options_content_binary_images_imageId_variations_variationIdentifier:

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/views')) {
                    // ezpublish_rest_options_content_views
                    if ($pathinfo === '/api/ezp/v2/content/views') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_views;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'POST,GET',  '_route' => 'ezpublish_rest_options_content_views',);
                    }
                    not_ezpublish_rest_options_content_views:

                    // ezpublish_rest_options_content_views_{viewId}
                    if (preg_match('#^/api/ezp/v2/content/views/(?P<viewId>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_views_viewId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_views_{viewId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',));
                    }
                    not_ezpublish_rest_options_content_views_viewId:

                    // ezpublish_rest_options_content_views_{viewId}_results
                    if (preg_match('#^/api/ezp/v2/content/views/(?P<viewId>[^/]++)/results$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_views_viewId_results;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_views_{viewId}_results')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',));
                    }
                    not_ezpublish_rest_options_content_views_viewId_results:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects')) {
                    if (0 === strpos($pathinfo, '/api/ezp/v2/content/objectstategroups')) {
                        // ezpublish_rest_options_content_objectstategroups
                        if ($pathinfo === '/api/ezp/v2/content/objectstategroups') {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_ezpublish_rest_options_content_objectstategroups;
                            }

                            return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',  '_route' => 'ezpublish_rest_options_content_objectstategroups',);
                        }
                        not_ezpublish_rest_options_content_objectstategroups:

                        // ezpublish_rest_options_content_objectstategroups_{objectStateGroupId}
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_ezpublish_rest_options_content_objectstategroups_objectStateGroupId;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objectstategroups_{objectStateGroupId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE',));
                        }
                        not_ezpublish_rest_options_content_objectstategroups_objectStateGroupId:

                        // ezpublish_rest_options_content_objectstategroups_{objectStateGroupId}_objectstates
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)/objectstates$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_ezpublish_rest_options_content_objectstategroups_objectStateGroupId_objectstates;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objectstategroups_{objectStateGroupId}_objectstates')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                        }
                        not_ezpublish_rest_options_content_objectstategroups_objectStateGroupId_objectstates:

                        // ezpublish_rest_options_content_objectstategroups_{objectStateGroupId}_objectstates_{objectStateId}
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)/objectstates/(?P<objectStateId>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_ezpublish_rest_options_content_objectstategroups_objectStateGroupId_objectstates_objectStateId;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objectstategroups_{objectStateGroupId}_objectstates_{objectStateId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE',));
                        }
                        not_ezpublish_rest_options_content_objectstategroups_objectStateGroupId_objectstates_objectStateId:

                    }

                    // ezpublish_rest_options_content_objects_{contentId}_objectstates
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/objectstates$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_objects_contentId_objectstates;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objects_{contentId}_objectstates')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH',));
                    }
                    not_ezpublish_rest_options_content_objects_contentId_objectstates:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/locations')) {
                    // ezpublish_rest_options_content_locations
                    if ($pathinfo === '/api/ezp/v2/content/locations') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_locations;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',  '_route' => 'ezpublish_rest_options_content_locations',);
                    }
                    not_ezpublish_rest_options_content_locations:

                    // ezpublish_rest_options_content_locations_{locationPath}
                    if (preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_locations_locationPath;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_locations_{locationPath}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE,COPY,MOVE,SWAP',));
                    }
                    not_ezpublish_rest_options_content_locations_locationPath:

                    // ezpublish_rest_options_content_locations_{locationPath}_children
                    if (preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)/children$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_locations_locationPath_children;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_locations_{locationPath}_children')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',));
                    }
                    not_ezpublish_rest_options_content_locations_locationPath_children:

                }

                // ezpublish_rest_options_content_objects_{contentId}_locations
                if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/locations$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_ezpublish_rest_options_content_objects_contentId_locations;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objects_{contentId}_locations')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                }
                not_ezpublish_rest_options_content_objects_contentId_locations:

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/t')) {
                    if (0 === strpos($pathinfo, '/api/ezp/v2/content/type')) {
                        if (0 === strpos($pathinfo, '/api/ezp/v2/content/typegroups')) {
                            // ezpublish_rest_options_content_typegroups
                            if ($pathinfo === '/api/ezp/v2/content/typegroups') {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_typegroups;
                                }

                                return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',  '_route' => 'ezpublish_rest_options_content_typegroups',);
                            }
                            not_ezpublish_rest_options_content_typegroups:

                            // ezpublish_rest_options_content_typegroups_{contentTypeGroupId}
                            if (preg_match('#^/api/ezp/v2/content/typegroups/(?P<contentTypeGroupId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_typegroups_contentTypeGroupId;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_typegroups_{contentTypeGroupId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE',));
                            }
                            not_ezpublish_rest_options_content_typegroups_contentTypeGroupId:

                            // ezpublish_rest_options_content_typegroups_{contentTypeGroupId}_types
                            if (preg_match('#^/api/ezp/v2/content/typegroups/(?P<contentTypeGroupId>\\d+)/types$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_typegroups_contentTypeGroupId_types;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_typegroups_{contentTypeGroupId}_types')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                            }
                            not_ezpublish_rest_options_content_typegroups_contentTypeGroupId_types:

                        }

                        if (0 === strpos($pathinfo, '/api/ezp/v2/content/types')) {
                            // ezpublish_rest_options_content_types
                            if ($pathinfo === '/api/ezp/v2/content/types') {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_types;
                                }

                                return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',  '_route' => 'ezpublish_rest_options_content_types',);
                            }
                            not_ezpublish_rest_options_content_types:

                            // ezpublish_rest_options_content_types_{contentTypeId}
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_types_contentTypeId;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_types_{contentTypeId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'COPY,GET,POST,DELETE',));
                            }
                            not_ezpublish_rest_options_content_types_contentTypeId:

                            // ezpublish_rest_options_content_types_{contentTypeId}_fieldDefinitions
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/fieldDefinitions$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_types_contentTypeId_fieldDefinitions;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_types_{contentTypeId}_fieldDefinitions')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',));
                            }
                            not_ezpublish_rest_options_content_types_contentTypeId_fieldDefinitions:

                            // ezpublish_rest_options_content_types_{contentTypeId}_fieldDefinitions_{fieldDefinitionId}
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/fieldDefinitions/(?P<fieldDefinitionId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_types_contentTypeId_fieldDefinitions_fieldDefinitionId;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_types_{contentTypeId}_fieldDefinitions_{fieldDefinitionId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',));
                            }
                            not_ezpublish_rest_options_content_types_contentTypeId_fieldDefinitions_fieldDefinitionId:

                            // ezpublish_rest_options_content_types_{contentTypeId}_draft
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_types_contentTypeId_draft;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_types_{contentTypeId}_draft')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'DELETE,GET,PATCH,PUBLISH',));
                            }
                            not_ezpublish_rest_options_content_types_contentTypeId_draft:

                            // ezpublish_rest_options_content_types_{contentTypeId}_draft_fieldDefinitions
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft/fieldDefinitions$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_types_contentTypeId_draft_fieldDefinitions;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_types_{contentTypeId}_draft_fieldDefinitions')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                            }
                            not_ezpublish_rest_options_content_types_contentTypeId_draft_fieldDefinitions:

                            // ezpublish_rest_options_content_types_{contentTypeId}_draft_fieldDefinitions_{fieldDefinitionId}
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft/fieldDefinitions/(?P<fieldDefinitionId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_types_contentTypeId_draft_fieldDefinitions_fieldDefinitionId;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_types_{contentTypeId}_draft_fieldDefinitions_{fieldDefinitionId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE',));
                            }
                            not_ezpublish_rest_options_content_types_contentTypeId_draft_fieldDefinitions_fieldDefinitionId:

                            // ezpublish_rest_options_content_types_{contentTypeId}_groups
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/groups$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_types_contentTypeId_groups;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_types_{contentTypeId}_groups')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                            }
                            not_ezpublish_rest_options_content_types_contentTypeId_groups:

                            // ezpublish_rest_options_content_types_{contentTypeId}_groups_{contentTypeGroupId}
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/groups/(?P<contentTypeGroupId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_types_contentTypeId_groups_contentTypeGroupId;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_types_{contentTypeId}_groups_{contentTypeGroupId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'DELETE',));
                            }
                            not_ezpublish_rest_options_content_types_contentTypeId_groups_contentTypeGroupId:

                        }

                    }

                    if (0 === strpos($pathinfo, '/api/ezp/v2/content/trash')) {
                        // ezpublish_rest_options_content_trash
                        if ($pathinfo === '/api/ezp/v2/content/trash') {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_ezpublish_rest_options_content_trash;
                            }

                            return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,DELETE',  '_route' => 'ezpublish_rest_options_content_trash',);
                        }
                        not_ezpublish_rest_options_content_trash:

                        // ezpublish_rest_options_content_trash_{trashItemId}
                        if (preg_match('#^/api/ezp/v2/content/trash/(?P<trashItemId>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_ezpublish_rest_options_content_trash_trashItemId;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_trash_{trashItemId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,DELETE,MOVE',));
                        }
                        not_ezpublish_rest_options_content_trash_trashItemId:

                    }

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/urlwildcards')) {
                    // ezpublish_rest_options_content_urlwildcards
                    if ($pathinfo === '/api/ezp/v2/content/urlwildcards') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_urlwildcards;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',  '_route' => 'ezpublish_rest_options_content_urlwildcards',);
                    }
                    not_ezpublish_rest_options_content_urlwildcards:

                    // ezpublish_rest_options_content_urlwildcards_{urlWildcardId}
                    if (preg_match('#^/api/ezp/v2/content/urlwildcards/(?P<urlWildcardId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_urlwildcards_urlWildcardId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_urlwildcards_{urlWildcardId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,DELETE',));
                    }
                    not_ezpublish_rest_options_content_urlwildcards_urlWildcardId:

                }

            }

            if (0 === strpos($pathinfo, '/api/ezp/v2/user')) {
                // ezpublish_rest_options_user_policies
                if ($pathinfo === '/api/ezp/v2/user/policies') {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_ezpublish_rest_options_user_policies;
                    }

                    return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',  '_route' => 'ezpublish_rest_options_user_policies',);
                }
                not_ezpublish_rest_options_user_policies:

                if (0 === strpos($pathinfo, '/api/ezp/v2/user/roles')) {
                    // ezpublish_rest_options_user_roles
                    if ($pathinfo === '/api/ezp/v2/user/roles') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_roles;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',  '_route' => 'ezpublish_rest_options_user_roles',);
                    }
                    not_ezpublish_rest_options_user_roles:

                    // ezpublish_rest_options_user_roles_{roleId}
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_roles_roleId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_roles_{roleId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE',));
                    }
                    not_ezpublish_rest_options_user_roles_roleId:

                    // ezpublish_rest_options_user_roles_{roleId}_policies
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/policies$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_roles_roleId_policies;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_roles_{roleId}_policies')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST,DELETE',));
                    }
                    not_ezpublish_rest_options_user_roles_roleId_policies:

                    // ezpublish_rest_options_user_roles_{roleId}_policies_{policyId}
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/policies/(?P<policyId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_roles_roleId_policies_policyId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_roles_{roleId}_policies_{policyId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE',));
                    }
                    not_ezpublish_rest_options_user_roles_roleId_policies_policyId:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/user/users')) {
                    // ezpublish_rest_options_user_users
                    if ($pathinfo === '/api/ezp/v2/user/users') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_users;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',  '_route' => 'ezpublish_rest_options_user_users',);
                    }
                    not_ezpublish_rest_options_user_users:

                    // ezpublish_rest_options_user_users_{userId}
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_users_userId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_users_{userId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE',));
                    }
                    not_ezpublish_rest_options_user_users_userId:

                    // ezpublish_rest_options_user_users_{userId}_groups
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/groups$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_users_userId_groups;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_users_{userId}_groups')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                    }
                    not_ezpublish_rest_options_user_users_userId_groups:

                    // ezpublish_rest_options_user_users_{userId}_groups_{groupPath}
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/groups/(?P<groupPath>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_users_userId_groups_groupPath;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_users_{userId}_groups_{groupPath}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'DELETE',));
                    }
                    not_ezpublish_rest_options_user_users_userId_groups_groupPath:

                    // ezpublish_rest_options_user_users_{userId}_drafts
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/drafts$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_users_userId_drafts;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_users_{userId}_drafts')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',));
                    }
                    not_ezpublish_rest_options_user_users_userId_drafts:

                    // ezpublish_rest_options_user_users_{userId}_roles
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/roles$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_users_userId_roles;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_users_{userId}_roles')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                    }
                    not_ezpublish_rest_options_user_users_userId_roles:

                    // ezpublish_rest_options_user_users_{userId}_roles_{roleId}
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_users_userId_roles_roleId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_users_{userId}_roles_{roleId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,DELETE',));
                    }
                    not_ezpublish_rest_options_user_users_userId_roles_roleId:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/user/groups')) {
                    // ezpublish_rest_options_user_groups
                    if ($pathinfo === '/api/ezp/v2/user/groups') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_groups;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',  '_route' => 'ezpublish_rest_options_user_groups',);
                    }
                    not_ezpublish_rest_options_user_groups:

                    // ezpublish_rest_options_user_groups_root
                    if ($pathinfo === '/api/ezp/v2/user/groups/root') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_groups_root;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',  '_route' => 'ezpublish_rest_options_user_groups_root',);
                    }
                    not_ezpublish_rest_options_user_groups_root:

                    // ezpublish_rest_options_user_groups_subgroups
                    if ($pathinfo === '/api/ezp/v2/user/groups/subgroups') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_groups_subgroups;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'POST',  '_route' => 'ezpublish_rest_options_user_groups_subgroups',);
                    }
                    not_ezpublish_rest_options_user_groups_subgroups:

                    // ezpublish_rest_options_user_groups_{groupPath}
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_groups_groupPath;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_groups_{groupPath}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE,MOVE',));
                    }
                    not_ezpublish_rest_options_user_groups_groupPath:

                    // ezpublish_rest_options_user_groups_{groupPath}_subgroups
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/subgroups$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_groups_groupPath_subgroups;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_groups_{groupPath}_subgroups')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                    }
                    not_ezpublish_rest_options_user_groups_groupPath_subgroups:

                    // ezpublish_rest_options_user_groups_{groupPath}_users
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/users$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_groups_groupPath_users;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_groups_{groupPath}_users')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                    }
                    not_ezpublish_rest_options_user_groups_groupPath_users:

                    // ezpublish_rest_options_user_groups_{groupPath}_roles
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/roles$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_groups_groupPath_roles;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_groups_{groupPath}_roles')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                    }
                    not_ezpublish_rest_options_user_groups_groupPath_roles:

                    // ezpublish_rest_options_user_groups_{groupPath}_roles_{roleId}
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_groups_groupPath_roles_roleId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_groups_{groupPath}_roles_{roleId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,DELETE',));
                    }
                    not_ezpublish_rest_options_user_groups_groupPath_roles_roleId:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/user/sessions')) {
                    // ezpublish_rest_options_user_sessions
                    if ($pathinfo === '/api/ezp/v2/user/sessions') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_sessions;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'POST',  '_route' => 'ezpublish_rest_options_user_sessions',);
                    }
                    not_ezpublish_rest_options_user_sessions:

                    // ezpublish_rest_options_user_sessions_{sessionId}
                    if (preg_match('#^/api/ezp/v2/user/sessions/(?P<sessionId>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_sessions_sessionId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_sessions_{sessionId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'DELETE',));
                    }
                    not_ezpublish_rest_options_user_sessions_sessionId:

                    // ezpublish_rest_options_user_sessions_{sessionId}_refresh
                    if (preg_match('#^/api/ezp/v2/user/sessions/(?P<sessionId>[^/]++)/refresh$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_sessions_sessionId_refresh;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_sessions_{sessionId}_refresh')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'POST',));
                    }
                    not_ezpublish_rest_options_user_sessions_sessionId_refresh:

                }

            }

            if (0 === strpos($pathinfo, '/api/ezp/v2/content')) {
                // ezpublish_rest_options_content_locations_{locationPath}_urlaliases
                if (0 === strpos($pathinfo, '/api/ezp/v2/content/locations') && preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)/urlaliases$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_ezpublish_rest_options_content_locations_locationPath_urlaliases;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_locations_{locationPath}_urlaliases')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',));
                }
                not_ezpublish_rest_options_content_locations_locationPath_urlaliases:

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/urlaliases')) {
                    // ezpublish_rest_options_content_urlaliases
                    if ($pathinfo === '/api/ezp/v2/content/urlaliases') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_urlaliases;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',  '_route' => 'ezpublish_rest_options_content_urlaliases',);
                    }
                    not_ezpublish_rest_options_content_urlaliases:

                    // ezpublish_rest_options_content_urlaliases_{urlAliasId}
                    if (preg_match('#^/api/ezp/v2/content/urlaliases/(?P<urlAliasId>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_urlaliases_urlAliasId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_urlaliases_{urlAliasId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,DELETE',));
                    }
                    not_ezpublish_rest_options_content_urlaliases_urlAliasId:

                }

            }

            // ezpublish_rest_options_services_countries
            if ($pathinfo === '/api/ezp/v2/services/countries') {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_ezpublish_rest_options_services_countries;
                }

                return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',  '_route' => 'ezpublish_rest_options_services_countries',);
            }
            not_ezpublish_rest_options_services_countries:

        }

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        if (0 === strpos($pathinfo, '/placelist')) {
            // ezpublish_ezdemo_ajax_sorted_place_list
            if (preg_match('#^/placelist/(?P<locationId>\\d+)/(?P<latitude>((-)?\\d{1,2}(\\.\\d+)?)|key_lat)/(?P<longitude>((-)?\\d{1,2}(\\.\\d+)?)|key_lon)/(?P<maxDist>(\\d+)|key_dist)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_ezdemo_ajax_sorted_place_list;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_ezdemo_ajax_sorted_place_list')), array (  '_controller' => 'EzSystems\\DemoBundle\\Controller\\PlaceController::listPlaceListSortedAction',));
            }
            not_ezpublish_ezdemo_ajax_sorted_place_list:

            // ezpublish_ezdemo_ajax_default_placeList
            if (preg_match('#^/placelist/(?P<locationId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_ezdemo_ajax_default_placeList;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_ezdemo_ajax_default_placeList')), array (  '_controller' => 'EzSystems\\DemoBundle\\Controller\\PlaceController::listPlaceListAction',));
            }
            not_ezpublish_ezdemo_ajax_default_placeList:

        }

        // ezpublish_ezdemo_search
        if ($pathinfo === '/content/search') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ezpublish_ezdemo_search;
            }

            return array (  '_controller' => 'EzSystems\\DemoBundle\\Controller\\SearchController::showSearchResultsAction',  '_route' => 'ezpublish_ezdemo_search',);
        }
        not_ezpublish_ezdemo_search:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
