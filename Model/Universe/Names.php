<?php

/*
 * Copyright (C) 2019 ppfeufer
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

namespace WordPress\EsiClient\Model\Universe;

class Names {
    /**
     * category
     *
     * @var string
     */
    protected $category;

    /**
     * id
     *
     * @var int
     */
    protected $id;

    /**
     * name
     *
     * @var string
     */
    protected $name;

    /**
     * getCategory
     *
     * @return string
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * setCategory
     *
     * @param string $category
     */
    protected function setCategory(string $category) {
        $this->category = $category;
    }

    /**
     * getId
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * setId
     *
     * @param int $id
     */
    protected function setId(int $id) {
        $this->id = $id;
    }

    /**
     * getName
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * setName
     *
     * @param string $name
     */
    protected function setName(string $name) {
        $this->name = $name;
    }
}
