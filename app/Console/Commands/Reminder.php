<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\DraftReminder;

class Reminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:Reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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

        $number=0;
        $ent=DB::table('entrepreneurs')->where('admin_status','Draft')->get();
        if(!$ent->isEmpty()){
        foreach ($ent as $row) {
           $number++;
            $details=[
                'name'=>ucwords($row->entre_name).' '.ucwords($row->entre_last_name),
            ];
             Mail::to($row->entre_email)->send(new DraftReminder($details));
             }

             DB::table('reminder_email_log')->insert([
                'total_business'=>$number,
                'date'=>date('Y-m-d'),
                'date_time'=>date("Y-m-d h:i:s"),
                'author'=>Auth()->user()->id,
            ]);

         }

    }
}
