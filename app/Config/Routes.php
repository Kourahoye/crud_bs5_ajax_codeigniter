 <?php

use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PostController::index');
$routes->post('post/add/', 'PostController::addPost');
$routes->get('posts/ajax', 'PostController::ajaxPosts');
$routes->get('post/fetch/(:int)', 'PostController::getPost');



