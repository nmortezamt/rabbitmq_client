<?php

namespace App\Handler;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob;

class WebhookHandler extends ProcessWebhookJob
{
    public function handel()
    {
        logger('success');
        logger($this->webhookCall);
    }
}
