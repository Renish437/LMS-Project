@extends('backend.admin.master')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        @include('backend.section.breadcumb',['title' => 'Categories','sub_title' => 'Edit Category'])
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Categories</h6>
        <hr>
        <div class="card">
            <div class="card-body p-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h5>Edit Category</h5>
                    <div>
                        <a href="{{ route('admin.category.index') }}" class="btn btn-primary"><i class="bx bx-undo"></i> Back</a>
                    </div>
                </div>
								
								<form class="row g-3" method="post" action="{{ route('admin.category.update', $category->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
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
										<input type="text" class="form-control" name="name" value="{{ old('name', $category->name) }}" id="name" placeholder="Enter Category Name">
									</div>
									<div class="col-md-6">
										<label for="slug" class="form-label">Slug</label>
										<input type="text" class="form-control" name="slug" value="{{ old('slug', $category->slug) }}" id="slug" placeholder="Create Slug">
									</div>
                                    <div class="col-md-6">
										<label for="image" class="form-label">Image</label>
										<input type="file" class="form-control" name="image" id="photo" >
									</div>
                                    <div class="col-md-6 d-flex">
                                      <img src="{{ $category->image ? asset($category->image) : '' }}" id="photoPreview" width="60" height="60" alt="{{ $category->name }}" style="margin-top: 15px;">
                                    </div>
								
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4">Update</button>
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
