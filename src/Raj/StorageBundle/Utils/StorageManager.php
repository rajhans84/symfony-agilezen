<?php
/**
 * Created by PhpStorm.
 * User: raj
 * Date: 10/09/15
 * Time: 7:09 PM
 */

namespace Raj\StorageBundle\Utils;

use Raj\StorageBundle\Utils\RestClient;

class StorageManager {

    public $restClient;

    public function setRestClient(RestClient $restClient ) {
        $this->restClient = $restClient;
    }
}