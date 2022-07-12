<?php

namespace App\Jobs;

class WebhookHandler extends \Spatie\WebhookClient\Jobs\ProcessWebhookJob
{
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        logger()->info($this->webhookCall->payload);
    }
}
