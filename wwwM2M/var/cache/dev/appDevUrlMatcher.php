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
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/admin/pais')) {
            // admin_pais_index
            if (rtrim($pathinfo, '/') === '/admin/pais') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_pais_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_pais_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PaisController::indexAction',  '_route' => 'admin_pais_index',);
            }
            not_admin_pais_index:

            // admin_pais_new
            if ($pathinfo === '/admin/pais/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_pais_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PaisController::newAction',  '_route' => 'admin_pais_new',);
            }
            not_admin_pais_new:

            // admin_pais_show
            if (preg_match('#^/admin/pais/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_pais_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pais_show')), array (  '_controller' => 'AppBundle\\Controller\\PaisController::showAction',));
            }
            not_admin_pais_show:

            // admin_pais_edit
            if (preg_match('#^/admin/pais/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_pais_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pais_edit')), array (  '_controller' => 'AppBundle\\Controller\\PaisController::editAction',));
            }
            not_admin_pais_edit:

            // admin_pais_delete
            if (preg_match('#^/admin/pais/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_admin_pais_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pais_delete')), array (  '_controller' => 'AppBundle\\Controller\\PaisController::deleteAction',));
            }
            not_admin_pais_delete:

        }

        if (0 === strpos($pathinfo, '/sensor')) {
            // sensor_index
            if (rtrim($pathinfo, '/') === '/sensor') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sensor_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sensor_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SensorController::indexAction',  '_route' => 'sensor_index',);
            }
            not_sensor_index:

            // sensor_list
            if ($pathinfo === '/sensor/list') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sensor_list;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SensorController::listAction',  '_route' => 'sensor_list',);
            }
            not_sensor_list:

            // sensor_new
            if ($pathinfo === '/sensor/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sensor_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SensorController::newAction',  '_route' => 'sensor_new',);
            }
            not_sensor_new:

            // sensor_show
            if (preg_match('#^/sensor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sensor_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sensor_show')), array (  '_controller' => 'AppBundle\\Controller\\SensorController::showAction',));
            }
            not_sensor_show:

            // sensor_edit
            if (preg_match('#^/sensor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sensor_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sensor_edit')), array (  '_controller' => 'AppBundle\\Controller\\SensorController::editAction',));
            }
            not_sensor_edit:

            // sensor_delete
            if (preg_match('#^/sensor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_sensor_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sensor_delete')), array (  '_controller' => 'AppBundle\\Controller\\SensorController::deleteAction',));
            }
            not_sensor_delete:

        }

        if (0 === strpos($pathinfo, '/admin/wei')) {
            // admin_wei_index
            if (rtrim($pathinfo, '/') === '/admin/wei') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_wei_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_wei_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\WeiController::indexAction',  '_route' => 'admin_wei_index',);
            }
            not_admin_wei_index:

            // admin_wei_new
            if ($pathinfo === '/admin/wei/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_wei_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\WeiController::newAction',  '_route' => 'admin_wei_new',);
            }
            not_admin_wei_new:

            // admin_wei_show
            if (preg_match('#^/admin/wei/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_wei_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wei_show')), array (  '_controller' => 'AppBundle\\Controller\\WeiController::showAction',));
            }
            not_admin_wei_show:

            // admin_wei_edit
            if (preg_match('#^/admin/wei/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_wei_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wei_edit')), array (  '_controller' => 'AppBundle\\Controller\\WeiController::editAction',));
            }
            not_admin_wei_edit:

            // admin_wei_delete
            if (preg_match('#^/admin/wei/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_admin_wei_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wei_delete')), array (  '_controller' => 'AppBundle\\Controller\\WeiController::deleteAction',));
            }
            not_admin_wei_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
