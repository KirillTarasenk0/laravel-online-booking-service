<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsSenderMail;
use App\Services\NewsSenderService;

class NewsSenderJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {

    }

    /**
     * Execute the job.
     */
    public function handle(NewsSenderService $newsSenderService): void
    {
        //Mail::to('ktarasenkotarasenko@yandex.ru')->send(new NewsSenderMail());
        foreach ($newsSenderService->getNewsSenderEmails() as $emails) {
            Mail::to($emails)->send(new NewsSenderMail());
        }
    }
}
