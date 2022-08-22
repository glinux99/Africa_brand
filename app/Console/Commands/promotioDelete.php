<?php

namespace App\Console\Commands;

use App\Models\Promotion;
use Illuminate\Console\Command;

class promotioDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'promotion:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Supprimer toutes les donnnees de la table promotion dont la date depasse le deadline';

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
        Promotion::where('deadline', '<', \Carbon\Carbon::now())->delete();
        echo "toutes les donnees on tete supprimee";
    }
}
