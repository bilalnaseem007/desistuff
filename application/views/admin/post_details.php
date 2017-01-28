 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Post Details</h2>
                        <div class="table-responsive">
                            <table class="table table-responsive tabel-bordered">
                                <thead>
                                    <tr>
                                        <th>Post ID</th>
                                        <th>Post Name</th>
                                        <th>Post Image</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php foreach($post_details as $row){?>
                                    <tr class="<?php if($row['status']==1)echo "success";else echo "danger";?>">
                                        <td><?php echo $row['post_id'];?></td>
                                        <td><?php echo $row['post_title'];?></td>
                                        <td><img src="<?php echo base_url('images/'.$row['post_img']);?>" width="100" height="100" class="img img-responsive"/></td>
										<td><?php echo $row['post_date'];?></td>
										<td><?php if($row['status']==1) echo "Published"; else echo "Unpublished";?></td>
										<?php if($row['status']==0){?>
										<td><a href="<?php echo site_url('admin/published_post/'.$row['post_id']);?>" class="btn btn-success">Published</a></td>
										<?php } else {?>
										<td><a href="<?php echo site_url('admin/unpublished_post/'.$row['post_id']);?>" class="btn btn-danger">Unpublished</a></td>
										<?php }?>
										<td><a href="<?php echo site_url('admin/published_post/'.$row['post_id']);?>" class="btn btn-danger">Delete</a></td>
								<?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
           
            