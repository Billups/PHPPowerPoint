<?php
/**
* This file is part of PHPPowerPoint - A pure PHP library for reading and writing
* presentations documents.
*
* PHPPowerPoint is free software distributed under the terms of the GNU Lesser
* General Public License version 3 as published by the Free Software Foundation.
*
* For the full copyright and license information, please read the LICENSE
* file that was distributed with this source code. For the full list of
* contributors, visit https://github.com/PHPOffice/PHPWord/contributors.
*
* @link        https://github.com/PHPOffice/PHPPowerPoint
* @copyright   2009-2014 PHPPowerPoint contributors
* @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
*/

namespace PhpOffice\PhpPowerpoint\Style;

use PhpOffice\PhpPowerpoint\ComparableInterface;

/**
* \PhpOffice\PhpPowerpoint\Style\Spacing
*/
class Spacing implements ComparableInterface
{
    /* Line Heights */
    const HEIGHT_SINGLE		  = 100000;
    const HEIGHT_SESQUISINGLE = 150000;
    const HEIGHT_DOUBLE		  = 200000;

    /**
    * Line Height
    *
    * @var int
    */
    private $lineHeight;
    
    /**
    * Hash index
    *
    * @var string
    */
    private $hashIndex;

    /**
    * Create a new \PhpOffice\PhpPowerpoint\Style\Spacing
    */
    public function __construct()
    {
        // Initialise values
        $this->lineHeight = self::HEIGHT_SINGLE;
    }

    /**
    * Get Spacing
    *
    * @return int
    */
    public function getSpacing()
    {
        return $this->lineHeight;
    }
    /**
    * Set Spacing
    *
    * @param  int                   $pValue
    * @return \PhpOffice\PhpPowerpoint\Style\Spacing
    */
    public function setSpacing($pValue = self::HEIGHT_SINGLE)
    {
        if ( !is_numeric( $pValue ) ) {
            $pValue = self::HEIGHT_SINGLE;
        }
        $this->lineHeight = $pValue;

        return $this;
    }
    /**
    * Get hash code
    *
    * @return string Hash code
    */
    public function getHashCode()
    {
        return md5($this->lineHeight . __CLASS__);
    }

    /**
    * Get hash index
    *
    * Note that this index may vary during script execution! Only reliable moment is
    * while doing a write of a workbook and when changes are not allowed.
    *
    * @return string Hash index
    */
    public function getHashIndex()
    {
        return $this->hashIndex;
    }

    /**
    * Set hash index
    *
    * Note that this index may vary during script execution! Only reliable moment is
    * while doing a write of a workbook and when changes are not allowed.
    *
    * @param string $value Hash index
    */
    public function setHashIndex($value)
    {
        $this->hashIndex = $value;
    }
}
