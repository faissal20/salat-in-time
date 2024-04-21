<?php

namespace App\Console\Commands;

use App\Events\SalatTime;
use Illuminate\Console\Command;

class CheckSalatTiming extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-salat-timing';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        
        // $salatTimes = config('static-salat-timing');

        event(new SalatTime('Rabat', [
            'salat' => 'Dohr',
            'timing' => '13:23',
        ]));

        // foreach ($salatTimes as $location => $time) {
        //     foreach ($time as $salat => $timing) {
        //         $now = now()->format('H:i');
        //         if ($now === $timing) {
        //             event(new SalatTime($location, [
        //                 'salat' => $salat,
        //                 'timing' => $timing,
        //             ]));
        //         }
        //     }
        // }
    }
}
