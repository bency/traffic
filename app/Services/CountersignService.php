<?php

namespace App\Services;

use App\Countersign;

class CountersignService
{
    public static function add(array $data)
    {
        list($signed_at, $name, $phone, $email, $birth) = $data;
        $data = [
            'signed_at' => $signed_at,
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'birth' => $birth,
        ];

        return Countersign::create($data);
    }
}
