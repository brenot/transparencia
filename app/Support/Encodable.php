<?php

namespace App\Support;

use Illuminate\Support\Str;

trait Encodable
{
    public function encode($data)
    {
        if (!is_numeric($data)) {
            return '@' . base64_encode($data);
        }

        return $data;
    }

    public function decode($data)
    {
        if ($this->isEncoded($data)) {
            return base64_decode(substr($data, 1));
        }

        return $data;
    }

    public function isEncoded($data)
    {
        if (!Str::startsWith($data, '@')) {
            return false;
        }

        $data = substr($data, 1);

        return base64_encode(base64_decode($data, true)) === $data;
    }
}
