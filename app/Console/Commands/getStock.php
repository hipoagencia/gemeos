<?php

namespace App\Console\Commands;

use App\Http\Controllers\Admin\FunctionsController;
use Illuminate\Console\Command;

class getStock extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:stock';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Atualiza o estoque de veículos';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        FunctionsController::carStock();
        return 'Estoque atualizado com sucesso';
    }
}
