
<section id="contentbody">
  <div class="container">
    <div class="row">
      <div class=" col-sm-12 col-md-6 col-lg-6">
        <div class="row">
          <div class="leftbar_content">
            <h2>The New Stuff</h2>
            <div class="singlepost_area">
			<?php foreach($post_data as $post){?>
              <div class="singlepost_content"> <a href="#" class="stuff_category">Technology</a> <span class="stuff_date">Nov <strong>17</strong></span>
                <h2><a href="#"><?php echo $post['post_title'];?></a></h2>
                <img class="img-center" src="<?php echo base_url('images/'.$post['post_img']);?>" alt="">
                <blockquote><?php echo $post['post_description'];?></blockquote>
                <ul>
                 
                  <li>Nunc tincidunt, elit non cursus euismod, lacus augue</li>
                </ul>
				<?php echo $post['post_video'];?>
               <h3>This is H3 Text Format</h3>
                <h4>This is H4 Text Format</h4>
                <h5>This is H5 Text Format</h5>
                <h6>This is H6 Text Format</h6>
                <a href="#" class="btn btn-primary">Primary</a> <a href="#" class="btn btn-success">Success</a> <a href="#" class="btn btn-info">Info</a> <a href="#" class="btn btn-danger">Danger</a> <a href="#" class="btn yellow_btn">Yellow</a> <a href="#" class="btn blue_btn">Blue</a> <a href="#">link</a>
                <div class="singlepage_pagination"> <a class="previous_btn" href="#">Previous</a> <a class="next_btn" href="#">Next</a> </div>
                <div class="social_area wow fadeInLeft">
                  <ul>
                    <li><a href="http://www.facebook.com/sharer.php?u=www.codingustaad.com"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                  </ul>
                </div>
                <div class="author"> <a href="#"><img src="../images/100x100.jpg" alt=""></a>
                  <div class="author_details">
                    <h3><a href="#">Author Name</a></h3>
                    <p>About Author Content lobortis. Proin ut nibh quis felis auctor ornare. Cras ultricies, nibh at mollis faucibus, justo eros porttitor mi, quis auctor lectus arcu sit amet nunc. Vivamus gravida vehicula arcu, vitae vulputate augue lacinia faucibus</p>
                  </div>
                </div>
              </div>
			  
			<?php }?>
            </div>
            <div class="similar_post_area">
              <h2>Similar Post You May Like <i class="fa fa-thumbs-o-up"></i></h2>
              <ul class="featured_nav similarpost_nav wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                <li> <a href="#" class="featured_img"><img alt="" src="../images/featured_img1.jpg"></a>
                  <div class="featured_title"> <a href="#" class="">Sed luctus semper odio aliquam rhoncus</a> </div>
                </li>
                <li> <a href="#" class="featured_img"><img alt="" src="../images/featured_img1.jpg"></a>
                  <div class="featured_title"> <a href="#" class="">Sed luctus semper odio aliquam rhoncus</a> </div>
                </li>
                <li> <a href="#" class="featured_img"><img alt="" src="../images/featured_img1.jpg"></a>
                  <div class="featured_title"> <a href="#" class="">Sed luctus semper odio aliquam rhoncus</a> </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-2 col-lg-2">
        <div class="row">
          <div class="middlebar_content">
            <h2 class="yellow_bg">What's Hot</h2>
            <div class="middlebar_content_inner">
              <ul class="middlebar_nav wow fadeInDown">
                <li> <a class="mbar_thubnail" href="#"><img src="../images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="../images/hot_img2.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="../images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="../images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="../images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="../images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="../images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="../images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
              </ul>
            </div>
            <div class="popular_categori">
              <h2 class="limeblue_bg">Most Popular Categories</h2>
              <ul class="poplr_catgnva wow fadeInDown">
                <li><a href="#">Business</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Life & Style</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Slider</a></li>
                <li><a href="#">Sports</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="row">
          <div class="rightbar_content">
            <div class="single_blog_sidebar">
              <h2>The Featured Stuff</h2>
              <ul class="featured_nav wow fadeInDown">
                <li> <a class="featured_img" href="#"><img src="../images/featured_img1.jpg" alt=""></a>
                  <div class="featured_title"> <a class="" href="#">Sed luctus semper odio aliquam rhoncus</a> </div>
                </li>
                <li> <a class="featured_img" href="#"><img src="../images/featured_img1.jpg" alt=""></a>
                  <div class="featured_title"> <a class="" href="#">Sed luctus semper odio aliquam rhoncus</a> </div>
                </li>
                <li> <a class="featured_img" href="#"><img src="../images/featured_img1.jpg" alt=""></a>
                  <div class="featured_title"> <a class="" href="#">Sed luctus semper odio aliquam rhoncus</a> </div>
                </li>
              </ul>
            </div>
            <div class="single_blog_sidebar">
              <h2>Popular Posts</h2>
              <ul class="middlebar_nav wow fadeInDown">
                <li> <a href="#" class="mbar_thubnail"><img alt="" src="../images/hot_img1.jpg"></a> <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a href="#" class="mbar_thubnail"><img alt="" src="../images/hot_img2.jpg"></a> <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a href="#" class="mbar_thubnail"><img alt="" src="../images/hot_img1.jpg"></a> <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a href="#" class="mbar_thubnail"><img alt="" src="../images/hot_img1.jpg"></a> <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a> </li>
              </ul>
            </div>
            <div class="single_blog_sidebar">
              <h2>Popular Tags</h2>
              <ul class="poplr_tagnav wow fadeInDown">
                <li><a href="#">Arts</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Nature</a></li>
                <li><a href="#">Comedy</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="#">Tourism</a></li>
                <li><a href="#">Videos</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
