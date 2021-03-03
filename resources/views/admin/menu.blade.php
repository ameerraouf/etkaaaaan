<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
    <li class="sidebar-toggler-wrapper add-ccs">
        <a href="{{ url('/') }}" target="_blank">
            <i class="fa fa-home"></i>
            <span class="title">
							واجهة الموقع
						</span>
            <span class="selected">
						</span>
        </a>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler hidden-phone">
        </div>

        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    </li>
    <li class="sidebar-search-wrapper">
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <form class="sidebar-search" action="extra_search.html" method="POST">
            <div class="form-container">
                <div class="input-box">
                    <a href="javascript:;" class="remove">
                    </a>
                    <input type="text" placeholder="Search..."/>
                    <input type="button" class="submit" value=" "/>
                </div>
            </div>
        </form>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
    </li>
    <li class="start @if(empty(Request::segment(2))) active @endif">
        <a href="{{ url(app('aurl')) }}">
            <i class="fa fa-home"></i>
            <span class="title">
							{{ trans('admin.home') }}
						</span>
            <span class="selected">
						</span>
        </a>
    </li>


    @if(auth()->user()->admin()->first()->settings == 1)
        <li class="@if(Request::segment(2) == 'settings' || Request::segment(2) ==  'sms') active open @endif">
            <a href="javascript:;">
                <i class="fa fa-cogs"></i>
                <span class="title">
							{{ trans('admin.settings') }}
						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{ url(app('aurl')) }}/settings">
                        {{ trans('admin.settings') }}
                    </a>
                </li>

            </ul>
        </li>
    @endif

    @if(auth()->user()->admin()->first()->admingroup == 1)
        <li class="@if(Request::segment(2) == 'admingroup') active open @endif">
            <a href="javascript:;">
                <i class="fa fa-group"></i>
                <span class="title">
							{{ trans('admin.admingroup') }}
						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{ url(app('aurl')) }}/admingroup">
                        {{ trans('admin.admingroup') }}
                    </a>
                </li>
                <li>
                    <a href="{{ url(app('aurl')) }}/admingroup/create">
                        {{ trans('admin.addadmingroup') }}
                    </a>
                </li>
            </ul>
        </li>
    @endif
    @if(auth()->user()->admin()->first()->admingroup == 1)
        <li>
            <a href="javascript:;">
                <i class="fa fa-group"></i>
                <span class="title">
							{{ trans('شركاء العمل') }}
						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{ url(app('aurl')) }}/partner">
                        {{ trans('الكل') }}
                    </a>
                </li>
            </ul>
        </li>
    @endif

    <!--@if(auth()->user()->admin()->first()->users == 1)-->
    <!--    <li class="@if(Request::segment(2) == 'users') active open @endif">-->
    <!--        <a href="javascript:;">-->
    <!--            <i class="fa fa-group"></i>-->
    <!--            <span class="title">-->
				<!--			{{ trans('admin.users') }}-->
				<!--		</span>-->
    <!--            <span class="arrow ">-->
				<!--		</span>-->
    <!--        </a>-->
    <!--        <ul class="sub-menu">-->
    <!--            <li>-->
    <!--                <a href="{{ url(app('aurl')) }}/users">-->
    <!--                    {{ trans('admin.users') }}-->
    <!--                </a>-->
    <!--            </li>-->
    <!--            <li>-->
    <!--                <a href="{{ url(app('aurl')) }}/users/create">-->
    <!--                    {{ trans('admin.adduser') }}-->
    <!--                </a>-->
    <!--            </li>-->
    <!--        </ul>-->
    <!--    </li>-->
    <!--@endif-->

    @if(auth()->user()->admin()->first()->departments == 1)
        <li class="@if(Request::segment(2) == 'departments') active open @endif">
            <a href="javascript:;">
                <i class="fa fa-list"></i>
                <span class="title">
							{{ trans('admin.departments') }}
						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{ url(app('aurl')) }}/department">
                        {{ trans('admin.departments') }}
                    </a>
                </li>
                <li>
                    <a href="{{ url(app('aurl')) }}/department/create">
                        {{ trans('admin.add') }}
                    </a>
                </li>
            </ul>
        </li>
    @endif

    {{-- /////////////////////////////////Image control/////////////////////////// --}}
    <li class="@if(Request::segment(2) == 'ImageCategory') active open @endif">
        <a href="javascript:;">
            <i class="fa fa-list"></i>
            <span class="title">
                        {{ trans('admin.ImageCategory') }}
                    </span>
            <span class="arrow ">
                    </span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{ url(app('aurl')) }}/ImageCategory">
                    {{ trans('admin.ImageCategory') }}
                </a>
            </li>
            <li>
                <a href="{{ url(app('aurl')) }}/ImageCategory/create">
                    {{ trans('admin.add') }}
                </a>
            </li>
        </ul>
    </li>
    {{-- ///////////////////////////// --}}
    <li class="@if(Request::segment(2) == 'MyImage') active open @endif">
        <a href="javascript:;">
            <i class="fa fa-list"></i>
            <span class="title">
                        {{ trans('admin.MyImage') }}
                    </span>
            <span class="arrow ">
                    </span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{ url(app('aurl')) }}/MyImage">
                    {{ trans('admin.MyImage') }}
                </a>
            </li>
            <li>
                <a href="{{ url(app('aurl')) }}/MyImage/create">
                    {{ trans('admin.add') }}
                </a>
            </li>
        </ul>
    </li>
    {{-- //////////////////////////////////Video control////////////////////// --}}
    <li class="@if(Request::segment(2) == 'VideoCategory') active open @endif">
        <a href="javascript:;">
            <i class="fa fa-list"></i>
            <span class="title">
                        {{ trans('admin.VideoCategory') }}
                    </span>
            <span class="arrow ">
                    </span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{ url(app('aurl')) }}/VideoCategory">
                    {{ trans('admin.VideoCategory') }}
                </a>
            </li>
            <li>
                <a href="{{ url(app('aurl')) }}/VideoCategory/create">
                    {{ trans('admin.add') }}
                </a>
            </li>
        </ul>
    </li>
    {{-- //////////////////videos///////////////////// --}}
    <li class="@if(Request::segment(2) == 'MyVideo') active open @endif">
        <a href="javascript:;">
            <i class="fa fa-list"></i>
            <span class="title">
                        {{ trans('admin.MyVideo') }}
                    </span>
            <span class="arrow ">
                    </span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{ url(app('aurl')) }}/MyVideo">
                    {{ trans('admin.MyVideo') }}
                </a>
            </li>
            <li>
                <a href="{{ url(app('aurl')) }}/MyVideo/create">
                    {{ trans('admin.add') }}
                </a>
            </li>
        </ul>
    </li>
    {{-- ////////////////////////end of videos///////////// --}}

    @if(auth()->user()->admin()->first()->news == 1)
        <li class="@if(Request::segment(2) == 'news') active open @endif">
            <a href="javascript:;">
                <i class="fa fa-file-o"></i>
                <span class="title">
							{{ trans('admin.news') }} 
						<span class="label label-info">
						    {{App\News::count()}}
						</span>
				</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{ url(app('aurl')) }}/news">
                        {{ trans('admin.news') }}

                        <span class="label label-info">{{App\News::count()}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url(app('aurl')) }}/news/create">
                        {{ trans('admin.add') }}
                    </a>
                </li>
            </ul>
        </li>
    @endif

    <!--<li class="@if(Request::segment(2) == 'slides') active open @endif">-->
    <!--    <a href="javascript:;">-->
    <!--        <i class="fa fa-file"></i>-->
    <!--        <span class="title">-->
				<!--			{{ trans('admin.slideshow') }}-->
				<!--		</span>-->
    <!--        <span class="arrow ">-->
				<!--		</span>-->
    <!--    </a>-->
    <!--    <ul class="sub-menu">-->
    <!--        <li>-->
    <!--            <a href="{{ url(app('aurl')) }}/slides">-->
    <!--                {{ trans('admin.slideshow') }}-->
    <!--            </a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--            <a href="{{ url(app('aurl')) }}/slides/create">-->
    <!--                {{ trans('admin.add') }}-->
    <!--            </a>-->
    <!--        </li>-->
    <!--    </ul>-->
    <!--</li>-->

    <!--@if(auth()->user()->admin()->first()->orders == 1 || auth()->user()->admin()->first()->orders2 == 1  || auth()->user()->admin()->first()->orders3 == 1)-->
    <!--    <li class="@if(in_array(Request::segment(2),['orders3','orders2','orders'])) active open @endif">-->
    <!--        <a href="javascript:;">-->
    <!--            <i class="fa fa-file"></i>-->
    <!--            <span class="title">-->
				<!--			{{ trans('admin.orders') }}-->
				<!--		</span>-->
    <!--            <span class="arrow ">-->
				<!--		</span>-->
    <!--            <span class="label label-info">-->
				<!--		  {{App\Order::where('status','panding')->count() + App\Order2::where('status','panding')->count() + App\Order3::where('status','panding')->count()}}-->
				<!--		  </span>-->
    <!--        </a>-->
    <!--        <ul class="sub-menu">-->
    <!--            @if(auth()->user()->admin()->first()->orders == 1)-->
    <!--                <li>-->
    <!--                    <a href="{{ url(app('aurl')) }}/orders">-->
    <!--                        {{ trans('admin.orders_step1') }}-->

    <!--                        <span class="label label-info">{{App\Order::where('status','panding')->count()}}</span>-->
    <!--                    </a>-->
    <!--                </li>-->
    <!--            @endif-->
    <!--            @if(auth()->user()->admin()->first()->orders2 == 1)-->
    <!--                <li>-->
    <!--                    <a href="{{ url(app('aurl')) }}/orders2">-->
    <!--                        {{ trans('admin.orders_step2') }}-->

    <!--                        <span class="label label-info">{{App\Order2::where('status','panding')->count()}}</span>-->
    <!--                    </a>-->
    <!--                </li>-->
    <!--            @endif-->
    <!--            @if(auth()->user()->admin()->first()->orders3 == 1)-->
    <!--                <li>-->
    <!--                    <a href="{{ url(app('aurl')) }}/orders3">-->
    <!--                        {{ trans('admin.orders_step3') }}-->

    <!--                        <span class="label label-info">{{App\Order3::where('status','panding')->count()}}</span>-->
    <!--                    </a>-->
    <!--                </li>-->
    <!--            @endif-->
    <!--        </ul>-->
    <!--    </li>-->
    <!--@endif-->

    <!--@if(auth()->user()->admin()->first()->formspdf == 1)-->
    <!--    <li class="@if(Request::segment(2) == 'formspdf' || Request::segment(2) == 'formspdf') active open @endif">-->
    <!--        <a href="javascript:;">-->
    <!--            <i class="fa fa-file"></i>-->
    <!--            <span class="title">-->
				<!--			{{ trans('admin.formspdf') }}-->
				<!--		</span>-->
    <!--            <span class="arrow ">-->
				<!--		</span>-->
    <!--        </a>-->
    <!--        <ul class="sub-menu">-->
    <!--            <li>-->
    <!--                <a href="{{ url(app('aurl')) }}/formspdf">-->
    <!--                    {{ trans('admin.formspdf') }}-->
    <!--                </a>-->
    <!--            </li>-->
    <!--            <li>-->
    <!--                <a href="{{ url(app('aurl')) }}/formspdf/create">-->
    <!--                    {{ trans('admin.add') }}-->
    <!--                </a>-->
    <!--            </li>-->
    <!--        </ul>-->
    <!--    </li>-->
    <!--@endif-->



    @if(auth()->user()->admin()->first()->links == 1)
        <li class="@if(Request::segment(2) == 'links') active open @endif">
            <a href="javascript:;">
                <i class="fa fa-link"></i>
                <span class="title">
							{{ trans('admin.links') }}
						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{ url(app('aurl')) }}/links">
                        {{ trans('admin.links') }}
                    </a>
                </li>
                <li>
                    <a href="{{ url(app('aurl')) }}/links/create">
                        {{ trans('admin.add') }}
                    </a>
                </li>
            </ul>
        </li>
    @endif


    @if(auth()->user()->admin()->first()->country == 1)
        <li class="@if(
				in_array(Request::segment(2), ['countries','areas','cities','sections'])) active open @endif">
            <a href="javascript:;">
                <i class="fa fa-globe"></i>
                <span class="title">
							{{ trans('admin.countries_area_city_sec') }}
						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{ url(app('aurl')) }}/countries">
                        {{ trans('admin.countries') }}
                    </a>
                </li>

                @php
                    /*
                   <li>
                       <a href="{{ url(app('aurl')) }}/areas">
                            {{ trans('admin.areas') }}
                       </a>
                   </li>

                   <li>
                       <a href="{{ url(app('aurl')) }}/cities">
                            {{ trans('admin.city') }}
                       </a>
                   </li>

                   <li>
                       <a href="{{ url(app('aurl')) }}/sections">
                            {{ trans('admin.section') }}
                       </a>
                   </li>
                    */
                @endphp
            </ul>
        </li>
    @endif

    @if(auth()->user()->admin()->first()->pages == 1)
        <li class="@if(Request::segment(2) == 'pages') active open @endif">
            <a href="javascript:;">
                <i class="fa fa-file"></i>
                <span class="title">
							{{ trans('admin.pages') }}
						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{ url(app('aurl')) }}/pages">
                        {{ trans('admin.pages') }}
                    </a>
                </li>
                <li>
                    <a href="{{ url(app('aurl')) }}/pages/create">
                        {{ trans('admin.add') }}
                    </a>
                </li>
            </ul>
        </li>
    @endif



    @if(auth()->user()->admin()->first()->comments == 1 and 44 == 55)
        <li class="@if(Request::segment(2) == 'comments') active open @endif">
            <a href="javascript:;">
                <i class="fa fa-comment"></i>
                <span class="title">
							{{ trans('admin.comments') }}

							<span class="label label-info">{{App\Comment::count()}}</span>
						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{ url(app('aurl')) }}/comments">
                        {{ trans('admin.comments') }}
                        <span class="label label-info"> {{App\Comment::where('active',0)->count()}} </span>
                    </a>
                </li>
            </ul>
        </li>
    @endif

    @if(auth()->user()->admin()->first()->reports == 1 and 1 == 8)
        <li class="@if(Request::segment(2) == 'reports') active open @endif">
            <a href="javascript:;">
                <i class="fa fa-file"></i>
                <span class="title">
							{{ trans('admin.reports') }}
							 <span class="label label-info">{{App\Report::where('done',0)->count()}}</span>
						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{ url(app('aurl')) }}/reports">
                        {{ trans('admin.reports') }}
                        <span class="label label-info">{{App\Report::where('done',0)->count()}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url(app('aurl')) }}/reports?get=report_comment">
                        {{ trans('admin.report_comment') }}
                        <span class="label label-info">{{App\Report::where('done',0)->where('comment_id','>',0)->count()}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url(app('aurl')) }}/reports?get=report_to_news">
                        {{ trans('admin.report_to_news') }}
                        <span class="label label-info">{{App\Report::where('done',0)->where('news_id','>',0)->count()}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url(app('aurl')) }}/reports?get=report_to_user">
                        {{ trans('admin.report_to_user') }}
                        <span class="label label-info">{{App\Report::where('done',0)->where('to_user_id','>',0)->count()}}</span>
                    </a>
                </li>

            </ul>
        </li>
    @endif



    @if(auth()->user()->admin()->first()->banners == 1)
        <li class="@if(Request::segment(2) == 'banners') active open @endif">
            <a href="javascript:;">
                <i class="fa fa-clock-o"></i>
                <span class="title">
							{{ trans('admin.banners') }}
						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{ url(app('aurl')) }}/banners">
                        {{ trans('admin.banners') }}
                    </a>
                </li>
                <li>
                    <a href="{{ url(app('aurl')) }}/banners/create">
                        {{ trans('admin.add') }}
                    </a>
                </li>


            </ul>
        </li>
    @endif


    @if(auth()->user()->admin()->first()->contact == 1)
        <li class="@if(Request::segment(2) == 'contactus') active open @endif">
            <a href="javascript:;">
                <i class="fa fa-envelope-o"></i>
                <span class="title">
							{{ trans('admin.contactus') }}
						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{ url(app('aurl')) }}/contactus">
                        {{ trans('admin.contactus') }}
                    </a>
                </li>
                <li>
                    <a href="{{ url(app('aurl')) }}/contactus/cronjob/messages">
                        {{ trans('admin.cronjob_emails') }}
                    </a>
                </li>
            </ul>
        </li>
    @endif
    
    
   
        <li 
        class="@if(Request::segment(2) == 'Albume' OR Request::segment(2) == 'AlbumeImage')  active open @endif">
            <a href="javascript:;">
                <i class="fa fa fa-sitemap"></i>
                <span class="title">
						الالبومات
						</span>
                <span class="arrow ">
						</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{ url(app('aurl')) }}/Albume">
                        الالبومات
                    </a>
                </li>
                <li>
                    <a href="{{ url(app('aurl')) }}/AlbumeImage">
                       صور الالبومات
                    </a>
                </li>
            </ul>
        </li>

    

    
    <li class="start " style="border-top:1px solid #5c5c5c ">
        <a href="{{ url(app('aurl') .'/YearReaports' ) }}">
            <i class="fa fa-sitemap"></i>
            <span class="title">
						التقارير السنويه
						</span>
            <span>
						</span>
        </a>
    </li>
    
    <li class="start " style="border-top:1px solid #5c5c5c ">
        <a href="{{ url(app('aurl') .'/Policie' ) }}">
            <i class="fa fa-sitemap"></i>
            <span class="title">
						السياسات
						</span>
            <span>
						</span>
        </a>
    </li>
    
  

</ul>