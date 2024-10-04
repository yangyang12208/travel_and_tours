    <!-------    product details   ------->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-3 pe-3">
                <!-- Sidebar Sections -->
                <section class="panel p-3">
                    <div class="panel-body">
                        <input type="text" placeholder="Keyword Search" class="form-control" />
                    </div>
                </section>
                <section class="panel shadow-sm bg-white mb-3 p-3">
                    <header class="panel-heading d-flex align-items-center">
                        <i class="fas fa-map-marker-alt text-primary me-2"></i>
                        <h4 class="text-primary mb-0">Destination</h4> 
                    </header>
                    
                    <div class="panel-body">
                        <ul class="nav prod-cat flex-column">
                            <li class="nav-item "><a href="#" class="nav-link active"><i class="fa fa-angle-right"></i> Dress</a></li>
                            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-angle-right"></i> Bags & Purses</a></li>
                            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-angle-right"></i> Beauty</a></li>
                            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-angle-right"></i> Coat & Jacket</a></li>
                            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-angle-right"></i> Jeans</a></li>
                            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-angle-right"></i> Jewellery</a></li>
                            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-angle-right"></i> Electronics</a></li>
                            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-angle-right"></i> Sports</a></li>
                            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-angle-right"></i> Technology</a></li>
                            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-angle-right"></i> Watches</a></li>
                            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-angle-right"></i> Accessories</a></li>
                        </ul>
                    </div>
                </section>
    
                <section class="panel shadow-sm bg-white mb-3 p-3">
                    <header class="panel-heading mb-4">
                        <h4 class="text-primary">Other Tour</h4>
                    </header>
                    <div class="panel-body">
                        <form role="form product-form">
                            <div class="mb-3">
                                <label for="brand" class="form-label text-dark fw-bold">Adventure Tours</label>
                                <select id="brand" class="form-select">
                                    <option>Wildlife Tours</option>
                                    <option>Trekking Tours</option>
                                    <option>Scuba Diving</option>
                                    <option>Snorkeling</option>
                                    <option value="">Fishing Packages</option>
                                
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="color" class="form-label text-dark fw-bold"> Leisure and Scenic Tours</label>
                                <select id="color" class="form-select">
                                    <option>Cruise Tours</option>
                                    <option>Day Tours</option>
                                    <option>Scenic Tours</option>
                                    <option>Group Tours</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label text-dark fw-bold">Specialized and Educational Tours
                                </label>
                                <select id="type" class="form-select">
                                    <option>Educational Tours</option>
                                    <option>Corporate Incentive Tours</option>
                                    <option>Special Interest Tours</option>
                                    <option>Factory Tours</option>
                                    <option >Golf Tours</option>
                                </select>
                            </div>
                            <button class="btn btn-primary" type="submit">Filter</button>
                        </form>
                    </div>
                </section>
            </div>
            
            <!-----   PRODUCT DETAILS  ---->
            <div class="col-md-9">
                <div class="row">
                    <!-- Product 1 -->
                    @foreach ($data as $tour_package )
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card bg-white rounded shadow-sm p-3" >
                            <div class="product-image position-relative">
                                <img src="{{ asset('destination-images/'. $tour_package->destination_images) }}" alt="Product Image" class="img-fluid rounded">
                                <span class="badge bg-primary position-absolute" style="top: 10px; left: 10px; font-size: 0.9rem;">HOT</span>
                            </div>
                            <div class="product-detail mt-3">
                                <h5 class="name">
                                    <a href="#" class="text-decoration-none">
                                        <p class="fs-6 fw-bold text-primary">{{ $tour_package->destination_name }}</p>
                                    </a>
                                </h5>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="location d-flex align-items-center">
                                        <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                        <span class="text-muted fw-bold">{{Str::limit($tour_package->destination_location,50)}}</span>
                                    </div>
                                    <div class="duration d-flex align-items-center">
                                        <i class="fas fa-clock me-2 text-primary"></i>
                                        <span class="text-muted fw-bold">{{ $tour_package->destination_days }},Days</span>
                                    </div>
                                </div>
                                <p class="price-container mb-2">
                                    <span class="text-muted small">From:</span>
                                    <span class="fw-bold fs-4 text-muted ms-1">{{ number_format($tour_package->destination_price)}}</span>
                                    <span class="text-secondary ms-1 fs-6">PHP</span>
                                </p>
                                <div class="description mb-3">
                                    <p class="text-muted">
                                        {{ Str::limit($tour_package->destination_description,100) }}
                                    </p>
                                </div>
                            </div>
                            <div class="product-info mt-2">
                                <div class="row">
                                    <div class="col-12">
                                        @auth
                                        <a href="{{route('view_tour_details',$tour_package->id)}}" class="btn btn-primary btn-block shadow-sm">View Details</a>
                                            @else
                                            <a href="{{route('view-tour-details',$tour_package->id)}}" class="btn btn-primary btn-block shadow-sm">View Details</a>
                                        @endauth
                                    
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    @endforeach                   
                </div> <!-- End of Product Row -->
            </div>
        </div>
    </div>   
<!------   product details END ------>
