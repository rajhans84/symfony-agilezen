<?php
/**
 * Created by PhpStorm.
 * User: raj
 * Date: 10/09/15
 * Time: 7:13 PM
 */

namespace Raj\StorageBundle\Utils;


class Sorter {

    public function sortByAscendingId($a, $b) {
        if ($a->id == $b->id) {
            return 0;
        }
        return ($a->id < $b->id) ? -1 : 1;
    }
}