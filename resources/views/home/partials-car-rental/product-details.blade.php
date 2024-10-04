
        <!-------    product details   ------->
     
        <div class="container mt-5">
            <div class="row">
                <!-- Car Selection Form (minimized width) -->
                <div class="col-md-3">
                    <div class="form-container">
                        <h5 class="form-title bg-primary py-1 text-light">Car Selection</h5>
        
                        <!-- Car Type -->
                        <div class="form-group mb-4">
                            <label class="form-label">Car type</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="carType1">
                                <label class="form-check-label" for="carType1">Small car</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="carType2">
                                <label class="form-check-label" for="carType2">Minivan</label>
                            </div>
                        </div>
        
                        <hr>
        
                        <!-- Seats -->
                        <div class="form-group mb-4">
                            <label class="form-label">Seats</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="seats1">
                                <label class="form-check-label" for="seats1">Less than 4 seats</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="seats2">
                                <label class="form-check-label" for="seats2">4-5 Seats</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="seats3">
                                <label class="form-check-label" for="seats3">6+ seats</label>
                            </div>
                        </div>
        
                        <hr>
        
                        <!-- Supplier Location -->
                        <div class="form-group mb-4">
                            <label class="form-label">Supplier location</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="location1">
                                <label class="form-check-label" for="location1">Off terminal / shuttle</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="location2">
                                <label class="form-check-label" for="location2">City / downtown</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="location3">
                                <label class="form-check-label" for="location3">Airport</label>
                            </div>
                        </div>
        
                        <hr>
        
                        <!-- Car Features -->
                        <div class="form-group mb-4">
                            <label class="form-label">Car features</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="feature1">
                                <label class="form-check-label" for="feature1">With air-conditioning</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="feature2">
                                <label class="form-check-label" for="feature2">Automatic transmission</label>
                            </div>
                        </div>
        
                        <button type="submit" class="btn btn-primary submit-btn">Search</button>
                    </div>
                </div>     
                        <!-----   BOOKING DETAILS CAR  ------>
                <div class="col-md-9">
                    <div class="row">
                        <div class="container">
                            @foreach ($data as $data )
                            <div class="card mb-3 mx-auto" style="border-radius: 10px; max-width: 700px;"> <!-- Max-width added here -->
                                <div class="row g-0">                    
                                    <div class="col-md-4 position-relative">
                                        <img src="{{asset('booking-images/'. $data->car_images) }}" class="img-fluid rounded-start h-100" alt="Car Image" style="border-radius: 10px 0 0 10px;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <!-- Rating and Reviews -->
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="text-warning me-2">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </span>
                                                <span class="text-muted">1 review</span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h5 class="card-title mb-0 text-primary">{{ $data->car_name }}</h5>
                                                <span class="badge bg-primary p-2 fs-6">{{number_format( $data->car_price) }} / PHP</span>
                                            </div>
                                            <!-- Description -->
                                            <p class="card-text text-muted">{!! $data->car_description !!}</p>
        
                                            <hr>
        
                                            <!-- Features -->
                                            <div class="d-flex mb-3">
                                                <span class="mb-4 ms-auto text-muted ">
                                                    <i class="fas fa-users me-1 text-primary"></i>
                                                    {{ $data->car_seats}}
                                                </span>
                                                <span class="mb-4 ms-auto text-muted">
                                                    <i class="fas fa-cog me-1 text-primary"></i>{{$data->car_features}}
                                                </span>
                                                <span class="mb-4 ms-auto text-muted">
                                                    <i class="fas fa-car me-1 text-primary"></i>{{$data->car_transmission}}
                                                </span>
                                                <span class="mb-4 ms-auto text-muted">
                                                    <i class="fas fa-door-open me-1 text-primary"></i>{{$data->car_doors}}
                                                </span>
                                            </div>    
                                
                                            @auth
                                            <a href="{{ route('car_details',$data->id) }}" class="btn btn-primary">View Details <i class="fas fa-arrow-right ms-2"></i></a>
                                                @else
                                                <a href="{{ route('car-details',$data->id) }}" class="btn btn-primary">View Details <i class="fas fa-arrow-right ms-2"></i></a>
                                            @endauth
                                           
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <!------   product details END ------>
        