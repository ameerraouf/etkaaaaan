<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class Send extends Controller
{
   
/////////////// extra Sending Email Address /////////////////////////////////////////////
 public static function FullMail($pathview,$data,$tomail,$cc,$subject,$attachpath='',$formmail='',$formtitle='')
 {
    return  Mail::send($pathview, $data, function($message)
            {
        global $tomail;
        global $cc;
        global $cc;
        global $subject;
        global $attachpath;
        global $formmail;
        global $formtitle;
        if(!empty($formmail))
        {
          $message->from($formmail, $formtitle);
        }
            $message->to($tomail)->cc($cc)->subject($subject);
            if(!empty($attachpath))
            {
                $message->attach($attachpath);
            }

            });
 }
/////////////// extra Sending Email Address /////////////////////////////////////////////


//////////mini mail to msg ///////////////////////////////////////////////
 public static function Mail($pathview,$data,$to,$name,$subject)
 {
  $info = [$to,$name,$subject];
    return Mail::send($pathview, $data, function($message) use ($info){
             $message->to($info[0], $info[1])->subject($info[2]);
    });

 }
//////////mini mail to msg ///////////////////////////////////////////////

 public static function alarm($user,$subject,$message)
 {
    $blade = app('at').'.emails_templates.alarm';
    $data = ['subject'=>$subject,'content_message'=>$message];
    return self::Mail($blade,$data,$user->email,$user->name,$subject);
 }

}
