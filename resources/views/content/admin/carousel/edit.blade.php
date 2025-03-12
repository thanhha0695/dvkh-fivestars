@extends('layouts/contentNavbarLayout')

@section('title', ' Carousel - Forms')

@section('content')
  <!-- Basic Layout & Basic with Icons -->
  <div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
      <div class="card mb-6">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Carousel</h5> <small class="text-muted float-end">Default</small>
        </div>
        <div class="card-body">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form action="{{ route('carousel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-6">
              <label class="col-sm-2 col-form-label" for="title">Tiêu đề</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="title" id="title" placeholder="" value="{{ $data->title }}" />
              </div>
            </div>
            <div class="row mb-6">
              <label class="col-sm-2 col-form-label" for="status">Trạng thái</label>
              <div class="col-sm-10 form-check form-switch ps-12">
                <input class="form-check-input" type="checkbox" id="status" name="status" value="{{ $data->status }}">
              </div>
            </div>
            <div class="row mb-6">
              <label class="col-sm-2 col-form-label" for="image">Ảnh</label>
              <div class="col-sm-10">
                <input type="file" name="image" id="photo" accept="image/*" class="form-control-file">
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Gửi</button>
                <a href="{{ route('carousel.index') }}" class="btn btn-secondary">Trở về</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
