@extends('backend.admin.master')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        @include('backend.section.breadcumb')
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">SubCategories</h6>
        <hr>
        <div class="card">
            <div class="card-body p-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h5>Add SubCategory</h5>
                    <div>
                        <a href="{{ route('admin.subcategory.index') }}" class="btn btn-primary"><i class="bx bx-undo"></i> Back</a>
                    </div>
                </div>
								
								<form class="row g-3" method="post" action="{{ route('admin.subcategory.store') }}" enctype="multipart/form-data">
                                    @csrf
                                     @if ($errors->any())
                                    <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                    </ul>
                                </div>
                                @endif
									<div class="col-md-6">
										<label for="name" class="form-label">Name</label>
										<input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name" placeholder="Enter SubCategory Name">
									</div>
									<div class="col-md-6">
										<label for="slug" class="form-label">Slug</label>
										<input type="text" class="form-control" name="slug" value="{{ old('slug') }}" id="slug" placeholder="Create Slug">
									</div>
                                    <div class="col-md-6">
										<label for="category" class="form-label">Select Category </label>
										<select name="category_id" class="form-select" id="category">
                                            <option selected disabled value="">Select Category</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
									</div>
                                   
								
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4">Submit</button>
											<button type="button" class="btn btn-light px-4">Reset</button>
										</div>
									</div>
								</form>
							</div>
        </div>
    </div>
    @push('scripts')
    <script src="{{ asset('customjs/admin/category.js') }}"></script>
        
    @endpush
    @endsection
