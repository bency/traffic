<?php

namespace App\Services;

use App\Countersign;

class CountersignService
{
    public static function add(array $data)
    {
        list($signed_at, $name, $phone, $email) = $data;
        $data = [
            'signed_at' => $signed_at,
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
        ];

        return Countersign::create($data);
    }
}
