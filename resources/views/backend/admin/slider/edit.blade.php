@extends('backend.admin.master')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        @include('backend.section.breadcumb',['title' => 'Slider','sub_title' => 'Edit Slider'])
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Slider</h6>
        <hr>
        <div class="card">
            <div class="card-body p-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h5>Edit Slider</h5>
                    <div>
                        <a href="{{ route('admin.slider.index') }}" class="btn btn-primary"><i class="bx bx-undo"></i> Back</a>
                    </div>
                </div>
								
								<form class="row g-3" method="post" action="{{ route('admin.slider.update', $slider->id) }}" enctype="multipart/form-data">
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
									<div class="col-md-12">
										<label for="name" class="form-label">Slider Title</label>
										<input type="text" class="form-control" name="title" value="{{ old('title', $slider->title) }}" id="name" placeholder="Enter Slider Title">
									</div>
									<div class="col-md-12">
										<label for="short_description" class="form-label">Short Description</label>
										<textarea name="short_description" class="form-control" placeholder="Enter Short Description" id="short_description">{{ old('short_description', $slider->short_description) }}</textarea>
									</div>
									<div class="col-md-12">
										<label for="video_url" class="form-label">Video Url</label>
										<input type="url" class="form-control" name="video_url" value="{{ old('video_url', $slider->video_url) }}" id="video_url" placeholder="Enter Video Url" value="{{ old('video_url') }}">
									</div>
                                    <div class="col-md-12">
                                        <iframe src="{{ old('video_url') }}" id="videoPreview" style="margin-top: 15px;display: none; width: 50%; height: 400px;" frameborder="0" allowfullscreen></iframe>
                                    </div>
									
                                    <div class="col-md-12">
										<label for="image" class="form-label"> Background Image</label>
										<input type="file" class="form-control" name="image" id="photo" >
									</div>
                                    <div class="col-md-12">
                                    <img src="{{ $slider->image ? asset($slider->image) : '' }}" id="photoPreview" width="150" height="150" alt="image" style="margin-top: 15px;">
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
     <script>
        document.addEventListener('DOMContentLoaded', function() {
            const videoUrlField = document.getElementById('video_url');
            const videoPreview = document.getElementById('videoPreview');

            // Initialize iframe with existing video URL from database
            const initialVideoUrl = videoUrlField.value; // Get the initial value from the input
            if (initialVideoUrl) {
                const videoId = extractYouTubeID(initialVideoUrl);
                if (videoId) {
                    videoPreview.src = `https://www.youtube.com/embed/${videoId}`;
                    videoPreview.style.display = 'block';
                }
            }

            // Update iframe on input change
            videoUrlField.addEventListener('input', function() {
                const videoUrl = this.value;
                if (videoUrl) {
                    const videoId = extractYouTubeID(videoUrl);
                    if (videoId) {
                        videoPreview.src = `https://www.youtube.com/embed/${videoId}`;
                        videoPreview.style.display = 'block';
                    } else {
                        alert('Invalid YouTube URL');
                        videoPreview.style.display = 'none';
                        videoPreview.src = '';
                    }
                } else {
                    videoPreview.style.display = 'none';
                    videoPreview.src = '';
                }
            });

            // Function to extract YouTube video ID
            function extractYouTubeID(url) {
                const regex =
                    /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:watch\?v=|embed\/)|youtu\.be\/)([a-zA-Z0-9_-]{11})/;
                const match = url.match(regex);
                return match ? match[1] : null;
            }
        });
    </script>
        
    @endpush
    @endsection
