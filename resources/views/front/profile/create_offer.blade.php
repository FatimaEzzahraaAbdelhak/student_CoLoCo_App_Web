@extends('front.layout.master')

@section('content')
   
@include('front.layout.shared.slider')


     <!-- ================ contact section start ================= -->
     <section class="contact-section">
            <div class="container">
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Add new Offer</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="{{ route('front.housings.store') }}" method="post" enctype="multipart/form-data">
                          @csrf
                            <div class="row">
							<div class="col-12">
                                    <div class="form-group">
                                    <input type="text" name="title" placeholder="Title" class="form-control">
                                    </div>
                                </div>
								<div class="col-12">
                                    <div class="form-group">
                                    <input type="text" name="phone" placeholder="Enter your phone number" class="form-control">
                                    </div>
                                </div>
								<div class="col-12">
                                    <div class="form-group">
                                    <input type="text" name="price" placeholder="Price" class="form-control">
                                    </div>
                                </div>
                            <div class="col-12">
                                 <div class="form-group">
                                <textarea name="rating" id="rating" placeholder="Description" class="form-control" cols="30" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                 <div class="form-group">
                                 <input name="address" id="address" placeholder="Address" class="form-control">
                                </div>
                            </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <input type="text" name="capacity" placeholder="Capacity" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <input type="text" name="superficie" placeholder="Superficie" class="form-control">
                                        
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <input type="text" name="longitude" placeholder="longitude" class="form-control">
                                        
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <input type="text" name="latitude" placeholder="latitude" class="form-control">
                                        
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="custom-file">
                                         <input type="file" name="images" class="custom-file-input" >
                                         <label class="custom-file-label" for="customFile">Choose file</label>
                                     </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button class="button button-contactForm boxed-btn">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Buttonwood, California.</h3>
                                <p>Rosemead, CA 91770</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+1 253 565 2365</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>support@colorlib.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
@endsection
