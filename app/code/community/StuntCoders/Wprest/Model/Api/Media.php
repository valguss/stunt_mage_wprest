<?php

class StuntCoders_Wprest_Model_Api_Media extends StuntCoders_Wprest_Model_Api_Abstract
{
    const ROUTE = '/wp/v2/media/:id';

    protected function _getRoute($id = '')
    {
        return self::ROUTE;
    }
}
