<?php

/*
 * Copyright (C) 2018 ppfeufer
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace WordPress\EsiClient\Model\Alliances\AllianceId;

class Icons {
    /**
     * px128x128
     *
     * @var string
     */
    protected $px128x128 = null;

    /**
     * px64x64
     *
     * @var string
     */
    protected $px64x64 = null;

    /**
     * getPx128x128
     *
     * @return string
     */
    public function getPx128x128() {
        return $this->px128x128;
    }

    /**
     * setPx128x128
     *
     * @param string $px128x128
     */
    protected function setPx128x128(string $px128x128) {
        $this->px128x128 = \preg_replace('/http:\/\//', 'https://', $px128x128);
    }

    /**
     * getPx64x64
     *
     * @return string
     */
    public function getPx64x64() {
        return $this->px64x64;
    }

    /**
     * setPx64x64
     *
     * @param string $px64x64
     */
    protected function setPx64x64(string $px64x64) {
        $this->px64x64 = \preg_replace('/http:\/\//', 'https://', $px64x64);
    }

    /**
     * getPx32x32
     * -=[ Workaround until CCP implements 32px logos ]=-
     *
     * @return string
     */
    public function getPx32x32() {
        return \preg_replace('/_64.png/', '_32.png', $this->px64x64);
    }
}
