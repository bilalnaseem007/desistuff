 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add Post</h2>
<form action="<?php echo site_url('admin/insert_post');?>"  enctype="multipart/form-data" method="post">
  <div class="form-group">
    <label for="title">Post Titile</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Title">
  </div>
 <div class="form-group">
    <label for="image">Post Image</label>
    <input type="file" name="image" class="form-control" id="image" placeholder="Title">
   <p class="help-block">Image Size Should be less than 1MB and 1024X786</p>
  </div>
  <div class="form-group">
    <label for="image">Post Video URL</label>
    <input type="text" name="video" class="form-control" id="video" placeholder="Video Url">
  </div>
   <div class="form-group">
    <label for="description">Post Description</label>
    <textarea name="description" class="form-control" id="description" placeholder="description"></textarea>
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>					 
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>