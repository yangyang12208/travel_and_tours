   <!-- content -->
   <section class="py-5">
    <div class="container">
        <div class="row gx-5">
            <aside class="col-lg-6">
                <div class="border rounded-4 mb-3">
                    <img src="{{ asset('booking-images/'. $data->car_images) }}" 
                         style="width: 100%; height: auto; margin: auto;" 
                         class="rounded-4 fit" />
          </div>
        </aside>
        <main class="col-lg-6">
          <div class="ps-lg-3">
            <h4 class="title text-primary">
                {{-- {{ TITLE NAME}} --}}
               {{ $data->car_name }}
            </h4>
            <div class="d-flex flex-row my-3">
              <div class="text-warning mb-1 me-2">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span class="ms-1">
                  4.5
                </span>
              </div>
              <span class="text-primary"><i class="fas fa-shopping-basket fa-sm mx-1"></i>excellent</span>
         
            </div>
  
            <div class="mb-3">
              <span class="h5 text-muted">PHP {{$data->car_price }}  </span>
              <span class="text-muted">/Per Day</span>
            </div>
  
            <p class="text-muted">
              <span class="text-primary fw-bold">Description</span><br>
                <span> {{ $data->car_description }} </span>
              <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="d-flex flex-column">
                        <span class="mb-2 text-muted">
                            <i class="fas fa-users me-1 text-primary"></i>
                            {{ $data->car_seats }}
                        </span>
                        <span class="mb-2 text-muted">
                            <i class="fas fa-cog me-1 text-primary"></i>
                            {{ $data->car_features }}
                        </span>
                        <span class="mb-2 text-muted">
                            <i class="fas fa-car me-1 text-primary"></i>
                            {{ $data->car_transmission }}
                        </span>
                        <span class="mb-2 text-muted">
                            <i class="fas fa-door-open me-1 text-primary"></i>
                            {{ $data->car_doors }}
                        </span>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="d-flex flex-column">
                      <span class="mb-2 text-muted">
                        <i class="fas fa-calendar-alt me-1 text-primary"></i>
                        {{ $data->driver_age }} <span style="">year's old</span>
                    </span>
                    <span class="mb-2 text-muted">
                        <i class="fas fa-user me-1 text-primary"></i>
                        {{ $data->driver_name }} 
                    </span>
                    <span class="mb-2 text-muted">
                        <i class="fas fa-car me-1 text-primary"></i>
                        {{ $data->car_type }}
                    </span>
                    </div>
                </div>
            </div>
            
            
            
                      
             
            <hr />
            
            <a href="#" class="btn btn-primary shadow-0">  <i class="bi bi-book"></i>  Book Now </a>
          </div>
        </main>
      </div>
    </div>
  </section>
  <!-- content -->

    
  <section class="bg-light border-top py-4">
    <div class="container-fluid">
        <div class="row gx-4">
            <div class="col-lg-8 mb-4">
                <div class="border rounded-2 px-3 py-2 bg-white">
                    <!-- Pills navs -->
                    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                        <li class="nav-item d-flex" role="presentation">
                            <a class="nav-link d-flex align-items-center justify-content-center w-100 active"
                               id="ex1-tab-1" data-bs-toggle="tab" href="#ex1-pills-1"
                               role="tab" aria-controls="ex1-pills-1" aria-selected="true">
                                Included
                            </a>
                        </li>

                        <li class="nav-item d-flex" role="presentation">
                            <a class="nav-link d-flex align-items-center justify-content-center w-100"
                               id="ex1-tab-2" data-bs-toggle="tab" href="#ex1-pills-2"
                               role="tab" aria-controls="ex1-pills-2" aria-selected="false">
                               Car Policy:
                            </a>
                        </li>

                        <li class="nav-item d-flex" role="presentation">
                            <a class="nav-link d-flex align-items-center justify-content-center w-100"
                               id="ex1-tab-3" data-bs-toggle="tab" href="#ex1-pills-3"
                               role="tab" aria-controls="ex1-pills-3" aria-selected="false">
                               Customer Review
                            </a>
                        </li>

                        <li class="nav-item d-flex" role="presentation">
                            <a class="nav-link d-flex align-items-center justify-content-center w-100"
                               id="ex1-tab-4" data-bs-toggle="tab" href="#ex1-pills-4"
                               role="tab" aria-controls="ex1-pills-4" aria-selected="false">
                                FeedBack
                            </a>
                        </li>
                    </ul>
                    <!-- Pills navs -->

                    <!-- Pills content -->
                    <div class="tab-content" id="ex1-content">
                        <!-- Included Tab Content -->
                        <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                            {!!  $data->car_included !!}
                        </div>


                                      <!-- Rental Policy -->
                        <div class="tab-pane fade mb-2" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                          <span class="text-muted">{!! $data->car_policy !!}</span>
                        </div>
                                    <!-- Customer Review -->
                                    <div class="tab-pane fade mb-2" id="ex1-pills-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                                      <h5 class="mb-3">Customer Reviews</h5>
                                      
                                      <div class="review mb-3">
                                          <div class="d-flex align-items-center mb-2">
                                              <img src="https://via.placeholder.com/40" alt="Reviewer Image" class="rounded-circle me-2">
                                              <div class="text-warning mb-1 me-2">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fas fa-star-half-alt"></i>
                                                  <span class="ms-1">4.5</span>
                                              </div>
                                              <div>
                                                  <span class="text-muted">by John Doe</span>
                                                  <br>
                                                  <small class="text-muted">Reviewed on: September 15, 2024</small>
                                              </div>
                                          </div>
                                          <p>
                                              "I had an amazing experience with this service! The customer support was exceptional, and the quality of the product exceeded my expectations. Highly recommended!"
                                          </p>
                                      </div>
                                  
                                      <div class="review mb-3">
                                          <div class="d-flex align-items-center mb-2">
                                              <img src="https://via.placeholder.com/40" alt="Reviewer Image" class="rounded-circle me-2">
                                              <div class="text-warning mb-1 me-2">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <span class="ms-1">5.0</span>
                                              </div>
                                              <div>
                                                  <span class="text-muted">by Jane Smith</span>
                                                  <br>
                                                  <small class="text-muted">Reviewed on: September 12, 2024</small>
                                              </div>
                                          </div>
                                          <p>
                                              "Absolutely loved it! The rental process was smooth, and the item was in excellent condition. Will definitely use this service again!"
                                          </p>
                                      </div>
                                  
                                      <div class="review mb-3">
                                          <div class="d-flex align-items-center mb-2">
                                              <img src="https://via.placeholder.com/40" alt="Reviewer Image" class="rounded-circle me-2">
                                              <div class="text-warning mb-1 me-2">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star-half-alt"></i>
                                                  <i class="far fa-star"></i>
                                                  <span class="ms-1">4.0</span>
                                              </div>
                                              <div>
                                                  <span class="text-muted">by Alex Brown</span>
                                                  <br>
                                                  <small class="text-muted">Reviewed on: September 10, 2024</small>
                                              </div>
                                          </div>
                                          <p>
                                              "Good service, but there were some delays in delivery. Overall, the product was worth it!"
                                          </p>
                                      </div>
                                  </div>
                        <!----   FEEDBACK ---->
                        <div class="tab-pane fade mb-2" id="ex1-pills-4" role="tabpanel" aria-labelledby="ex1-tab-4">
                          <h2 class="mb-4">Customer Feedback</h2>
                          <form id="feedback-form">
                              <div class="mb-3">
                                  <label for="name" class="form-label">Your Name</label>
                                  <input type="text" class="form-control" id="name" required>
                              </div>
                      
                              <div class="mb-3">
                                  <label for="email" class="form-label">Your Email</label>
                                  <input type="email" class="form-control" id="email" required>
                              </div>
                      
                              <div class="mb-3">
                                  <label for="message" class="form-label">Your Feedback</label>
                                  <textarea class="form-control" id="message" rows="4" required></textarea>
                              </div>
                      
                              <div class="mb-4">
                              
                      
                                  <label for="rating-select" class="form-label">Rate (Select Option)</label>
                                  <select id="rating-select" class="form-select border border-secondary" required>
                                      <option value="selct " disabled selected>Select Rating</option>
                                      <option value="5">Excellent</option>
                                      <option value="4">Very Good</option>
                                      <option value="3">Good</option>
                                      <option value="2">Fair</option>
                                      <option value="1">Poor</option>
                                  </select>
                              </div>
                      
                              <button type="submit" class="btn btn-primary">Submit Feedback</button>
                          </form>
                      </div>
                      
                        </div>
                    </div>
                      
                </div>
    
        <!------     SIMILAR ITEMS   -------->
      <div class="col-lg-4">
      <div class="px-0 border rounded-2 shadow-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Similar Items</h5>
            @foreach ($otherCars as $data)
            <div class="d-flex mb-3">
              @auth
              <a href="{{ route('car_details',$data->id)}}" class="me-3">
                <img src="{{ asset('booking-images/'. $data->car_images) }}" style="width: 96px; height: 96px; object-fit: cover;" class="img-md img-thumbnail" />
              </a>
                  @else
                  <a href="{{ route('car-details',$data->id)}}" class="me-3">
                    <img src="{{ asset('booking-images/'. $data->car_images) }}" style="width: 96px; height: 96px; object-fit: cover;" class="img-md img-thumbnail" />
                  </a>
              @endauth
              <div class="info">
                @auth
                <a href="{{ route('car_details',$data->id)}}" class="nav-link mb-1">
                    @else
                    <a href="{{ route('car-details',$data->id)}}" class="nav-link mb-1">
                @endauth
 
                    <!----------  NAME AND DESCRIPTION  ------------>
                    {{ $data->car_name }}
                <br>   
                {!! $data->car_description !!}       
                  </a>
                  <strong class="text-muted">PHP {{ number_format($data->car_price)}} </strong>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
        </div>
    </div>
</section>


