@extends('backend.admin.master')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        @include('backend.section.breadcumb',['title' => 'Categories','sub_title' => 'All Categories'])
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Categories</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <p>All Categories</p>

                    <div>
                        <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Add Category</a>
                    </div>
                </div>
                <table class="table-responsive">
                    <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="example_length"><label>Show <select name="example_length"
                                            aria-controls="example" class="form-select form-select-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="example_filter" class="dataTables_filter"><label>Search:<input type="search"
                                            class="form-control form-control-sm" placeholder=""
                                            aria-controls="example"></label></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example" class="table table-striped table-bordered dataTable"
                                    style="width: 100%;" role="grid" aria-describedby="example_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" style="width: 149.333px;"
                                                aria-label="Name: activate to sort column descending" aria-sort="ascending">
                                                No</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" style="width: 233.333px;"
                                                aria-label="Position: activate to sort column ascending">Image</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" style="width: 106.333px;"
                                                aria-label="Office: activate to sort column ascending">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" style="width: 48.3333px;"
                                                aria-label="Age: activate to sort column ascending">Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" style="width: 48.3333px;"
                                                aria-label="Age: activate to sort column ascending">Phone</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" style="width: 48.3333px;"
                                                aria-label="Age: activate to sort column ascending">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" style="width: 104.333px;"
                                                aria-label="Start date: activate to sort column ascending">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($instructors as $key => $instructor)
                                            <tr role="row" class="odd">
                                                <td width="10%">{{ $key + 1 }}</td>
                                                <td width="20%">
                                                  @if($instructor->photo)
                                                    <img class="img-fluid" src="{{ asset($instructor->photo) }}" alt="">
                                                    @else
                                                    <span>No Image</span> 
                                                  @endif
                                                </td>
                                                <td>{{ $instructor->name }}</td>
                                                <td>{{ $instructor->email }}</td>
                                                <td>
                                                    {{ $instructor->phone }}
                                                </td>
                                                <td>
                                                    @if ($instructor->status == 1)
                                                        <span class="badge bg-success">Active</span>
                                                    @else
                                                        <span class="badge bg-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" style="cursor: pointer"
                                                            role="switch" id="flexSwitchCheckDefault" data-user-id="{{ $instructor->id }}"
                                                            {{ $instructor->status == 1 ? 'checked' : '' }}>
                                                    </div>
                                                </td>
                                                <td class="gap-3">
                                                    <a class="btn btn-primary"
                                                        href="{{ route('admin.instructor.edit', $instructor->id) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-pencil-square"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                        </svg>
                                                    </a>
                                                    <a  href="javascript:;" data-id="{{ $instructor->id }}"
                                                        class="btn btn-danger delete-instructor">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-trash"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                            <path
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                        </svg>
                                                    </a>
                                                    <form id="delete-form" method="post" class="d-none">
                                                        @csrf
                                                        @method('DELETE')

                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>



                            </div>
                        </div>
                    </div>

                </table>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).on('click', '.delete-instructor', function(e) {
                e.preventDefault();
                let instructorId = $(this).data('id');
                let deleteUrl = "{{ route('admin.instructor.destroy', ':id') }}".replace(':id', instructorId);
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#delete-form').attr('action', deleteUrl).submit();
                    }
                });
            });
        </script>
    @endpush
@endsection
