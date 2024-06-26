@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!--begin::Content-->


    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Home</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Total Home<span class="ms-2 badge bg-danger"></span></li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            {{-- <div class="d-flex align-items-center gap-2 gap-lg-3">

                <a href="" class="btn btn-light-primary btn-sm">Add
                    Contact</a>

            </div> --}}
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Post-->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!--begin::Table-->

                    <table class="table table-striped">

                        <thead>
                            <tr class="bg-info text-white">
                                <th style="width: 10%" class="text-center">#</th>
                                <th style="width: 80%">Name</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>

                        {{-- @php
                            $words = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
                        @endphp --}}

                        @php
                            $words = ['', '', '', '', '', '', '', '', ''];
                        @endphp

                        <tbody>

                            @if (count($homes) > 0)
                                @foreach ($homes as $key => $home)
                                    <tr>
                                        <td class="text-center">{{ $key + 1 }}</td>

                                        <td>{{ isset($words[$key]) ? 'Tamplate' . ' ' . Str::ucfirst($words[$key]) : 'Number out of range' }}
                                        </td>

                                        <td>

                                            @if (Auth::guard('admin')->user()->can('edit.home'))
                                                <a href="{{ route('edit.home', $home->id) }}" class="ms-1"
                                                    title="Edit"><i class="bi bi-pencil-square fs-3 text-primary"></i></a>
                                            @endif

                                            @if (Auth::guard('admin')->user()->can('delete.home'))
                                                <a href="{{ route('delete.home', $home->id) }}" class="ms-1"
                                                    id="delete" title="Delete"><i
                                                        class="bi bi-trash3-fill fs-3 text-danger"></i></a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td></td>
                                    <td class="text-danger text-center">No Record Found</td>
                                    <td></td>
                                </tr>
                            @endif


                        </tbody>

                    </table>

                    <!--end::Table-->
                </div>
            </div>
        </div>
    </div>
    <!--end::Post-->
@endsection
