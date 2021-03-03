<?php $__env->startSection('admin'); ?>

	<!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet box blue">
		<div class="portlet-title">
			<div class="caption">
<i class="fa fa-reorder"></i> <?php echo e($title); ?>

			</div>
		</div>
	<div class="portlet-body form">
<form action="<?php echo e(url( app('aurl').'/pages/'.$edit->id.'/edit' )); ?>" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

<div class="form-body">
    
<div class="form-group">
<label><?php echo e(trans('admin.name')); ?></label>
<input name="name" type="text"  class="form-control" value="<?php echo e($edit->name); ?>" >
</div>
 

 
<div class="form-group">
  <label>المحتوي</label>
  <textarea class="inbox-editor ckeditor form-control" name="content"><?php echo e($edit->content); ?></textarea>
</div>


<div class="form-group">
<label>ملفات</label><?php if($edit->files->count()): ?>
        <?php $__currentLoopData = $edit->files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(asset('assets/uplodedfiles/'. $file->file)); ?>" class="item slide-imgs h-100">
                <?php echo e($file->file); ?>

            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?> 
   لايوجد
      <?php endif; ?>
<input type="file" class="form-control" name="files[]" multiple />
</div>
 

<div class="form-actions left">
<div class="form-group">
<label><?php echo e(trans('admin.active')); ?> <input type="checkbox"  name="active" value="1" <?php if($edit->active == 1): ?> checked <?php endif; ?> /> </label>	
</div>

</div>
	</div>



<input  type="submit" value="<?php echo e(trans('admin.save')); ?>"  class="btn btn-success" />

</form>
	
	</div>
	<!-- END SAMPLE FORM PORTLET-->
<script src="<?php echo e(asset('public')); ?>/tinymce/hos.editor.min.js"></script>
<script>
tinymce.init(
  {
            selector:'textarea',
            language: 'ar',
            anguage_url : '/languages/ar.js',
            statusbar: false,
            image_title: true,
            automatic_uploads: true,
            menubar: "",
            height: 500,
            plugins: ['advlist autolink lists link image charmap preview ',
                      'visualblocks code fullscreen',
                      'insertdatetime media table paste code help wordcount codesample'
                    ],
            toolbar1:' formatselect | ' +
                     ' bold italic backcolor forecolor removeformat|'+
                     ' alignleft aligncenter ' +
                     ' alignright alignjustify |'+
                     ' bullist numlist outdent indent checklist|'+
                     ' undo redo preview| '+
                     ' image media link| table | codesample',
            codesample_languages: [
         		                         {text: 'HTML/XML', value: 'markup'},
         		                         {text: 'JavaScript', value: 'javascript'},
         		                         {text: 'CSS', value: 'css'},
         	                           {text: 'PHP', value: 'php'},
         	                         	 {text: 'Ruby', value: 'ruby'},
         		                         {text: 'Python', value: 'python'},
         		                         {text: 'Java', value: 'java'},
         		                         {text: 'C', value: 'c'},
         		                         {text: 'C#', value: 'csharp'},
         		                         {text: 'C++', value: 'cpp'}
         	],
          file_picker_types: 'image',
  file_picker_callback: function (cb, value, meta) {
      console.log('hi');
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');

    input.onchange = function () {
      var file = this.files[0];
 
      var reader = new FileReader();
      reader.onload = function () {
        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);
        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };

    input.click();
  },
  }
);
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>