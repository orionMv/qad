@extends('layout')

@section('page')

<!--=== Breadcrumbs ===-->
    <div class="breadcrumbs  breadcrumbs-dark">
        <div class="container">
            <h1 class="pull-left">Publications</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Publications</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
    	<div class="row">
        	<div class="col-md-9">
            	<div class="headline"><h2>Latest Publications</h2></div>

                <!-- Clients Block-->
                <div class="row clients-page">
                
                    <div class="col-md-12">
                        <h3>Example Publication</h3>
                        <ul class="list-inline">
                            <li>Category: General</li>
                            <li><i class="icon-calendar color-green"></i> <a class="linked" href="#">29/11/1192 - Monday</a></li>
                        </ul>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati</p>
                        <p>Olerano ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna edetquam lacus. Fusce condimentum eleifend enim a sint occaecati feugiat..</p>
                        <p> <a href="/" class="btn-u">Download</a> </p>
                    </div>
                </div>
                <!-- End Clients Block-->

                <!-- Clients Block-->
                <div class="row clients-page">
                    
                    <div class="col-md-12">
                        <h3>Natural Green</h3>
                        <ul class="list-inline">
                            <li>Category: General</li>
                            <li><i class="icon-calendar color-green"></i> <a class="linked" href="#">29/11/1192 - Monday</a></li>
                        </ul>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati. Olerano ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna edetquam lacus. Fusce condimentum eleifend enim a sint occaecati feugiat..</p>
                        <p> <a href="/" class="btn-u">Download</a> </p>
                    </div>
                </div>
                <!-- End Clients Block-->

                <!-- Clients Block-->
                <div class="row clients-page">
                 
                    <div class="col-md-12">
                        <h3>sample publication</h3>
                        <ul class="list-inline">
                            <li>Category: General</li>
                            <li><i class="icon-calendar color-green"></i> <a class="linked" href="#">29/11/1192 - Monday</a></li>
                        </ul>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati</p>
                        <p>Olerano ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna edetquam lacus. Fusce condimentum eleifend enim a sint occaecati feugiat..</p>
                        <p> <a href="/" class="btn-u">Download</a> </p>
                    </div>
                </div>
                <!-- End Clients Block-->

                <!-- Clients Block-->
                <div class="row clients-page">
                     <div class="col-md-12">
                        <h3>Publication 4</h3>
                        <ul class="list-inline">
                            <li>Category: General</li>
                            <li><i class="icon-calendar color-green"></i> <a class="linked" href="#">29/11/1192 - Monday</a></li>
                        </ul>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati. Olerano ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna edetquam lacus. Fusce condimentum eleifend enim a sint occaecati feugiat..</p>
                        <p> <a href="/" class="btn-u">Download</a> </p>
                    </div>
                </div>
                <!-- End Clients Block-->

               
            </div><!--/col-md-9-->

        	<div class="col-md-3">
            <div class="headline"><h2>Search</h2></div>
            <form>
                
                <div class="form-group">
                
                    <input type="text" class="form-control" />
                
                </div>
                
                <div class="form-group">
                
                    <input type="submit" value="search" class="form-control btn-u" />
                
                </div>
            
            </form>
            	
            	<div class="who margin-bottom-30">
                    <div class="headline"><h2>Categories</h2></div>
                    <ul class="list-unstyled">
                        <li><a href="#">Category One</a></li>
                        <li><a href="#">Category Two</a></li>
                        <li><a href="#">Category Three</a></li>
                        <li><a href="#">Category Four</a></li>
                    </ul>    
                </div>
            	
            </div><!--/col-md-3-->
        </div><!--/row-->
    </div><!--/container-->
    <!--=== End Content Part ===-->

@endsection