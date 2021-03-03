<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
app()->singleton('surl',function(){return 'store';});
app()->singleton('sroute',function(){return 'store';});
app()->singleton('st',function(){return 'store';});

app()->singleton('uurl',function(){return 'user';});
app()->singleton('uroute',function(){return 'user';});
app()->singleton('ut',function(){return 'user';});

*/


/*** new edit  28/7/2020 *****/
Route::get('pay','HomeController@pay_get')->name('pay');
Route::post('pay','HomeController@pay_post')->name('pay');
    // rate
Route::post('rate/save','HomeController@store_rate')->name('rate.store');

Route::get('pay/{id}', function () {
    return  'view.theme.pay';
});
Route::get('rate','HomeController@rate')->name('rate');
Route::get("Market",'HomeController@market')->name('market');

//


Route::get('YearReaports','HomeController@YearReaports');
Route::get('Policie','HomeController@Policie');

Route::get("episodes","HomeController@get_episodes")->name('episodes');
Route::post("episodes","HomeController@post_episodes")->name('episodes');
/***** end *******/

Route::get("test", function (){
    echo app('aurl');
    
});
 
app()->singleton('aurl',function(){return 'admin';});
app()->singleton('aroute',function(){return 'admin';});
app()->singleton('at',function(){return 'admin';});

app()->singleton('tmp',function(){return 'theme';});
app()->singleton('lang',function(){return 'ar';}); 



Route::get(app('aurl').'/login','Admin\Home@login_admin');	
Route::post(app('aurl').'/login','Admin\Home@login_admin_post');
 
Route::get('Albumes',function (){
    return  view('theme.albumes');
});

Route::get('Albumes/{id}',function (){
    return  view('theme.albumes_imgs');
});
/***************************** Admin Space **************************/

Route::group(['prefix'=>app('aurl'),'middleware'=>'admin'],function(){
Route::get('/','Admin\Home@home');
Route::get('logout','Admin\Home@logout_admin');
Route::resource('partner','PartnerController');   
    // new edit 28/7/2020 @mostfa
    // prfiex name space admin/
    Route::group(['namespace' => 'Admin'], function (){
         // numebr 
        Route::resource("Numbers","NumbersController");
        // said 
        Route::resource("Said","SaidController");
        // market
        Route::resource("Market","MarketController");
        // Albumes 
        Route::resource("Albume","AlbumeController");
        // AlbumeImage 
        Route::resource("AlbumeImage","AlbumeImageController");
        // pay
        Route::resource("Pay","PayController");
        // Ads 
        Route::resource('Ads','AdsController');
        // Episodes
        Route::resource("Episodes","EpisodesController");
        // Rates
        Route::get("Rates","RateController@index")->name('rates');
        Route::get("Rates/{id}","RateController@destroy");
        // YearReaports
        Route::resource("YearReaports","YearReportsController");
        // PolicieController
        Route::resource('Policie','PolicieController');
        // YearReaports
        Route::resource("YearReaports","YearReportsController");
        // PolicieController
        Route::resource('Policie','PolicieController');
    });
        
    
	Route::group(['middleware'=>'perm:settings'],function(){    
		Route::get('settings','Admin\Home@settings');
		Route::post('settings','Admin\Home@settings_post');
	    Route::resource('notifcations','Admin\Notifcations');
	});

	Route::group(['middleware'=>'perm:banners'],function(){
		Route::resource('banners','Admin\Banners');
	});

	Route::group(['middleware'=>'perm:country'],function(){
		Route::resource('countries','Admin\Countries');
		//Route::resource('areas','Admin\Areas');
		//Route::resource('cities','Admin\Cities');
		//Route::resource('sections','Admin\Sections');
	});

	Route::group(['middleware'=>'perm:users'],function(){
		Route::resource('users','Admin\Users');
	});	

	Route::group(['middleware'=>'perm:pages'],function(){
		 //Route::resource('pages','Admin\Pages');
		 Route::get('pages','Admin\Pages@index');
		 Route::get('pages/create','Admin\Pages@create');
		 Route::post('pages/store','Admin\Pages@store');
		 Route::get('pages/{id}/edit','Admin\Pages@edit');
		 Route::post('pages/{id}/edit','Admin\Pages@update');
		 Route::delete('pages/{id}/delete','Admin\Pages@delete');
	}); 
 
	  Route::get('sms','Admin\Home@settings_sms');
	  Route::post('sms','Admin\Home@sms_put');
	  Route::put('sms','SMS@sendmsg');

	  Route::resource('comments','Admin\Comments');
	  Route::resource('reports','Admin\Reports');

	  Route::resource('slides','Admin\Slides');

	   Route::group(['middleware'=>'perm:departments'],function(){
	    Route::resource('department','Admin\Departments');
		 });
		 
		 /////////////////Amr//////////////////////
		 Route::group(['middleware'=>'perm:departments'],function(){
			Route::resource('ImageCategory','Admin\ImageCategory');
			 });

        Route::group(['middleware'=>'perm:departments'],function(){
			Route::resource('VideoCategory','Admin\VideoCategory');
			 });
			 ////////////////////
		Route::group(['middleware'=>'perm:departments'],function(){
		  Route::resource('MyImage','Admin\MyImageController');
			});

		
			 
		Route::group(['middleware'=>'perm:departments'],function(){
		  Route::resource('MyVideo','Admin\MyVideoController');
			});
		//////////////////////////Amr//////////////////////////////////
	 
	  Route::group(['middleware'=>'perm:news'],function(){
	   Route::resource('news','Admin\ConNews');
	  });

	   Route::group(['middleware'=>'perm:orders'],function(){
	   Route::resource('orders','Admin\Orders');
	   });

	   Route::group(['middleware'=>'perm:orders2'],function(){
	   Route::resource('orders2','Admin\Orders2');
	   });

	   Route::group(['middleware'=>'perm:orders3'],function(){
	   Route::resource('orders3','Admin\Orders3');
	   });
	   
	   Route::get('downloadpdf/{id}','Admin\Orders3@downloadpdf');
	   Route::get('download/user/file/{id}','Admin\Orders3@download_full_pdf_user');

	   Route::group(['middleware'=>'perm:formspdf'],function(){
	   Route::resource('formspdf','Admin\FormsPDF');
	   });


	   Route::group(['middleware'=>'perm:links'],function(){

		  Route::resource('links','Admin\Links');
	      Route::delete('links','Admin\Links@sort_list_link');
		  
		});


	  Route::post('upload/file/ajax','Admin\ConNews@upload_file_ajax');
	  Route::post('delete/file','Admin\ConNews@delete_file_ajax');
 


	Route::group(['middleware'=>'perm:contact'],function(){
		Route::resource('contactus','Admin\ContactUs');
		Route::post('contactus/replay/{id}','Admin\ContactUs@replay');
		Route::post('contactus/go','Admin\ContactUs@go');
		Route::get('contactus/new/compose','Admin\ContactUs@compose');
		Route::post('contactus/new/compose','Admin\ContactUs@compose_post');
		Route::get('contactus/cronjob/messages','Admin\ContactUs@cronjob');
		Route::get('contactus/cronjob/messages/{id}/edit','Admin\ContactUs@compose_edit');
		Route::put('contactus/cronjob/messages/{id}/edit','Admin\ContactUs@compose_post_post');
		Route::delete('contactus/cronjob/messages/{id}/delete','Admin\ContactUs@compose_delete');
	});

   Route::group(['middleware'=>'perm:admingroup'],function(){
    Route::resource('admingroup','Admin\AdminGroups');
  });

});
 
 
 
Route::get('getlatlng/{id}','HomeController@getlatlng');
	Route::get('/', function () {
    return  '';
});


//Auth::routes();

Route::get('/','HomeController@index')->name('home');
Route::get('all/news','HomeController@all_news');
Route::get('all/category','HomeController@all_category');
Route::get('category/{id}','HomeController@category');
Route::get('news/{id}/{title}','HomeController@news');
Route::get('contactus','HomeController@contactus');
Route::post('contactus','HomeController@contactus_post');
Route::get('register','Users@register');
Route::post('register','Users@register_post');
Route::get('login','Users@login');
Route::post('login','Users@login_post');
Route::get('page/{page}','HomeController@page');
Route::get('search','HomeController@search');

Route::get('YearReaports','HomeController@YearReaports');
Route::get('Policie','HomeController@Policie');

Route::get('Gallary','HomeController@Gallary')->name('Gallary');

Route::get('forgot/password','Users@forgot_password');
Route::post('forgot/password','Users@forgot_password_post');
Route::get('reset/password/{hash}','Users@forgot_password_hash');
Route::post('reset/password/{hash}','Users@forgot_password_hash_post');

Route::group(['middleware'=>'auth'],function(){

 Route::get('resend/active/account','Users@resend_active_account');
 Route::get('active/sms/code','Users@active_sms');
 Route::post('active/sms/code','Users@active_sms_post');

 Route::get('myaccount','Users@myaccount');
 Route::get('myaccount/edit','Users@edit_account');
 Route::post('myaccount/edit','Users@edit_account_post');
 Route::get('myaccount/change/password','Users@change_password');
 Route::post('myaccount/change/password','Users@change_password_post');
 Route::get('logout','Users@logout');

 Route::get('step','Orders@index_');
 Route::get('step/{id}','Orders@index');
 Route::post('step/{id}','Orders@update_steps');
 Route::get('downloadpdf/{id}','Orders@downloadpdf');

 Route::post('upload/files','Orders@upload_pdf');
 Route::post('remove/file/data','Orders@removefile');
});

Route::get('cronjob/mail/lists/run', 'Admin\ContactUs@cronjob_maillist');
Route::get('page/{id}', 'Admin\Pages@show');
	Route::get('404',function(){
		return view('404');
	});
Route::get('active/{active}','Users@active');

