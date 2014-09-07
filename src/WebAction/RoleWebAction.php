<?php

namespace Pms\Api\WebAction;

use Pms\Api\Library\AbstractWebAction;
use Pms\Api\Model\Role;

class RoleWebAction extends AbstractWebAction
{
    protected $_app;

    public function __construct($app)
    {
        $this->_app = $app;
    }

    public function read()
    {
        $model = new Role();
        $items = $model->read();

        return $this->_response($items);
    }
}