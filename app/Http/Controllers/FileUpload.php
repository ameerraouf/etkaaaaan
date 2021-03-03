<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Files;
use App\User;
use App\Setting;
use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;
use Set;
class FileUpload extends Controller {
 
//////// resize image ////////////////////////////////////////////
public static function resizeimg($fullpath,$newpath,$width,$height,$watermark=null)
{
$set = Set::set();  
// create an image manager instance with favored driver
$img = new ImageManager(array('driver' => 'imagick'));
// open and resize an image file  
  if($set->enable_watermark == 1)
  {
    if($watermark != null)
    {
     $img = Image::make($fullpath)->resize($width, $height);
    }else{
     //return dd('test');
     $img = Image::make($fullpath)->resize($width, $height)->insert(base_path('upload/'.$set->watermark),'bottom-right', 10, 10);
    }
  }else{
   $img = Image::make($fullpath)->resize($width, $height); 
  }
// save the same file as jpeg with default quality
return $img->save($newpath);

}
//////// resize image ////////////////////////////////////////////
 public static function Upload($file,$path,$typeid,$id,$recive_id=null,$watermark=null)
 {
  if($file->isValid())
  {
         if(!file_exists(base_path().'/upload/'.$path))
          {
               mkdir(base_path().'/upload/'.$path);
          }
          if(!file_exists(base_path().'/upload/'.$path.'/index.html'))
          {
               $domain  = url('/');
               $content = '<?php  header("Location: '.$domain.'");  exit(); ?>';
               $index   = fopen(base_path().'/upload/'.$path.'/index.php', 'w');
               fwrite($index,'');
               fclose($index);
               $htmlcontent = '<meta http-equive="refresh" content=0;'.$domain.' " />';
               $html        = fopen(base_path().'/upload/'.$path.'/index.html', 'w');
               fwrite($html,'');
               fclose($html);
          }
     $namefile   = rand(0000,9999).time();
     $ext     = $file->getClientOriginalExtension();
     $mastername = $namefile.'.'.$ext;
     $size       = FileUpload::GetSize($file->getSize());
     $mimtype    = $file->getMimeType();
     $file->move(base_path().'/upload/'.$path,$mastername);
     /*Image::make(base_path().'/upload/'.$path.'/'.$mastername)
     ->insert(base_path().'/watermark.png'); //->resize(320, 240) */
     if($typeid != 'icon')
     {

     $upload = new Files;
     $upload->file  = $mastername;
     
        if($typeid == "news")
        {
            $upload->news_id = $id;
        }elseif($typeid == 'cat')
        {
            $upload->cat_id = $id;
        }elseif($typeid == 'post')
        {
            $upload->post = $id;
        }elseif($typeid == 'comment')
        {
            $upload->comment = $id;
        }elseif($typeid == 'slide')
        {
            $upload->slide  = $id;
        }elseif($typeid == 'user')
        {
            $upload->uid  = $id;
        } 

     $upload->path = $path;
     $upload->ext  = $ext;
     $upload->name = $file->getClientOriginalName();
     $upload->size     =  $size;
     $upload->mimtype  =  $mimtype;
     $upload->add_date =  time();
     $upload->uid            = auth()->user()->id;
     $upload->save();
        ///////////// Resize On Any image ////////////////////
        if(preg_match('/image/i', $mimtype))
        {
          $getfile = Files::find($upload->id);
            $size = FileUpload::Size_image();
            foreach($size as $key => $val)
            {
              FileUpload::resizeimg(base_path().'/upload/'.$getfile->path.'/'.$getfile->file,base_path().'/upload/'.$getfile->path.'/'.$key.'_'.$getfile->file,$key,$val,$watermark);
            }
        }
        ///////////// Resize On Any image ////////////////////
      if($recive_id == 'yes')
      {
        return   $upload->id;
      }else{
        return  '100_'.$upload->file;
      }
     }else{
            if($recive_id == 'yes')
            {
              return $upload->id;
            }else{
              return $path.'/'.$mastername;
            }
     }
  } 
 } 
 public static function UploadPhotoDep($file,$path,$typeid,$id)
 {
  if($file->isValid())
  {
         if(!file_exists(base_path().'/upload/'.$path))
          {
               mkdir(base_path().'/upload/'.$path);
          }
          if(!file_exists(base_path().'/upload/'.$path.'/index.html'))
          {
               $domain  = url('/');
               $content = '<?php  header("Location: '.$domain.'");  exit(); ?>';
               $index   = fopen(base_path().'/upload/'.$path.'index.php', 'w');
               fwrite($index,'');
               fclose($index);
               $htmlcontent = '<meta http-equive="refresh" content=0;'.$domain.' " />';
               $html        = fopen(base_path().'/upload/'.$path.'index.html', 'w');
               fwrite($html,'');
               fclose($html);
          }
     $namefile   = rand(0000,9999).time();
     $ext     = $file->getClientOriginalExtension();
     $mastername = $namefile.'.'.$ext;
     $size       = FileUpload::GetSize($file->getSize());
     $mimtype    = $file->getMimeType();
     $file->move(base_path().'/upload/'.$path,$mastername);
     /*Image::make(base_path().'/upload/'.$path.'/'.$mastername)
     ->insert(base_path().'/watermark.png'); //->resize(320, 240) */
     $upload = new Files;
     $upload->file  = $mastername;
     
        
        if($typeid == 'cat')
        {
            $upload->cat_id = $id;
        } 

     $upload->path = $path;
     $upload->ext  = $ext;
     $upload->name = $file->getClientOriginalName();
     $upload->size     =  $size;
     $upload->mimtype  =  $mimtype;
     $upload->add_date =  time();
     if($upload->save())
     {
///////////// Resize On Any image ////////////////////
if(preg_match('/image/i', $mimtype))
{
  $getfile = Files::find($upload->id);
    $size = FileUpload::Size_image();
    foreach($size as $key => $val)
    {
      FileUpload::resizeimg(base_path().'/upload/'.$getfile->path.$getfile->file,base_path().'/upload/'.$getfile->path.$key.'_'.$getfile->file,$key,$val,'no');
    }
}
///////////// Resize On Any image ////////////////////
      return  $upload->id;
     }else{
      return 0;
     }
  } 
 } 

 public static function MiniUploadFile($file,$path)
 {
  if($file->isValid())
  {
         if(!file_exists(base_path().'/upload/'.$path))
          {
               mkdir(base_path().'/upload/'.$path);
          }
          if(!file_exists(base_path().'/upload/'.$path.'/index.html'))
          {
               $domain  = url('/');
               $content = '<?php  header("Location: '.$domain.'");  exit(); ?>';
               $index   = fopen(base_path().'/upload/'.$path.'index.php', 'w');
               fwrite($index,'');
               fclose($index);
               $htmlcontent = '<meta http-equive="refresh" content=0;'.$domain.' " />';
               $html        = fopen(base_path().'/upload/'.$path.'index.html', 'w');
               fwrite($html,'');
               fclose($html);
          }
     $namefile   = rand(0000,9999).time();
     $ext     = $file->getClientOriginalExtension();
     $mastername = $namefile.'.'.$ext;
     $file->move(base_path().'/upload/'.$path,$mastername);
     return $path.'/'.$mastername;
      
  } 
 } 

    public static function Size_image()
    {
        return array('25'=>'25','50'=>'50','100'=>'100','200'=>'200','300'=>'300','500'=>'500','1000'=>'1000');
    }

public static function UpdatePhotoProfile($file,$uid,$colname)
{
  if($file->isValid())
  {
    $update = User::find($uid);
    if(!file_exists(base_path().'/upload/users/'.$uid))
    {
      @mkdir(base_path().'/upload/users/'.$uid);
    }
    if(!empty($update->$colname))
    {
    @unlink(base_path().'/upload/users/'.$update->id.'/'.$update->$colname);
    $size = FileUpload::Size_image();
    foreach($size as $key => $val)
    {    
      @unlink(base_path().'/upload/users/'.$update->id.'/'.$key.'_'.$update->$colname);  
    }
    }

    if(!file_exists(base_path().'/upload/users/'.$uid.'/index.html'))
          {
               $domain  = url('/').'/';
               $content = '<?php  header("Location: '.$domain.'");  exit(); ?>';
               $index   = fopen(base_path().'/upload/users/'.$uid.'/index.php', 'w');
               fwrite($index,'');
               fclose($index);
               $htmlcontent = '<meta http-equive="refresh" content=0;'.$domain.' " />';
               $html        = fopen(base_path().'/upload/users/'.$uid.'/index.html', 'w');
               fwrite($html,'');
               fclose($html);
          }   
    if(!file_exists(base_path().'/upload/users/'.$uid))
    {
      mkdir(base_path().'/upload/users/'.$uid);
    }
     $namefile   = rand(0000,9999).time();
     $ext        = $file->getClientOriginalExtension();
     $mastername = $namefile.'.'.$ext;
     $file->move(base_path().'/upload/users/'.$uid,$mastername);
     $update->$colname = $mastername;
     $update->save();
     $size = FileUpload::Size_image();
    foreach($size as $key => $val)
    {
       FileUpload::resizeimg(base_path().'/upload/users/'.$update->id.'/'.$update->$colname,base_path().'/upload/users/'.$update->id.'/'.$key.'_'.$update->$colname,$key,$val);
    }
    return true;
  }else{
    return false;
  }
}


public static function UploadBanner($file='',$oldfile='')
{
  if(!empty($oldfile))
    {
      @unlink(base_path().'/upload/banners/'.$oldfile); 
    }  
  if(!empty($file) and $file->isValid())
  {
     $namefile   = rand(0000,9999).time();
     $ext        = $file->getClientOriginalExtension();
     $mastername = $namefile.'.'.$ext;
     if(preg_match('/jpg|png|gif|bmp/i', $ext))
     {
       $file->move(base_path().'/upload/banners/',$mastername);
       return $mastername;
     }else{
       return false;
     }
  } 
}

public function NewUpload(Request $r)
{
 
  $tempid = time();
  $path   = $r->input('path').'/'.$tempid.'/';
    foreach($r->file('photo') as $file)
    {
      FileUpload::Upload($file, $path,$r->input('path'),$tempid);
    }
    
    if($r->input('path') == 'news')
    {
      $sql = 'news_id';
    }elseif($r->input('path') == 'topic')
    {
      $sql = 'topic_id';
    }elseif($r->input('path') == "gallery")
    {
      $sql = 'gallery_id';
    }
   $getfileupload = Files::where($sql,'=',$tempid)->get();
   $list = '';
   $domain = url('/');
    $list ='<ul class="list-unstyled">';
    foreach($getfileupload as $file)
    {
      if(preg_match('/image/i', $file->mimtype))
      {
       $list .= '<li><label>'.trans('main.masterphoto').' <input type="radio" name="photo" value="'.$file->file.'" /> <img src="'.$domain.'upload/'.$file->path.'100_'.$file->file.'" style="width:50px;height:50px;"  /></label></li>';   
      }else{
       $list .= '<li><label>'.$file->file.'</label></li>';   
      }
    }
 $list .='</ul>';
     return response()->json(array($list,$tempid));  
  
}

 public static function GetSize($bytes)
    {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }
        return $bytes;
}
 
 public static function DeloneFile($id,$type)
 {
   $delete = Files::find($id);
  
          foreach(FileUpload::Size_image() as $key => $val)
          {
            @unlink(base_path().'/upload/'.$delete->path.$key.'_'.$delete->file);
          }
        @unlink(base_path().'/upload/'.$delete->path.$delete->file);
        $del = Files::find($delete->id);
          @array_map('unlink', glob(base_path().'/upload/'.$delete->path.'*'));
          @rmdir(base_path().'/upload/'.substr($delete->path, 0,-1));
        $del->delete();
     
 }
 public static function DeleteFile($id,$type)
{
    if($type == 'build')
    {
        $getfile = Files::where('build_id','=',$id)->get();
      foreach($getfile as $delete)
      {
        if(preg_match('/image/i', $delete->mimtype))
        {   
          foreach(FileUpload::Size_image() as $key => $val)
          {
            @unlink(base_path().'/upload/'.$delete->path.$key.'_'.$delete->file);
          }
        }
        @unlink(base_path().'/upload/'.$delete->path.$delete->file);
        $del = Files::find($delete->id);
          @array_map('unlink', glob(base_path().'/upload/'.$delete->path.'*'));
          @rmdir(base_path().'/upload/'.substr($delete->path, 0,-1));
        $del->delete();
      }

    }elseif($type == 'comment')
    {
        @$delete = Files::where('comment','=',$id)->first();
      if(preg_match('/image/i', $delete->mimtype))
        {   
          foreach(FileUpload::Size_image() as $key => $val)
          {
            unlink(base_path().'/upload/'.$delete->path.$key.'_'.$delete->file);
          }
        }
          @unlink(base_path().'/upload/'.$delete->path.$delete->file);
          @$del = Files::find($delete->id);
          if(!empty($del))
          {
           @$del->delete();
          }
    }elseif($type == 'post')
    {
       
       $delete = Files::find($id);
     
        if(preg_match('/image/i', $delete->mimtype))
        {   
          foreach(FileUpload::Size_image() as $key => $val)
          {
            unlink(base_path().'/upload/'.$delete->path.$key.'_'.$delete->file);
          }
        }
            @unlink(base_path().'/upload/'.$delete->path.$delete->file);
        
 
        if(count(glob(base_path().'/upload/'.$delete->path.'/*')) == 2)
         {
                    @array_map('unlink', glob(base_path().'/upload/'.$delete->path.'/*'));
                    @rmdir(base_path().'/upload/'.$delete->path);
         }
         @$delete->delete();
          /*
     
              $getfile = Files::where('post','=',$id)->get();
            foreach($getfile as $delete)
            {
              if(preg_match('/image/i', $delete->mimtype))
              {   
                foreach(FileUpload::Size_image() as $key => $val)
                {
                  unlink(base_path().'/upload/'.$delete->path.$key.'_'.$delete->file);
                }
              }
                @unlink(base_path().'/upload/'.$delete->path.$delete->file);
                $del = @Files::find($delete->id);
                @array_map('unlink', glob(base_path().'/upload/'.$delete->path.'*'));
                @rmdir(base_path().'/upload/'.substr($delete->path, 0,-1));
              $del->delete();
     }
          */

    }elseif($type == 'user')
    {
       
        $getfile = Files::where('uid','=',$id)->get();
      foreach($getfile as $delete)
      {
        if(preg_match('/image/i', $delete->mimtype))
        {   
          foreach(FileUpload::Size_image() as $key => $val)
          {
            unlink(base_path().'/upload/'.$delete->path.$key.'_'.$delete->file);
          }
        }
          unlink(base_path().'/upload/'.$delete->path.$delete->file);
          $del = Files::find($delete->id);
          array_map('unlink', glob(base_path().'/upload/'.$delete->path.'*'));
          rmdir(base_path().'/upload/'.substr($delete->path, 0,-1));
        $del->delete();
      }

    }elseif($type == 'slide')
    {
          $delete = @Files::where('slide','=',$id)->first();
          if(count($delete) > 0)
          {
            foreach(FileUpload::Size_image() as $key => $val)
            {
              @unlink(base_path().'/upload/'.$delete->path.$key.'_'.$delete->file);
            }
        
            @unlink(base_path().'/upload/'.@$delete->path.@$delete->file);
            @array_map('unlink', glob(base_path().'/upload/'.$delete->path.'*'));
            @rmdir(base_path().'/upload/'.substr(@$delete->path, 0,-1));
            @$delete->delete(); 
          }
    }elseif($type == 'cat')
    {
          $delete = @Files::where('cat_id','=',$id)->first();
          if(count($delete) > 0)
          {
            foreach(FileUpload::Size_image() as $key => $val)
            {
              @unlink(base_path().'/upload/'.$delete->path.$key.'_'.$delete->file);
            }
        
            @unlink(base_path().'/upload/'.@$delete->path.@$delete->file);
            @array_map('unlink', glob(base_path().'/upload/'.$delete->path.'*'));
            @rmdir(base_path().'/upload/'.substr(@$delete->path, 0,-1));
            @$delete->delete(); 
          }
    }
 
  
  }

}
