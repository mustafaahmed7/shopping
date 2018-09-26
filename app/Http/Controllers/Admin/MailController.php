<?php

namespace App\Http\Controllers\Admin;

use App\Mail\OrderShippedMail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mail(){

        return view('admin.mail.mail');
    }
    public function send(Request $request){
       // dd($request);
        //$from = $request->get('From');
        $to = $request->get('To');
        $subject = $request->get('Subject');
        $message = $request->input('Mail');
        $from = 'test@test.com';

        //dd($message);
        if($to == 'customer_all'){
            $users = User::all();
            foreach ($users as $user){
                $data = ['message'=>$message,
                    'to'=>$user->email,
                    'subject'=>$subject,
                    'from'=>$from];
                Mail::send(['html'=>'admin.mail.message'],['data'=>$data],
                    function($m)use($data){
                        $m->from($data['from'])
                            ->to($data['to'])
                            ->subject($data['subject']);
                    });
            }
        }else if($to == 'customer'){
            $data = ['message'=>$message,
                'to'=>$request->get('customer'),
                'subject'=>$subject,
                'from'=>$from];
            Mail::send('admin.mail.message',['data'=>$data],
                function($m)use($data){
                    $m->from($data['from'])
                        ->to($data['to'])
                        ->subject($data['subject']);
                });
        }
      //  return redirect('/admin/mail');
    }
}
