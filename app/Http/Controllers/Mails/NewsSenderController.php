<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsSenderRequest;
use Illuminate\Http\RedirectResponse;
use App\Services\NewsSenderService;
use App\Jobs\NewsSenderJob;

class NewsSenderController extends Controller
{
    public function __construct(
        private NewsSenderService $newsSenderService,
    ){}
    public function create(NewsSenderRequest $newsSenderRequest): RedirectResponse
    {
        $this->newsSenderService->saveNewsSenderEmail($newsSenderRequest['notificationEmail']);
        return redirect()->route('send-news-emails');
    }
    public function sendNewsEmails(): RedirectResponse
    {
        NewsSenderJob::dispatch();
        return redirect()->route('index');
    }
}
