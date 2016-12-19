<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Cache;

class Countersigned extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'countersign:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '匯入連署名單';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    private function getClient()
    {
        $client = new \Google_Client();
        $client->setApplicationName(config('google.app-name'));
        $client->setScopes(config('google.scopes'));
        $client->setAuthConfig(config('google.client-secret-path'));
        return $client;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $client = $this->getClient();
        $service = new \Google_Service_Sheets($client);

        // Prints the names and majors of students in a sample spreadsheet:
        // https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit
        $spreadsheetId = '1zrePCMq2lPVnZcjDk4ky8zuafVq-k_Xp3whI_e-VZ2I';
        $total_range = 'sheet1!L2:L2';
        $response = $service->spreadsheets_values->get($spreadsheetId, $total_range);
        $total = $response->getValues()[0][0];

        $end = $total + 1;
        $range = "sheet1!A2:D$end";
        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        $total = $response->getValues();
        $this->comment(print_r($total, true));
    }
}
