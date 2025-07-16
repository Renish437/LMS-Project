@extends('backend.admin.master')

@section('content')
    <div class="page-content">

        <!--breadcrumb-->
        @include('backend.section.breadcumb', ['title'=> 'Setting', 'sub_title'=> 'Github-Setting'])
        <!--end breadcrumb-->


        <div class="card col-md-10">

            <div class="card-body">

                <div class="card-body p-4">

                    <div style="display: flex; align-items:center; justify-content:space-between">
                        <h5 class="mb-4">Configure Github</h5>

                    </div>




                    <form class="row g-3" method="post" action="{{ route('admin.github.settings.update') }}">
                        @csrf

                        <!-- Validation Error Message -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops! Something went wrong.</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="col-md-12">
                            <label for="client_id" class="form-label">GITHUB_CLIENT_ID</label>
                            <input type="text" class="form-control" name="client_id" id="client_id"
                                placeholder="Enter github client id"
                                value="{{ old('client_id', $github->client_id ?? '') }}" required>
                        </div>

                        <div class="col-md-12">
                            <label for="secret_key" class="form-label">GITHUB_CLIENT_SECRET</label>
                            <input type="text" class="form-control" name="secret_key" id="secret_key"
                                placeholder="Enter github secret key"
                                value="{{ old('secret_key', $github->secret_key ?? '') }}" required>
                        </div>
                        <div class="col-md-12">
                            <label for="redirect_url" class="form-label">Github_REDIRECT_URL</label>
                            <input type="text" class="form-control" name="redirect_url" id="redirect_url"
                                placeholder="Enter github redirect url"
                                value="{{ old('redirect_url', $github->redirect_url ?? '') }}" required>
                        </div>




                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4 w-100">Update</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>





    </div>
@endsection