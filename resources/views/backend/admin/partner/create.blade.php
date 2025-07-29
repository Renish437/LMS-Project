@extends('backend.admin.master')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    @include('backend.section.breadcumb',['title' => 'Partner','sub_title' => 'Add Partner'])
    <!--end breadcrumb-->


    <div class="card col-md-8">

        <div class="card-body">

            <div class="card-body p-4">

                <div style="display: flex; align-items:center; justify-content:space-between">
                    <h5 class="mb-4">Add Partner</h5>
                    <a href="{{route('admin.partner.index')}}" class="btn btn-primary">Back</a>

                </div>

                <form class="row g-3" method="post" action="{{route('admin.partner.store')}}"
                    enctype="multipart/form-data">
                    @csrf

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @php $errorList = $errors->all(); @endphp
                            @for ($i = 0; $i < count($errorList); $i++) <li>{{ $errorList[$i] }}</li>
                                @endfor
                        </ul>
                    </div>
                    @endif


                    <div class="col-md-6">
                        <label for="partner_name" class="form-label">Partner Name</label>
                        <input type="text" class="form-control" name="name" id="partner_name"
                            placeholder="Enter the partner name">
                    </div>

                    <div class="col-md-6">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" id="photo">
                    </div>
                    <div class="col-md-12">

                       @if(isset($partner->image))
                        <img src="{{asset($partner->image)}}" id="photoPreview" class="img-fluid" style="margin-top: 15px;" />
                        
                        @endif
                        <img src="" id="photoPreview" class="img-fluid" style="margin-top: 15px; display: none;" /> 
                    </div>
                     <div class="col-md-12">
                        <label for="link" class="form-label">Link</label>
                        <input type="text" class="form-control" name="link" id="link"
                            placeholder="Enter the Link">
                    </div>
                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4 w-100">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>





</div>
@endsection