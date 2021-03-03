<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;
use Validator;
use App\PageFile;
class Pages extends Controller
{
  
    public function index()
    {
        $pages = Page::paginate(40);
        return view(app('at').'.pages.index',['title'=>trans('admin.pages'),'pages'=> $pages]);
    }


    public function create()
    {
        return view(app('at').'.pages.create',['title'=>trans('admin.add')]);
    }

    public function store(Request $r)
    {
        //return dd($r->input('content'));
        $rules = [
                'name'=>'required',
                'content'=>'required',
                'files' => 'nullable|array'
                      ];
         $Validator = Validator::make($r->all(),$rules);
         $Validator->SetAttributeNames(['name'=>trans('admin.name'),'content'=>trans('admin.content')]);
         if($Validator->fails())
         {
            return back()->withInput()->withErrors($Validator);
         }else{
         
         
          $page = new Page;
          $data['name'] = $r->input('name');
          $data['content'] = $this->html_special($r->input('content'));
          if($r->has('active'))
          {
            $data['active'] = 1;
          }else{
            $data['active'] = 0;
          }
         
          $page = Page::create($data);
       
          
          $imgs = $r->file('files');
         if(! empty($imgs)):
         // preapre file 
         foreach($imgs as $image):
                // preapre iamge 
          
            $Imagename = str_replace($image->getClientOriginalExtension(),'',$image->getClientOriginalName()) .'-'.
                        rand(1,10).'.'.$image->getClientOriginalExtension();
            $destinationPath = base_path('assets/uplodedfiles/');
            $image->move($destinationPath, $Imagename);
           // end praepte iamge 
           
           PageFile::create([
               'page_id' => $page->id,
                'file' =>  $Imagename
              ]);
        endforeach;
         endif;
         
         
          session()->flash('success',trans('admin.added'));
          return redirect(app('aurl').'/pages');
         // return view(app('at').'.pages.index',['title'=>trans('admin.pages'),'pages'=>Page::paginate(40)]);
         }
    }

 
    public function show($id)
    {
        if(auth()->user()->level == 'store')
        {
          $tm = app('st');
        }elseif(auth()->user()->level == 'user')
        {
          $tm = app('ut');
        }else{
          $tm = app('at');
        }
        $page = Page::find($id);
        if(empty($page))
        {
          return redirect(auth()->user()->level.'/');
        }
        return view($tm.'.page',['title'=>$page->name,'page'=>$page,'tm'=>$tm]);
    }

    public function edit($id)
    {
        return view(app('at').'.pages.edit',['title'=>trans('admin.edit'),'edit'=>Page::find($id)]);
    }

    public function update(Request $r, $id)
    {
        // return $r->all();
        $rules = [
                    'name' => 'required',
                    'content' => 'required',
                    'files' => 'nullable|array'
                 ];

      $data = $this->validate($r, $rules, [], [
                         'name' => trans('admin.name'),
                         'content' =>trans('admin.content'),
                                                      ]);
        
              $data['name'] = $r->input('name');
              $data['content'] = $r->input('content');
              if($r->has('active'))
              {
                $data['active'] = 1;
              }else{
                $data['active'] = 0;
              }
              
       // preapre file 
        $imgs = $r->file('files');
        if(! empty($imgs)):
            PageFile::where('page_id',$id)->delete();
         foreach($imgs as $image):
                // preapre iamge 
          
            $Imagename = str_replace($image->getClientOriginalExtension(),'',$image->getClientOriginalName()) .'-'.
                        rand(1,10).'.'.$image->getClientOriginalExtension();
            
            $destinationPath = base_path('assets/uplodedfiles/');
            $image->move($destinationPath, $Imagename);
           // end praepte iamge 
           
           PageFile::create([
               'page_id' => $id,
                'file' =>  $Imagename
              ]);
        endforeach;
      endif;
    
    //   return dd($data);
      Page::where('id', $id)->update($data );
     // $page->create($data);
      session()->flash('success',trans('admin.updated'));
      return redirect(app('aurl').'/pages');
      //return back();
      //return view(app('at').'.pages.index',['title'=>trans('admin.pages'),'pages'=>Page::paginate(40)]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         @Page::find($id)->delete();
          session()->flash('success',trans('admin.deleted'));
          return redirect(app('aurl').'/pages');
           //return view(app('at').'.pages.index',['title'=>trans('admin.pages'),'pages'=>Page::paginate(40)]);
    }
    
    public function html_special($string)
      {
       $string = nl2br($string);
       $string = str_replace("\n", "", $string);
       $string = str_replace("\r", "", $string);
       if(preg_match_all('/\<pre\>(.*?)\<\/pre\>/', $string, $match))
       {
           foreach($match as $a){
               foreach($a as $b){
               $string = str_replace('<pre>'.$b.'</pre>', "<pre>".str_replace("<br />", PHP_EOL, $b)."</pre>", $string);
               }
           }
       }
       $string = str_replace("<br /><br /><br /><pre>", '<br /><br /><pre>', $string);
       $string = str_replace("</pre><br /><br />", '</pre><br />', $string);
       $string = str_replace("<br /><br /><ul>", '<br /><ul>', $string);
       $string = str_replace("</ul><br /><br />", '</ul><br />', $string);
       $string = str_replace("<ul><br />", '<ul>', $string);
       $string = str_replace("<br /></ul>", '</ul>', $string);
       $string = str_replace("<br /><br /><ol>", '<br /><ol>', $string);
       $string = str_replace("</ol><br /><br />", '</ol><br />', $string);
       $string = str_replace("<ol><br />", '<ol>', $string);
       $string = str_replace("<br /></ol>", '</ol>', $string);
       $string = str_replace("<br /><li>", '<li>', $string);
       $string = str_replace("</li><br />", '</li>', $string);
       return $string;
      }
}
