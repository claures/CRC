<?php

namespace PBurggraf\CRC\CRC24;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class CRC24 extends AbstractCRC24
{
    public function __construct()
    {
        $this->poly = 0x864cfb;
        $this->init = 0xb704ce;

        $this->reverseIn = false;
        $this->reverseOut = false;
        $this->xorOut = 0x000000;

        $this->lookupTable = $this->generateTable($this->poly);
    }
}