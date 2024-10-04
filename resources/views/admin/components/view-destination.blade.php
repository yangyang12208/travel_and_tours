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
        <h1 class="h3 mb-0 text-muted">Edit Tours</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="shadow-lg p-3 mb-5 bg-body rounded">

     <div class="row justify-content-center mb-3">
        <div class="col-md-5">
            <form action="{{route('update-destination',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
            <label for="">Destination Category</label>
           <select name="destination_category" id="" class="form-control" >
            <option value="" disabled selected> --- Select Category ---</option>
            @foreach ($category as $category)
            <option value="{{$category->destinations}}">{{$category->destinations}}</option>
            @endforeach
           </select>
           @error('destination_category')
           <span class="text-danger">{{$message }}</span>
       @enderror
        </div>
     </div>
        <div class="row justify-content-center">
          
            <div class="col-md-5">
             
     
                <div class="mb-3">
                    <label for="">Destination Name:</label>
                    <input type="text" value=" {{$data->destination_name}} "   name="destination_name"   class="form-control @error('destination_name') text-danger is-invalid @enderror"  placeholder="enter your destination name">
                    @error('destination_name')
                        <span class="text-danger">{{$message }}</span>
                    @enderror
                </div>
         
              
            </div>
            <div class="col-md-5">
                <div class="mb-3">
                    <label for="">Destination Price:</label>
                    <input type="text" value="{{$data->destination_price}} "  name="destination_price"  class="form-control @error('destination_price') text-danger is-invalid @enderror"   placeholder="enter your desination price">
                    @error('destination_price')
                    <span class="text-danger">{{$message }}</span>
                    @enderror
                </div>     
            </div>
        </div>
        
        <div class="row justify-content-center">
          
            <div class="col-md-5">
          
                <div class="mb-3">
                    <label for="">Destinations Locations:</label>
                    <input type="text" value="{{$data->destination_location}}"  name="destination_location"  class="@error('destination_location') text-danger is-invalid @enderror form-control" value="" placeholder="enter your destination location">
                    @error('destination_location')
                    <span class="text-danger">{{$message }}</span>
                    @enderror
                </div>
         
              
            </div>
            <div class="col-md-5">
                <div class="mb-3">
                    <label for="">Duration Days:</label>
                    <input type="text" value="{{$data->destination_days}} "  name="destination_day"  class="@error('destination_day') text-danger is-invalid @enderror form-control" value=""  placeholder="number of days">
                    @error('destination_day')
                    <span class="text-danger">{{$message }}</span>
                    @enderror
                </div>     
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-5">
                <label for="">Destination Description</label>
                <textarea name="destination_description" value="{{$data->destination_description}}"  id=""  cols="20" rows="10"  class="@error('destination_description') text-danger is-invalid @enderror form-control">
                    {{$data->destination_description}}
          </textarea>   
          @error('destination_description')
          <span class="text-danger">{{$message }}</span>
          @enderror
        </div>
        <div class="col-md-5 mb-1">
            <label for="">Destination Included</label>
            <textarea name="destination_included" value="{{$data->destination_included}}"   cols="20" rows="10"  class="@error('destination_included') text-danger is-invalid @enderror form-control">
                {{$data->destination_description}}
            </textarea>   
            @error('destination_included')
            <span class="text-danger">{{$message }}</span>
            @enderror
    </div>
            <div class="row  justify-content-center">
                <div class="col-md-10">
                <label for="">Rental Policy</label>
                <textarea name="destination_policy" value="{{$data->destination_policy}}"      cols="200"  class="@error('destination_policy') text-danger is-invalid @enderror form-control">         
                    {{$data->destination_policy}}
                </textarea>   
                @error('destination_policy')
                <span class="text-danger">{{$message }}</span>
                @enderror

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






