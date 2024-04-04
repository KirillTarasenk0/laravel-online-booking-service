<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsSenderRequest;
use App\Models\NewsSender;
use Illuminate\Http\RedirectResponse;
use App\Services\NewsSenderService;

class NewsSenderController extends Controller
{
    public function __construct(
        private NewsSenderService $newsSenderService,
    ){}
    public function create(NewsSenderRequest $newsSenderRequest, NewsSender $newsSender): RedirectResponse
    {
        $this->newsSenderService->saveNewsSenderEmail($newsSenderRequest['notificationEmail']);
        return redirect()->route('index');
    }
}
