<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order3;
use App\User;
use Upload;
use Validator;
use DB;
use PDF;
class Orders3 extends Controller
{
 
 public function index(Request $r)
 {
 	$orders = Order3::groupBy('user_id')->where(function($q)use($r){
 		if($r->has('status'))
 		{
 			return $q->where('status',$r->input('status'));
 		}
 	})->orderBy('id')->paginate(10);

 	return view(app('at').'.files.index',['title'=>trans('admin.orders_step3'),'orders'=>$orders]);
 }

 public function edit($uid)
 {
 	$files = Order3::where('user_id',$uid)->get();
 	$user  = User::find($uid);
 	return view(app('at').'.files.edit',['title'=>trans('admin.edit').' - '.$user->name,'files'=>$files,'uid'=>$uid]);
 }

 public function update(Request $r, $uid)
 {
 	if($r->has('fid'))
 	{

 		foreach($r->input('fid') as $id)
 		{

 			$f = Order3::find($id);
 			if($r->input('proccess') == 'delete')
 			{
	                @unlink('upload'.$f->pdf_files);
	                $f->delete();
 			}else{
	 			$f->status = $r->input('proccess');
	 			if($r->input('proccess') == 'refused')
	 			{
	 				$f->refused_reason = $r->input('refused_reason');
	 			}
	 			$f->save();
 			}
 		}
 		if($r->input('proccess') == 'delete')
 		{
 		 session()->flash('success',trans('admin.deleted'));
 		}else{
 		 session()->flash('success',trans('admin.updated'));
 		}
 		return redirect(app('aurl').'/orders3/'.$uid.'/edit');
 	
 	}else{
 		return back();
 	}
 	
 }


 public function downloadpdf($id)
 {
 	    $pdf = Order3::find($id);
        $filename = base_path('upload/'.$pdf->pdf_files); // of course find the exact filename....        
        header('Pragma: public');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Cache-Control: private', false); // required for certain browsers 
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="'. basename($pdf->pdf_name) . '";');
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: ' . filesize($filename));
        readfile($filename);
        exit;
 }

 public function download_full_pdf_user(Request $r,$id)
 {
 	if($r->has('action') and $r->input('action') == 'show')
 	{
 		$display = 'stream';
 	}else{
 		$display = 'download';
 	}
 	$user = User::find($id);
 	$html = view(app('at').'.users.pdf',['user'=>$user])->render(); // file render
// or pure html 
	//$html = '<h1>مرحبا بكم فى العالم </h1>';
    $pdfarr = [
        'title'=>$user->name,
        'data'=>$html, // render file blade with content html
        'header'=>['show'=>false], // header content
        'footer'=>['show'=>false], // Footer content
        'font'=>'aealarabiya', //  dejavusans, aefurat ,aealarabiya ,times
        'font-size'=>12, // font-size 
        'text'=>'', //Write
        'rtl'=>true, //true or false 
        'filename'=>$user->step3()->first()->pdf_name, // filename example - invoice.pdf
        'display'=>$display, // stream , download , print
    ];

    PDF::HTML($pdfarr);
 }

	 public function destroy($uid)
	 {
	 	$orders = Order3::where('user_id',$uid)->get();
	 	foreach($orders as $file)
	 	{
	 		$f = Order3::find($file->id);
		    @unlink('upload'.$f->pdf_files);
	        $f->delete();
	 	}
	 		session()->flash('success',trans('admin.deleted'));
	 		return redirect(app('aurl').'/orders3');
	 }

}
