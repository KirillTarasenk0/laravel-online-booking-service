<?php

namespace App\Services;

use App\Models\NewsSender;

class NewsSenderService
{
    public function saveNewsSenderEmail(string $userEmail): void
    {
        if (!NewsSender::where('email', $userEmail)->exists()) {
            NewsSender::create([
                'email' => $userEmail
            ]);
        }
    }
}
