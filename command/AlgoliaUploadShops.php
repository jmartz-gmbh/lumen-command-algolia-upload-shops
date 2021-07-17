<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use \Illuminate\Support\Facades\DB;

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
        $client = \Algolia\AlgoliaSearch\SearchClient::create(
            env('ALGOLIA_APP_ID'),
            env('ALGOLIA_SEARCH_KEY')
          );
          $index = $client->initIndex('shops');

          $shops = DB::table('shops')->get();
          $shops = json_decode(json_encode($shops), true);
          
          $index->replaceAllObjects($shops,['safe' => true,'autoGenerateObjectIDIfNotExist' => true]);
    }
}
