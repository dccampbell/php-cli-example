<?php

namespace App;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use JsonSerializable;

abstract class Geometry implements Arrayable, Jsonable, JsonSerializable
{
    public function __toString()
    {
        return $this->toJson();
    }

    /** @inheritDoc */
    abstract public function toArray();

    /** @inheritDoc */
    public function toJson($options = 0): string
    {
        return json_encode($this->jsonSerialize(), $options);
    }

    /** @inheritDoc */
    public function jsonSerialize()
    {
        return $this->toArray();
    }
}
