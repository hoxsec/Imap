<?php
/**
 * @author clivern <hello@clivern.com>
 */

namespace Clivern\Imap\Core\Search\Condition;

use Clivern\Imap\Core\Search\Contract\Condition;

/**
 * All Class
 *
 * @package Clivern\Imap\Core\Search\Condition
 */
class Recent implements Condition
{

    /**
     * Query String
     *
     * @return string
     */
    public function __toString()
    {
        return "RECENT";
    }
}