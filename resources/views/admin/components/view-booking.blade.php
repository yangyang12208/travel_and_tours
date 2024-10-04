@include('admin/partials.header-css')
@include('admin/partials.sidebar')
@include('admin/partials.top-content')


<style>
    /* Hide the default file input appearance */
input[type="file"] {
    display: block; /* Ensures it is visible */
    padding: 10px; /* Add padding for better appearance */
    border: 1px solid #ced4da; /* Add border */
    border-radius: 0.25rem; /* Match Bootstrap input styling */
    background-color: #f8f9fa; /* Optional: background color */
}

/* Customize the file input */
input[type="file"]::-webkit-file-upload-button {
    display: none; /* Hide the default button */
}

</style>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-muted">Create Booking</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="shadow-lg p-3 mb-5 bg-body rounded">
     <div class="row justify-content-center">         
            <div class="col-md-5">  
                <div class="mb-3">                  
            <form action="{{ route('update-booking',$data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <label for="">Car Name:</label>
                    <input type="text" value=" {{ $data->car_name  }} "  name="car_name"   class="form-control @error('destination_name') text-danger is-invalid @enderror"  placeholder="enter your destination name">
                    @error('destination_name')
                        <span class="text-danger">{{$message }}</span>
                    @enderror
                </div>
         
              
            </div>
            <div class="col-md-5">
                <div class="mb-3">
                    <label for="">Car Price:</label>
                    <input type="number" value="{{ $data->car_price }}"  name="car_price"  class="form-control @error('destination_price') text-danger is-invalid @enderror"   placeholder="enter your desination price">
                </div>     
            </div>
        </div>
        
        <div class="row justify-content-center"> 
            <div class="col-md-5">      
                <div class="mb-3">
                    <label for="">Car seats</label>
                    <select name="car_seats" id="" class="form-control" >
                        <option value="" disabled selected> --- Select Options ---</option>
                        <option value="{{$data->car_seats }}" selected>{{$data->car_seats }} </option>
                        <option value="1-seats">1 seats</option>
                        <option value="2-seats">2 seats</option>
                        <option value="3-seats">3 seats</option>
                        <option value="4-seats">4 seats</option>
                        <option value="5-seats">5 seats</option>
                        <option value="6-seats">6 seats</option>
                        <option value="7-seats">7 seats</option>
                       </select>
                </div>            
            </div>
            <div class="col-md-5">
                <div class="mb-3">
                    <label for="">Car features</label>
                    <select name="car_features" id="" class="form-control" >
                        <option value="" disabled selected> --- Select Options ---</option>
                        <option value="{{$data->car_features }}" selected>{{$data->car_features }} </option>
                        <option value="air-conditioning">With Air-conditioning</option>
                        <option value="no air-conditioning">With No Air-conditioning</option>
                       </select>
               </div>     
            </div>
        </div>
        <div class="row justify-content-center"> 
            <div class="col-md-5">      
                <div class="mb-3">
                    <label for="">Car Transmision</label>
                    <select name="car_transmission" id="" class="form-control" >
                        <option value="" disabled selected> --- Select Options ---</option>
                        <option value="{{$data->car_transmission }}" selected>{{$data->car_transmission }} </option>
                        <option value="Automatic Transmission">Automatic Transmission</option>
                        <option value="Manual Transmission">Manual Transmission</option>
                       </select>
                </div>            
            </div>
            <div class="col-md-5">
                <div class="mb-3">
                    <label for="">Car Doors</label>
                    <select name="car_doors" id="" class="form-control" >
                        <option value="" disabled selected> --- Select Options ---</option>
                        <option value="{{$data->car_doors }}" selected>{{$data->car_doors }} </option>
                        <option value="1-doors">1 doors</option>
                        <option value="2-doors">2 doors</option>
                        <option value="3-doors">3 doors</option>
                        <option value="4-doors">4 doors</option>
                        <option value="5-doors">5 doors</option>
                        <option value="6-doors">6 doors</option>
                        <option value="7-doors">7 doors</option>
                       </select>
               </div>     
            </div>
        </div>
        <div class="row justify-content-center"> 
            <div class="col-md-5">      
                <div class="mb-3">
                    <label for="">Driver Age:</label>
                    <input type="number" value="{{ $data->driver_age }}"   name="driver_age"  class="form-control @error('destination_price') text-danger is-invalid @enderror"   placeholder="enter your Driver Age">
                </div>            
            </div>
            <div class="col-md-5">
                <div class="mb-3">
                    <label for="">Driver Name:</label>
                    <input type="text" value="{{ $data->driver_name }}"  name="driver_name"  class="form-control @error('destination_price') text-danger is-invalid @enderror"   placeholder="enter your driver name">
               </div>     
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <label for="">Description</label>
                <textarea name="car_description" value="{{ $data->car_description }} "  id=""  cols="20" rows="10"  class="@error('destination_description') text-danger is-invalid @enderror form-control">
                    {{ $data->car_description }}
          </textarea>   
        </div>
        <div class="col-md-5 mb-1">
            <label for="">Destination Included</label>
            <textarea name="car_included" value="{{ $data->car_included }}"   cols="20" rows="10"  class="@error('destination_included') text-danger is-invalid @enderror form-control">
                {{ $data->car_included }}
            </textarea>   
    </div>
            <div class="row  justify-content-center">
                <div class="col-md-10">
                <label for="">Rental Policy</label>
                <textarea name="car_policy" value="{{ $data->car_policy }}"      cols="200"  class="@error('destination_policy') text-danger is-invalid @enderror form-control">         
                    {{ $data->car_policy }}
                </textarea> 

                <div class="mb-3 col-md-12">
                    <label for="">Cover Photo</label>
                    <input type="file"  class="@error('image')  text-danger is-invalid @enderror form-control" name="image" id="">
                    @error('image')
                    <span class="text-danger">{{ $message }}</span>
                        
                    @enderror
                </div>     
            </div>
                 
            </div>
         
            <div class="col-md-10 float-start mt-2" >
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        
     
        
        </form> 
    </div>

   
 
    @include('admin/partials.footer')






