@extends('backend.admin.master')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        @include('backend.section.breadcumb',['title' => 'InfoBox','sub_title' => 'All InfoBox'])
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Categories</h6>
        <hr>
        <div class="row ">
            
               



                <div class="col-md-4">
                    <div class="card">
                        <div class="card-title  mt-3 px-3">
                            <h5>InfoBox 1</h5>
                        </div>
                        <div class="card-body">
                            <form class="row gap-3" action="{{ route('admin.infobox.update', $first_info->id ?? '1') }}" method="post">
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
                                <div class="col-md-12 mb-3">
                                    <label for="icon" class="form-label">Icon</label>
                                    <textarea name="icon" class="form-control"  placeholder="Enter svg Icon" id="icon">{{ $first_info->icon ?? '' }}</textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input name="title" class="form-control" value="{{ $first_info->title ?? '' }}" placeholder="Enter the title" id="title">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" class="form-control"  placeholder="Enter the description" id="description">{{ $first_info->description ?? '' }}</textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-title  mt-3 px-3">
                            <h5>InfoBox 2</h5>
                        </div>
                        <div class="card-body">
                            <form class="row gap-3" action="{{ route('admin.infobox.update', $second_info->id ?? '2') }}" method="post">
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
                                <div class="col-md-12 mb-3">
                                    <label for="icon" class="form-label">Icon</label>
                                    <textarea name="icon" class="form-control" placeholder="Enter svg Icon" id="icon">{{ $second_info->icon ?? '' }}</textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input name="title" value="{{ $second_info->title ?? '' }}" class="form-control" placeholder="Enter the title" id="title">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" class="form-control" placeholder="Enter the description" id="description">{{ $second_info->description ?? '' }}</textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-title  mt-3 px-3">
                            <h5>InfoBox 3</h5>
                        </div>
                        <div class="card-body">
                            <form class="row gap-3" action="{{ route('admin.infobox.update', $third_info->id ?? '3') }}" method="post">
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
                                <div class="col-md-12 mb-3">
                                    <label for="icon" class="form-label">Icon</label>
                                    <textarea name="icon" class="form-control" placeholder="Enter svg Icon" id="icon">{{ $third_info->icon ?? '' }}</textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input name="title" class="form-control" value="{{ $third_info->title ?? '' }}" placeholder="Enter the title" id="title">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" class="form-control" placeholder="Enter the description" id="description">{{ $third_info->description ?? '' }}</textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

           
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('customjs/admin/category.js') }}"></script>
    @endpush
@endsection
