<?php
/**
 * Created by PhpStorm.
 * User: Eassesso
 * Date: 04/06/2018
 * Time: 13:03
 */

namespace Blog\Controller;


use Blog\Model\PostTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BlogController extends AbstractActionController
{

    /** @var PostTable  */
    private $table;

    public function __construct(PostTable $table)
    {
        $this->table = $table;
    }

    public function indexAction()
    {
        $postTable = $this->table;
        return new ViewModel([
            'posts' => $postTable->fetchAll()
        ]);
    }
}