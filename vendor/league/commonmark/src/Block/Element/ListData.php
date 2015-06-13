<?php

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * Original code based on the CommonMark JS reference parser (http://bitly.com/commonmark-js)
 *  - (c) John MacFarlane
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Block\Element;

class ListData
{
    /**
     * @var int
     */
    public $start = 0;

    /**
     * @var int
     */
    public $padding = 0;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $delimiter;

    /**
     * @var string
     */
    public $bulletChar;

    /**
     * @var int
     */
    public $markerOffset;

    /**
     * @param ListData $data
     *
     * @return bool
     */
    public function equals(ListData $data)
    {
        return $this->type === $data->type &&
            $this->delimiter === $data->delimiter &&
            $this->bulletChar === $data->bulletChar;
    }
}
