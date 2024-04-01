<?php

namespace App\Services;

use App\Models\NewsSender;

class NewsSenderService
{
    public function saveNewsSenderEmail(string $userEmail): void
    {
        NewsSender::create([
            'email' => $userEmail
        ]);
    }
}
