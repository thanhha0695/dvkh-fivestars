@extends('layouts/contentNavbarLayout')

@section('title', 'Carousel - Basic Tables')

@section('content')
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <div class="d-flex">
      <h5 class="card-header">Danh sách Slider</h5>
      <div class="d-flex float-end justify-content-end">
        <a class="btn btn-pinned btn-info" type="button" href="{{ route('carousel.add') }}">
          Add
          <i class='bx bx-plus'></i>
        </a>
      </div>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
        <tr>
          <th>Tiêu đề</th>
          <th>Ảnh</th>
          <th>Trạng thái</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @foreach($carousels as $carousel)
          <tr>
            <td>{{ $carousel->title }}</td>
            <td>
              <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($carousel->filepath) }}" width="80" height="80" />
            </td>
            <td>
              {{ $carousel->status === 0 ? 'Ẩn' : 'Hiện' }}
            </td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('carousel.edit', ['carousel_id' => $carousel->id]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                </div>
              </div>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->
@endsection
