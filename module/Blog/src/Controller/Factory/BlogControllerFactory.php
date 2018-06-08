<?php
/**
 * Created by PhpStorm.
 * User: Eassesso
 * Date: 08/06/2018
 * Time: 13:14
 */

namespace Blog\Controller\Factory;


use Blog\Controller\BlogController;
use Blog\Model\PostTable;
use Psr\Container\ContainerInterface;

class BlogControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new BlogController(
            $container->get(PostTable::class)
        );
    }
}