<?php

namespace App\Console\Commands;
use App\DripEmailer;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mai\MissedMail;
use App\Mail\MissedMail as MailMissedMail;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send  e-mails to a user';

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
     * @return mixed
     */
    public function handle()
    {
        $Missed = User::where('last_login_date', '<=', new \DateTime('-1 months'))->get();

        foreach ($Missed as $user) {

            Mail::to($user->email)->send(new MailMissedMail);
        }
    }
}
