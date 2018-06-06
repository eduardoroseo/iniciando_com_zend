<?php
/**
 * Created by PhpStorm.
 * User: Eassesso
 * Date: 05/06/2018
 * Time: 12:37
 */

namespace Blog\Model;


use Zend\Db\TableGateway\TableGatewayInterface;

class PostTable
{
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        return $this->tableGateway->select();
    }

    public function save(Post $post)
    {
        $data = [
            'title' => $post->title,
            'content' => $post->content,
        ];

        if ((int) $post->id === 0){
            $this->tableGateway->insert($data);
            return;
        }
    }
}