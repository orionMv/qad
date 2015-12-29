@extends('layout')

@section('page')
<!--=== Slider ===-->
    
    <!--=== Slider ===-->
    <div class="slider-inner">
        <div id="da-slider" class="da-slider">
   
            <div class="da-arrows">
                <span class="da-arrows-prev"></span>
                <span class="da-arrows-next"></span>
            </div>
        </div>
    </div><!--/slider-->
    <!--=== End Slider ===-->
    
    <!--/slider-->
    <!--=== End Slider ===-->

    <!--=== Purchase Block ===-->
    <div class="purchase">
        <div class="container">
            <div class="row">
                <div class="col-md-9 animated fadeInLeft">
                    <span>Feature article or block</span>
                    <p>Here goes a breif summary of this article along with a feature image if any. The button in this block can be a link to the article or a download link or an external link to a subsidiary website.</p>
                </div>
                <div class="col-md-3 btn-buy animated fadeInRight">
                    <a href="#" class="btn-u btn-u-lg text-uppercase"> Read More</a>
                </div>
            </div>
        </div>
    </div><!--/row-->
    <!-- End Purchase Block -->

    <!--=== Content Part ===-->
    <div class="container content-sm">
    	

    	<!-- Recent Works -->
        <div class="headline"><h2>Recent Publications</h2></div>
        <div class="row margin-bottom-20">
            
            <div class="col-md-4 col-sm-6">
                <div class="tag-box tag-box-v7">
                            <h2>Publication name - 29/11/1992</h2>
                            <p>Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet consectetur adipiscing elit. Ut non libero consectetur adipiscing elit ellentesque viverra vehicu. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor...</p>
                            <a class="btn-more" href="/#">Read More +</a>
                </div>
           </div>
            
            <div class="col-md-4 col-sm-6">
                <div class="tag-box tag-box-v7">
                            <h2>Primary Education Standards</h2>
                            <p>Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet consectetur adipiscing elit. Ut non libero consectetur adipiscing elit ellentesque viverra vehicu. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor...</p>
                            <a class="btn-more" href="/#">Read More +</a>
                </div>
           </div>
            
            <div class="col-md-4 col-sm-6">
                <div class="tag-box tag-box-v7">
                            <h2>Ammended Grading Scheme</h2>
                            <p>Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet consectetur adipiscing elit. Ut non libero consectetur adipiscing elit ellentesque viverra vehicu. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor...</p>
                            <a class="btn-more" href="/publication">Read More +</a>
                </div>
           </div>
            
        </div>
        
    	<!-- End Recent Works -->
    	            
    	
    	<!--=== Purchase Block ===-->
    <div class="row">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12 text-center">
                    <a href="#" class="btn  btn-u text-uppercase form-control"> View All Publications</a>
                </div>
            </div>
        </div>
    </div><!--/row-->
    <!-- End Purchase Block -->

    <div class="clear-fix"></div>
    
    
                    
    <!-- Three Columns -->
    <div class="container content">
        <div class="text-center margin-bottom-50">
            <h2 class="title-v2 title-center">Featured Gallery</h2>
        </div>

        <div class="row  margin-bottom-30">
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="/img/main/img2.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 1">
                    <span><img class="img-responsive" src="/img/main/img2.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="/img/main/img4.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 2">
                    <span><img class="img-responsive" src="/img/main/img4.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="/img/main/img5.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 3">
                    <span><img class="img-responsive" src="/img/main/img5.jpg" alt=""></span>
                </a>
            </div>
        </div>

        <div class="row margin-bottom-30">
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="/img/main/img6.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 4">
                    <span><img class="img-responsive" src="/img/main/img6.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="/img/main/img7.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 5">
                    <span><img class="img-responsive" src="/img/main/img7.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="/img/main/img8.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 6">
                    <span><img class="img-responsive" src="/img/main/img8.jpg" alt=""></span>
                </a>
            </div>
        </div>

        
    </div>
    <!-- End Three Columns -->
    
      </div><!--/container-->
    <!-- End Content Part -->
@endsection