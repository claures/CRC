<?php

namespace PBurggraf\CRC\CRC16;

use PBurggraf\CRC\TableGenerator;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class Lj1200 extends AbstractCRC16
{
    public function __construct()
    {
        $this->poly = 0x6f63;
        $this->init = 0x0000;

        $this->reverseIn = false;
        $this->reverseOut = false;
        $this->xorOut = 0x0000;

        $this->lookupTable = $this->generateTable($this->poly);
    }
}