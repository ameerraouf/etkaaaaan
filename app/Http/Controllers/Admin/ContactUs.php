<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Send;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use App\ReplayContact;
use App\MailList;
use App\User;
use Validator;
class ContactUs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
        $messages = Contact::where(function($q) use($r){
            if($r->has('move_to'))
            {
                return $q->where('move_to',$r->input('move_to'));
            }else{
                return $q->where('move_to','inbox');
            }
        })->when( $r->has('search'), function($q) {
            
                
                return $q->where('title','LIKE','%'.$r->input('search').'%')
                            ->orWhere('name','LIKE','%'.$r->input('search').'%')
                            ->orWhere('country','LIKE','%'.$r->input('search').'%')
                            ->orWhere('content','LIKE','%'.$r->input('search').'%');
            
        })->orderBy('id','desc')->paginate(20);
        return view(app('at').'.contactus.index',['title'=>trans('admin.contactus'),'messages'=>$messages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $r,$id)
    {
        $msg = Contact::find($id);
        if($msg->reading == 0)
        {
            $msg->reading = 1;
            $msg->save();
        }
        if($r->has('move_to'))
        {
            if($msg->move_to != $r->input('move_to'))
            {
                if(in_array($r->input('move_to'),['inbox','trash','archive']))
                {
                    $msg->move_to = $r->input('move_to');
                    $msg->save();
                    session()->flash('success',trans('admin.move_done'));
                }
            }
        }
        return view(app('at').'.contactus.show',['title'=>$msg->title,'msg'=>$msg]);
    }

    public function replay(Request $r,$id)
    {
        if($r->has('content'))
        {
            $info = Contact::find($id);
            $replay = new ReplayContact;
            $replay->message_id = $id;
            $replay->content = $r->input('content');
            $replay->user_id = auth()->user()->id;
            $replay->reading = 0;
            $replay->save();
            
            $data = ['content'=>$replay->content ];
           Send:: Mail(app('at').'.contactus.template_replay',$data,$info->user()->first()->email,$info->user()->first()->name,$info->title);
            session()->flash('success',trans('admin.done_sent'));
        }else{
            session()->flash('error',trans('admin.error_sent'));
        }
        return redirect(app('aurl').'/contactus/'.$id);
    }

    public function go(Request $r)
    {
        if($r->has('move_to') and $r->has('id'))
        {

            foreach($r->input('id') as $id)
            {
                $msg = Contact::find($id);
                if($msg->move_to != $r->input('move_to'))
                {
                    if(in_array($r->input('move_to'),['inbox','trash','archive']))
                    {
                        $msg->move_to = $r->input('move_to');
                        $msg->save();
                    }elseif($r->input('move_to') == 'delete')
                    {
                        @$msg->replay()->delete();
                        @$msg->delete();
                    }
                }
            }
                        session()->flash('success',trans('admin.done_proccess'));
                        return redirect(app('aurl').'/contactus');
        }
    }

    public function compose()
    {
        return view(app('at').'.contactus.compose',['title'=>trans('admin.compose')]);
    }

    public function compose_post(Request $r)
    {
       // return $r->all();
        $rules = ['send_to'=>'required','subject'=>'required','message'=>'required'];
        if($r->input('send_to') == 'email' and !$r->has('email'))
        {
            $rules['email'] = 'required';
        }
        $validator = Validator::make($r->all(),$rules);
        $validator->SetAttributeNames(['message'=>trans('admin.message'),'subject'=>trans('admin.subject'),'send_to'=>trans('admin.send_to'),'email'=>trans('admin.email')]);
        if($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }elseif($r->input('send_to') == 'email' and !$r->has('email'))
        {
             return back()->withInput()->withErrors($validator);
        }
        $compose = new MailList;
        $compose->send_to = $r->input('send_to');
        if($r->input('send_to') == 'email')
        {
          $compose->email = $r->input('email');
        }
        $compose->admin_id = auth()->user()->id;
        $compose->subject  = $r->input('subject');
        $compose->message  = $r->input('message');
        $compose->cronjob_status = 0;
        $compose->save();
        session()->flash('success',trans('admin.message_was_sent'));
        return redirect(app('aurl').'/contactus/cronjob/messages');
    }

    public function cronjob()
    {
        $maillists = MailList::orderBy('id','desc')->paginate(10);
        return view(app('at').'.contactus.cronjob_emails',['title'=>trans('admin.cronjob_emails'),'maillists'=>$maillists]);
    }
    
    public function compose_edit($id)
    {
        return view(app('at').'.contactus.compose_edit',['title'=>trans('admin.edit'),'edit'=>MailList::find($id)]);
    }

    public function compose_post_post(Request $r,$id)
    {
        $compose = MailList::find($id);
        $compose->send_to = $r->input('send_to');
        if($r->input('send_to') == 'email')
        {
          $compose->email = $r->input('email');
        }
        $compose->admin_id = auth()->user()->id;
        $compose->subject  = $r->input('subject');
        $compose->message  = $r->input('message');
        $compose->cronjob_status = $r->input('cronjob_status');
        $compose->save();
        session()->flash('success',trans('admin.updated'));
        return redirect(app('aurl').'/contactus/cronjob/messages');
    }

    public function compose_delete($id)
    {
        @MailList::find($id)->delete();
        session()->flash('success',trans('admin.deleted'));
        return redirect(app('aurl').'/contactus/cronjob/messages');
    }

    public function cronjob_maillist()
    {
        //Send::Mail($pathview,$data,$to,$name,$subject)
        $maillist = MailList::where('cronjob_status',0)->get();
        $template = app('at').'.emails_templates.template_cronjob_maillist';

        foreach($maillist as $mail)
        {
             $data     = [
                            'content_message'=>$mail->message,
                            'subject'=>$mail->subject,
                         ];

            if($mail->send_to == 'admin')
            {
                $users = User::where('level','=','admin')->where('active',1)->get();
                foreach($users as $user)
                {
                    Send::Mail($template,$data,$user->email,$user->name,$mail->subject);
                }
            }elseif($mail->send_to == 'store')
            {
                $users = User::where('level','=','store')
                               ->orWhere('level','=','user')
                               ->where('active',1)
                               ->get();
                foreach($users as $user)
                {
                    Send::Mail($template,$data,$user->email,$user->name,$mail->subject);
                }
            }elseif($mail->send_to == 'email')
            {
                    Send::Mail($template,$data,$mail->email,$mail->email,$mail->subject);
            }
            
            $update = MailList::find($mail->id);
            $update->cronjob_status = 1;
            $update->save();
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                 $msg = Contact::find($id);  
                 @$msg->replay()->delete();
                 @$msg->delete();
            session()->flash('success',trans('admin.deleted'));
            return redirect(app('aurl').'/contactus');
    }
}
