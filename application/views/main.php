
<section id="contentbody">
  <div class="container">
    <div class="row">
      <div class=" col-sm-12 col-md-6 col-lg-6">
        <div class="row">
          <div class="leftbar_content">
            <h2>The New Stuff</h2>
			<?php foreach($post_data as $post){?>
            <div class="single_stuff wow fadeInDown">
              <div class="single_stuff_img"> <a href="<?php echo site_url('Welcome/post_detail/'.$post['post_id']);?>"><img class="img-responsive" src="<?php echo base_url('images/'.$post['post_img']);?>" alt=""></a> </div>
              <div class="single_stuff_article">
                <div class="single_sarticle_inner"> <a class="stuff_category" href="#">Technology</a>
                  <div class="stuff_article_inner"> <span class="stuff_date">Nov <strong>17</strong></span>
                    <h2><a href="<?php echo site_url('Welcome/post_detail/'.$post['post_id']);?>"><?php echo $post['post_title'];?></a></h2>
                    <p><?php echo $post['post_description'];?></p>
                  </div>
                </div>
              </div>
            </div>
			<?php } ?>
            
            
            <div class="stuffpost_paginatinonarea wow slideInLeft">
              <ul class="newstuff_pagnav">
                <li><a class="active_page" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-2 col-lg-2">
        <div class="row">
          <div class="middlebar_content">
            <h2 class="yellow_bg">What's Hot</h2>
            <div class="middlebar_content_inner wow fadeInUp">
              <ul class="middlebar_nav">
                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img2.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
              </ul>
            </div>
            <div class="popular_categori  wow fadeInUp">
              <h2 class="limeblue_bg">Most Popular Categories</h2>
              <ul class="poplr_catgnva">
                <li><a href="#">Business</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Life &amp; Style</a></li>
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
            <div class="single_blog_sidebar wow fadeInUp">
              <h2>The Featured Stuff</h2>
              <ul class="featured_nav">
                <li> <a class="featured_img" href="#"><img src="images/featured_img1.jpg" alt=""></a>
                  <div class="featured_title"> <a class="" href="#">Sed luctus semper odio aliquam rhoncus</a> </div>
                </li>
                <li> <a class="featured_img" href="#"><img src="images/featured_img1.jpg" alt=""></a>
                  <div class="featured_title"> <a class="" href="#">Sed luctus semper odio aliquam rhoncus</a> </div>
                </li>
                <li> <a class="featured_img" href="#"><img src="images/featured_img1.jpg" alt=""></a>
                  <div class="featured_title"> <a class="" href="#">Sed luctus semper odio aliquam rhoncus</a> </div>
                </li>
              </ul>
            </div>
            <div class="single_blog_sidebar wow fadeInUp">
              <h2>Popular Posts</h2>
              <ul class="middlebar_nav wow">
                <li> <a href="#" class="mbar_thubnail"><img alt="" src="images/hot_img1.jpg"></a> <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a href="#" class="mbar_thubnail"><img alt="" src="images/hot_img2.jpg"></a> <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a href="#" class="mbar_thubnail"><img alt="" src="images/hot_img1.jpg"></a> <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a href="#" class="mbar_thubnail"><img alt="" src="images/hot_img1.jpg"></a> <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a> </li>
              </ul>
            </div>
            <div class="single_blog_sidebar wow fadeInUp">
              <h2>Popular Tags</h2>
              <ul class="poplr_tagnav">
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
