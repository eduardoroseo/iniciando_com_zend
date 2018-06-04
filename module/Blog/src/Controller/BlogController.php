<?php
/**
 * Created by PhpStorm.
 * User: Eassesso
 * Date: 04/06/2018
 * Time: 13:03
 */

namespace Blog\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BlogController extends AbstractActionController
{
    public function indexAction()
    {
        $posts = [
            ['title' => 'Post 1', 'content' => 'content 1'],
            ['title' => 'Post 2', 'content' => 'content 2'],
            ['title' => 'Post 3', 'content' => 'content 3'],
            ['title' => 'Post 4', 'content' => 'content 4'],
        ];

        return new ViewModel([
            'posts' => $posts
        ]);
    }
}