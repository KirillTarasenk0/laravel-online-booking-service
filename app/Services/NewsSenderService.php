<?php

namespace App\Services;

use App\Models\NewsSender;
use Illuminate\Database\Eloquent\Collection;

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
    public function getNewsSenderEmails(): array
    {
        return NewsSender::pluck('email')->all();
    }
}
