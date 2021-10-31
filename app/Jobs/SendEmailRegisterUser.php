<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendEmailRegisterUser implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $name;
    private $queueName = 'Sendemail';
    public function __construct($name)
    {
        //
        $this->name = $name;
        $this->queue = $this->queueName;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        info([$this->name,$this->queue]);
    }
}
