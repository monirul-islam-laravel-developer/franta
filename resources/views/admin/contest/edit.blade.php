@extends('admin.master')
@section('title')
    Contest Edit
@endsection

@section('body')
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <form class="d-flex">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-light" id="dash-daterange">
                        <span class="input-group-text bg-primary border-primary text-white">
                                                    <i class="mdi mdi-calendar-range font-13"></i>
                                                </span>
                    </div>
                    <a href="javascript: void(0);" class="btn btn-primary ms-2">
                        <i class="mdi mdi-autorenew"></i>
                    </a>
                    <a href="javascript: void(0);" class="btn btn-primary ms-1">
                        <i class="mdi mdi-filter-variant"></i>
                    </a>
                </form>
            </div>
            <h4 class="page-title">Contest Edit</h4>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane show active" id="basic-form-preview">
                            <form action="{{route('contest.update',['id'=>$contest->id,'slug'=>$contest->slug])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-md-2 col-form-label"  >Select Category</label>
                                    <div class="col-md-10">
                                        <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" >
                                            <option selected disabled >--Select Category--</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{$category->id==$contest->category_id ? 'selected' : ''}}>{{$category->category_name}}</option>
                                            @endforeach

                                        </select>
                                        @error('category_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-md-2 col-form-label">Title</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$contest->title}}"  id="inputEmail3" placeholder="Cantest Name"/>
                                        @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="size" class="col-md-2 col-form-label">Contest Code</label>
                                    <div class="col-md-10">
                                        <input type="text" name="code" class="form-control" value="{{$contest->code}}" placeholder="Enter Your Contest Code">
                                        @error('code')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-md-2 col-form-label">Draw Date</label>
                                    <div class="col-md-10">
                                        <input type="date" class="form-control @error('draw_date') is-invalid @enderror" name="draw_date" value="{{$contest->draw_date}}"   placeholder="Draw Date">
                                        @error('draw_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-md-2 col-form-label">Price</label>
                                    <div class="col-md-10">
                                        <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"  value="{{$contest->price}}"  placeholder="price">
                                        @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-md-2 col-form-label">Quantity</label>
                                    <div class="col-md-10">
                                        <input type="number" class="form-control @error('qty') is-invalid @enderror" name="qty" value="{{$contest->qty}}"   placeholder="Quantity">
                                        @error('stock_amount')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-md-2 col-form-label">Start Date</label>
                                    <div class="col-md-10">
                                        <input type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date"  value="{{$contest->start_date}}"  placeholder="Start Date">
                                        @error('start_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-md-2 col-form-label">End Date</label>
                                    <div class="col-md-10">
                                        <input type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date"  value="{{$contest->end_date}}"  placeholder="End Date">
                                        @error('end_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-md-2 col-form-label">Detail</label>
                                    <div class="col-md-10">
                                        <textarea  class="form-control @error('detail') is-invalid @enderror" name="detail"  id="summernote3" placeholder=" Sort Description">{!! $contest->detail !!}</textarea>
                                        @error('detail')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-md-2 col-form-label">More Details</label>
                                    <div class="col-md-10">
                                        <textarea  class="form-control @error('more_detail') is-invalid @enderror" name="more_detail"  id="summernote2" placeholder="More Detail">{!! $contest->more_detail !!}</textarea>
                                        @error('more_detail')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-2 col-form-label">Image</label>
                                    <div class="col-md-10">
                                        <input type="file" name="image" id="imageInput" class="form-control @error('image') is-invalid @enderror">
                                        <img src="{{asset($contest->image)}}" alt="" width="120" height="80"/>
                                        @error('image')

                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-md-2 col-form-label">Status</label>
                                    <div class="col-md-10">
                                        {{--                                        <input type="checkbox" id="switch1" name="status" @if($notice->status == 1) checked @endif data-switch="bool"/>--}}
                                        <input type="checkbox" id="switch1" value="1" name="status"  class="form-control" @if($contest->status==1) checked @endif data-switch="bool"/>
                                        <label for="switch1" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-md-2 col-form-label"></label>
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div> <!-- end preview-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
        <!-- end col -->
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

    <!-- end row -->
    <script>
        function previewImage(event) {
            var input = event.target;
            var reader = new FileReader();

            reader.onload = function(){
                var imagePreview = document.getElementById('imagePreview');
                imagePreview.src = reader.result;
                imagePreview.style.display = 'block';
            };

            reader.readAsDataURL(input.files[0]);
        }

        var imageInput = document.getElementById('imageInput');
        imageInput.addEventListener('change', previewImage);
    </script>
    <script>
        $(document).ready(function(){

            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                removeItemButton: true,

            });


        });
    </script>
    <script>
        $('#summernote').summernote({
            tabsize: 2,
            height: 300
        });
        $('#summernote2').summernote({
            tabsize: 2,
            height: 300
        });
        $('#summernote3').summernote({
            tabsize: 2,
            height: 150
        });
    </script>
@endsection

