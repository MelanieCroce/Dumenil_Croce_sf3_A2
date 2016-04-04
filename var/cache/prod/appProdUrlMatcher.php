<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // article_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'article_homepage');
            }

            return array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::indexAction',  '_route' => 'article_homepage',);
        }

        // article_view
        if (0 === strpos($pathinfo, '/view') && preg_match('#^/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_view')), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::viewAction',));
        }

        // article_edit
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_edit')), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::editAction',));
        }

        // article_add
        if ($pathinfo === '/add') {
            return array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::addAction',  '_route' => 'article_add',);
        }

        // article_tag
        if (0 === strpos($pathinfo, '/tag') && preg_match('#^/tag/(?P<tag>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_tag')), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::tagAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
