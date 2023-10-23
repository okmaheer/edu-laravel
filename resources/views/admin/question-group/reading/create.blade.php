@extends('layouts.app')

@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column me-3">
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-600">
                    <a href="javascript:void(0)" class="text-gray-600 text-hover-primary">Home</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-500">Add New Question Group</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
    </div>
    <!--end::Toolbar-->

    <div class="card mb-6 mb-xl-9">
        <div class="card-body pt-9 pb-9">
            <h1 class="text-dark fw-bolder mt-1 mb-10 fs-3">Question Group Details</h1>

            <form action="{{ route('admin.question.group.store') }}" method="post">
                @csrf
                  <input type="hidden" name="testId" value="{{$test->id}}">
                  <input type="hidden" name="type" value="reading">
                <div class="row g-9 mb-8">

                    <div class="col-md-6">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Group Heading</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid required" placeholder="Enter Heading"
                            name="name" />
                    </div>


                    <div class="col-md-6">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Description </span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid required" placeholder="Enter Description"
                            name="description" />
                    </div>
                    <div class="col-md-12">
                        <table id="question_table" class="table table-row-dashed table-row-gray-100 align-middle gs-0 gy-3">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bolder text-muted">

                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                @foreach ($test->questions as $question)
                                    <tr>
                                        <td>{{ $question->name }}</td>

                                        <td>{{ $question->type == 1 ? 'Reading' : 'Listening' }}</td>
                                        <td>{{ $question->category == 1 ? 'MCQS' : 'Filling Blanks' }}</td>


                                        <td>
                                            <input class="form-check-input" type="checkbox" value="{{$question->id}}" name="questionChecked[]" id="kt_permissions_core" />
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>

                </div>







                <!--begin::Actions-->
                <div class="text-start">
                    <button type="reset" class="btn btn-light me-3">Cancel</button>
                    <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                        <span class="indicator-label">Submit</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
                <!--end::Actions-->
            </form>
        </div>
    </div>
@endsection