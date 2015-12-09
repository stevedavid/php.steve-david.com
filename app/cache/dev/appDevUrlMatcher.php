<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt/_wdt') && preg_match('#^/_wdt/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/_profiler/info') && preg_match('#^/_profiler/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/calendrier')) {
                    // admin_calendrier_index
                    if (rtrim($pathinfo, '/') === '/admin/calendrier') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_calendrier_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\Admin\\CalendrierController::indexAction',  '_route' => 'admin_calendrier_index',);
                    }

                    // admin_calendrier_creer-evenement
                    if ($pathinfo === '/admin/calendrier/calendrier/evenement/creer') {
                        return array (  '_controller' => 'AppBundle\\Controller\\Admin\\CalendrierController::creerEvenementAction',  '_route' => 'admin_calendrier_creer-evenement',);
                    }

                }

                // admin_index_index
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_index_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\IndexController::indexAction',  '_route' => 'admin_index_index',);
                }

                if (0 === strpos($pathinfo, '/admin/message')) {
                    // admin_message_index
                    if (preg_match('#^/admin/message(?:/(?P<folderName>\\w+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_message_index')), array (  'folderName' => 'tous',  '_controller' => 'AppBundle\\Controller\\Admin\\MessageController::indexAction',));
                    }

                    // admin_message_voir
                    if (0 === strpos($pathinfo, '/admin/message/voir') && preg_match('#^/admin/message/voir/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_message_voir')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\MessageController::voirAction',));
                    }

                    // admin_message_supprimer
                    if (0 === strpos($pathinfo, '/admin/message/supprimer') && preg_match('#^/admin/message/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_message_supprimer')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\MessageController::supprimerAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/yaml')) {
                    // admin_yaml_edit
                    if (0 === strpos($pathinfo, '/admin/yaml/edit') && preg_match('#^/admin/yaml/edit(?:/(?P<ymlFile>\\w+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_yaml_edit')), array (  'ymlFile' => 'default',  '_controller' => 'AppBundle\\Controller\\Admin\\YamlController::editYamlAction',));
                    }

                    // admin_yaml_save
                    if (0 === strpos($pathinfo, '/admin/yaml/save') && preg_match('#^/admin/yaml/save/(?P<ymlFile>\\w+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_yaml_save')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\YamlController::saveYamlAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/ajax')) {
                // ajax_realisation
                if ($pathinfo === '/ajax/realisation') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AjaxController::realisationAction',  '_route' => 'ajax_realisation',);
                }

                // ajax_contact
                if ($pathinfo === '/ajax/contact') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AjaxController::contactAction',  '_route' => 'ajax_contact',);
                }

            }

        }

        // front_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'front_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\FrontController::indexAction',  '_route' => 'front_index',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
