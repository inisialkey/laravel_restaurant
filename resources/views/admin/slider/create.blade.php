@extends('layouts.app')

@section('title', 'Slider')

@push('css')

@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="Close" onclick="this.parentElement.style.display='none'">
                        <i class="material-icons">close</i>
                    </button>
                    <span>
                        <b>Danger - </b> {{ $error }}
                    </span>
                </div>
                @endforeach
                @endif
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Add New Slider</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Sub Title</label>
                                        <input type="text" name="sub_title" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Image</label><br>
                                    <input type="file" name="image">
                                </div>
                            </div>
                            <a href="{{ route('slider.index') }}" class="btn btn-danger">Back</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')

@endpush
