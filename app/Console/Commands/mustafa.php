<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\DraftReminder;

class mustafa extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:mustafa';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command mustafa';

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
        $ent=DB::table('entrepreneurs')->where('admin_status','Draft')->where('entrepreneurs_id',23)->get();
        foreach ($ent as $row) {
                    
            $details=[
                'name'=>ucwords($row->entre_name).' '.ucwords($row->entre_last_name),
            ];
             
             Mail::to($row->entre_email)->send(new DraftReminder($details));
        
        }
    }
}
