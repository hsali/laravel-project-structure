<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ProcessPodcast implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

//        Log::emergency($message);
//        Log::alert($message);
//        Log::critical($message);
//        Log::error($message);
//        Log::warning($message);
//        Log::notice($message);
        Log::info("handling in process podcast");

//        Log::withContext([
//            'request-id' => $requestId
//        ]);
//        Log::debug($message);

//        Log::shareContext([
//            'invocation-id' => (string) Str::uuid(),
//        ]);

//        Log::stack(['single', 'slack'])->info('Something happened!');
    }
}
