   <!-- content -->
   <section class="py-5">
    <div class="container">
        <div class="row gx-5">
            <aside class="col-lg-6">
                <div class="border rounded-4 mb-3">
                    <img src="{{ asset('destination-images/'. $data->destination_images) }}" 
                         style="width: 100%; height: auto; margin: auto;" 
                         class="rounded-4 fit" />
          </div>

          <!-- thumbs-wrap.// -->
          <!-- gallery-wrap .end// -->
        </aside>
        <main class="col-lg-6">
          <div class="ps-lg-3">
            <h4 class="title text-primary">
              {{$data->destination_name}}
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
              <span class="h5 text-muted">PHP {{ number_format($data->destination_price) }} </span>
              <span class="text-muted">/Tour Package</span>
            </div>
  
            <p class="text-muted">
              <span class="text-primary fw-bold">Description</span><br>
              <span>{!! $data->destination_description !!}</span>
           
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
                               Hotel Policies:
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
             
                        {{ $data->destination_included }}
                        </div>


                                      <!-- Rental Policy -->
                        <div class="tab-pane fade mb-2" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                            <span class="text-muted">
                                1. Check-In and Check-Out <br>
                                    Check-In Time: Guests may check in starting at 3:00 PM. <br>
                                    Check-Out Time: Guests are required to check out by 11:00 AM. <br>
                                    2. Cancellation Policy <br>
                                    Standard Cancellation: Reservations can be canceled up to 48 hours before the check-in date without penalty.  <br>
                                    Cancellations made within 48 hours will incur a one-night charge. <br>
                                    Non-Refundable Reservations: Certain rates may be non-refundable. <br>
                                    Please check the rate details when booking. <br>
                                    3. Payment Policy <br>
                                    Deposit: A valid credit card is required to secure your reservation. <br>
                                     A deposit may be taken at the time of booking. <br>
                                    Payment Methods: We accept cash, credit cards, and debit cards at check-in. <br>
                                    4. Guest Policy <br>
                                    Occupancy Limits: Maximum occupancy is limited to the number of guests specified at the time of booking. <br>
                                    Visitors: Only registered guests are permitted in the hotel room after 10:00 PM. <br>
                                    5. Pet Policy <br>
                                    Pets: Pets are not allowed in the hotel, except for service animals. Please notify the hotel in advance if you are traveling with a service animal. <br>
                                    6. Smoking Policy <br>
                                    Non-Smoking: Our hotel is a non-smoking property. A cleaning fee will be charged for any violation of this policy. <br>
                                    7. Damages and Liability <br>
                                    Damage to Property: Guests are responsible for any damages to hotel property during their stay. Charges for damages will be applied to the credit card on file.
                                    Liability: The hotel is not responsible for any lost, stolen, or damaged personal items during your stay.
                                    8. Privacy Policy <br>
                                    Personal Information: Guest information is collected for booking purposes and will not be shared with third parties without consent. <br>
                                    9. Noise Policy
                                    Quiet Hours: To ensure the comfort of all guests, quiet hours are observed from 10:00 PM to 7:00 AM. Loud noises and disturbances will not be tolerated. <br>
                                    10. Special Requests <br>
                                    Accommodations: Special requests (such as room preferences or additional amenities) will be accommodated based on availability. Please inform the hotel at the time of booking. <br>
                                                                    </span>
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
            <h5 class="card-title">Other Tours</h5>
            @foreach ($otherTours as $data)
            <div class="d-flex mb-3">
              @auth
              <a href="{{ route('view_tour_details',$data->id)}}" class="me-3">
                <img src="{{ asset('destination-images/'. $data->destination_images) }}" style="width: 96px; height: 96px; object-fit: cover;" class="img-md img-thumbnail" />
              </a>
                @else
                <a href="{{ route('view-tour-details',$data->id)}}" class="me-3">
                  <img src="{{ asset('destination-images/'. $data->destination_images) }}" style="width: 96px; height: 96px; object-fit: cover;" class="img-md img-thumbnail" />
                </a>
              @endauth       
              <div class="info">
                @auth
                <a href="{{ route('view_tour_details',$data->id)}}" class="nav-link mb-1">
                  {{ $data->destination_name }} <br>
                  {{ $data->destination_description }}
                </a>
                <strong class="text-muted">PHP {{ $data->destination_price}}</strong>
                  @else
                  <a href="{{ route('view-tour-details',$data->id)}}" class="nav-link mb-1">
                    {{ $data->destination_name }} <br>
                    {{ $data->destination_description }}
                  </a>
                  <strong class="text-muted">PHP {{ $data->destination_price}}</strong>
                @endauth 
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

<!---------------------------    DAILY ITENIRARY TOUR    --------------------------------->

<section>
    <div class="container">
        <div class="section-heading wow fadeIn">
            <h2 class="text-primary">Daily itinerary</h2>
            <div class="heading-separator"></div>
        </div>
        <div class="row" >
        
          <div class="history-wrapper">
            <div class="title-wrap text-center one-of-two ">
              
                <h2 class="text-dark mb-0 text-uppercase">{{ $data->destination_name }}</h2>
                
            </div>
            @foreach ($tour->dailyItineraries as $itinerary )
            <div class="timeline-box one-of-two ">
              <img class="mb-1-6 rounded"  style="height: 280px; width:280px;" src="{{ asset('daily-itenirary-images/'. $itinerary->itenirary_images)}}" alt="...">
                <div class="content">
                    <h3 class="h4 mb-2 mb-md-3"></h3>
                    <p class="mb-0">{{ $itinerary->destination_name}}</p>
                </div>
                <div class="year text-primary" > {{ $itinerary->day_number}} </div>
                <p class="mb-0">{!! $itinerary->description !!}</p>
            </div>
            @endforeach                   
        </div>   

    
        </div>
    </div>
</section>
