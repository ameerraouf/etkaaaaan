 <tr class="fid{{$data->id}}">
	 <td>{{$data->id}}</td>
	 <td style="text-align: right;">{{$data->pdf_name}}</td>
	 <td>
                           <small>
                             @if($data->status == null)
                              لم يتم الحفظ 
                             @elseif($data->status == 'panding') 
                             <span class="label label-danger">بالإنتظار</span>
                             @elseif($data->status == 'refused') 
                             <span class="label label-danger">مرفوض</span>
                             @endif
                           </small>
                           </td>
	 <td>
	 <a href="#" class="removefile" fid="{{$data->id}}"><i class="fa fa-trash"></i></a>
	 </td>
 </tr>