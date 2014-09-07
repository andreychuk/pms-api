<?php

namespace Pms\Api\Model;

use Pms\Api\Library\AbstractModel;

class Role extends AbstractModel
{
    public static $useType = false;
    static $collection = "Role";

    protected static $attrs = array(
        'name' => array('type' => 'string')
    );

    public function read()
    {
        $items = $this::find();
        $result = array();
        foreach($items as $item){
            $result[] = $item->toArray(array(), true);
        }

        return $result;
    }
}