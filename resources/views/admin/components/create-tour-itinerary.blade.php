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
        <h1 class="h3 mb-0 text-muted">Create Tour Itenirary</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="shadow-lg p-3 mb-5 bg-body rounded">
        <div class="row justify-content-center">   
            <div class="col-md-5">
                <form action="{{ route('CreateTourItinerary') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <label for="">Destination Name</label>
               <select name="destination_name" id="" class="form-control text-muted @error('destination_name')
                   is-invalid
               @enderror" >
                <option value="" disabled selected> --- Select Category ---</option>   
                @foreach ($data as $destination)
                <option value="{{ $destination->id }}-{{ $destination->destination_name }}">{{ $destination->destination_name }}</option>
            @endforeach    
               </select>
               @error('destination_name')
               <span class="text-danger">{{$message }}</span>
           @enderror
            </div>
            <div class="col-md-5">          
                <div class="mb-3">
                    <label for="">Day:</label>
               <select name="daily_itinerary" id="" class="form-control text-muted @error('daily_itinerary')
                   is-Invalid
               @enderror ">
                <option value="" disabled selected class="text-muted"> --- Select Day Of Itinerary ---</option>
                <option value="day_1">Day 1</option>
                <option value="day_2">Day 2</option>
                <option value="day_3">Day 3</option>
                <option value="day_4">Day 4</option>
                <option value="day_5">Day 5</option>
                <option value="day_6">Day 6</option>
                <option value="day_7">Day 7</option>
                <option value="day_8">Day 8</option>
                <option value="day_9">Day 9</option>
                <option value="day_10">Day 10</option>
                <option value="day_11">Day 11</option>
                <option value="day_12">Day 12</option>
                <option value="day_13">Day 13</option>
                <option value="day_14">Day 14</option>
                <option value="day_15">Day 15</option>
               </select>        
                    @error('daily_itinerary')
                        <span class="text-danger">{{$message }}</span>
                    @enderror
                </div>             
            </div>
        </div>

        <div class="row justify-content-center">
          
            <div class="col-md-5">
          
                <div class="mb-3">
                    <label for="">Destinations Locations:</label>
                    <input type="text" value="{{ old('destination_location')}}"  name="destination_location"  class="@error('destination_price') text-danger is-invalid @enderror form-control" value="" placeholder="enter your destination location">
                    @error('destination_location')
                    <span class="text-danger">{{$message }}</span>
                @enderror
                </div>
         
                
            </div>
            <div class="col-md-5">
                <div class="mb-3">
                    <label for="">Itenirary Images:</label>
                    <input type="file"  class="  @error('image')  is-invalid @enderror form-control" name="image" id="">
                    @error('image')
                    <span class="text-danger">{{ $message }}</span>
                        
                    @enderror
                </div>     
            </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 float-start ">
           <div class="mb-3">
               <label for="">Destination Description:</label>
                <textarea name="destination_description" id="" rows="10"  class="form-control  @error('image')  is-invalid @enderror">
                </textarea>
                @error('destination_description')
                <span class="text-danger">{{$message }}</span>
                 @enderror
           </div>     
              </div>
            <div class="col-md-10 float-start mt-2" >
                <button type="submit" class="btn btn-primary">Save</button>
            </div>  
        </form> 
        </div>                
            </div>
        
    </div>

   
 
    @include('admin/partials.footer')






