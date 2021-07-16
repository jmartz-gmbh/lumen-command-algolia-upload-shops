<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AlgoliaUploadShops extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'algolia:upload:shops';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Algolia Upload Shops';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $this->info('hello world.');
    }
}
