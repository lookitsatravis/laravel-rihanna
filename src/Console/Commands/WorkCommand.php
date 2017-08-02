<?php

namespace Lookitsatravis\Rihanna\Console\Commands;

use Illuminate\Queue\Worker;
use Illuminate\Queue\Console\WorkCommand as Command;

class WorkCommand extends Command
{
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start processing jobs on the queue as a bad girl daemon';

    /**
     * Create a new queue work command.
     *
     * @param  \Illuminate\Queue\Worker  $worker
     * @return void
     */
    public function __construct(Worker $worker)
    {
        $this->signature = preg_replace('/queue:work/', 'queue:work:work:work:work:work', $this->signature);
        parent::__construct($worker);
    }
}