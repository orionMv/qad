@extends('layout')

@section('page')

<!--=== Breadcrumbs ===-->
    <div class="breadcrumbs breadcrumbs-dark">
        <div class="container">
            <h1 class="pull-left">Our Contacts</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Contacts</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row margin-bottom-30">
            <div class="col-md-9 mb-margin-bottom-30">
            

                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas feugiat. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit landitiis.</p><br />

                {!! Form::open(['url'=>'/contact/send_message','method'=>'POST','files'=>'false','class'=>'skyform contact-style','id'=>'sky-form3']) !!}
                    <fieldset class="no-padding">
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div class="form-group">
                                    {!! Form::label('name','Name') !!}
                                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div class="form-group">
                                    {!! Form::label('email','Email') !!}
                                    {!! Form::text('email',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div class="form-group">
                                    {!! Form::label('message','Message') !!}
                                    {!! Form::textarea('message',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        
                        <div class="margin-bottom-20"></div>
                        
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div class="form-group">
                                    {!! Form::submit('send message',['class'=>'form-control btn-u text-uppercase']) !!}
                                </div>
                            </div>
                        </div>
                        
                    </fieldset>

                    
                {!! Form::close() !!}
            </div><!--/col-md-9-->

            <div class="col-md-3">
                <!-- Contacts -->
                <div class="headline"><h2>Contacts</h2></div>
                <ul class="list-unstyled who margin-bottom-30">
                    <li><a href="#"><i class="fa fa-home"></i>5B Streat, City 50987 New Town US</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i>info@example.com</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>1(222) 5x86 x97x</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>http://www.example.com</a></li>
                </ul>

                <!-- Business Hours -->
                <div class="headline"><h2>Business Hours</h2></div>
                <ul class="list-unstyled margin-bottom-30">
                    <li><strong>Monday-Friday:</strong> 10am to 8pm</li>
                    <li><strong>Saturday:</strong> 11am to 3pm</li>
                    <li><strong>Sunday:</strong> Closed</li>
                </ul>

            </div><!--/col-md-3-->
        </div><!--/row-->

    </div><!--/container-->
    <!--=== End Content Part ===-->

@endsection