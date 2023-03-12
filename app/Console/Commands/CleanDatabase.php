<?php
namespace App\Console\Commands;

use App\Models\message;
use Illuminate\Console\Command;


class CleanDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Laracarte:clean-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'clean database';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        //
        $this->info('clean database...');

        message::twoMonthOld()->delete();

        $this->info('database cleaned.');
    }
}
