<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Carousel\CarouselRequest;
use App\Models\Carousel;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

/**
 * Class CarouselController
 *
 * @package App\Http\Controllers\Admin
 */
class CarouselController extends Controller
{
    public function index()
    {
      $carousels = Carousel::query()->get();
      return view('content.admin.carousel.index', compact('carousels'));
    }

    public function formAdd()
    {
      $data = request()->all();
      return view('content.admin.carousel.add', compact('data'));
    }

    public function formEdit(string $carouselId)
    {
      $data = Carousel::query()->findOrFail($carouselId);
      return view('content.admin.carousel.edit', compact('data'));
    }

    public function store(CarouselRequest $request)
    {
        $title = $request->input('title');
        $status = $request->input('status');
        $image = $request->file('image');
        $filepath = null;
        if ($image instanceof UploadedFile) {
          $filename = $image->getFilename();
          $pathFile = 'products/' . base64_encode($filename);
          $filepath = Storage::disk('public')->put($pathFile, $image);
        }

      try {
          $model = new Carousel();
          $model->fill([
            'title' => $title,
            'status' => (int) $status,
            'filepath' => $filepath,
          ])->saveOrFail();
        return redirect()->route('carousel.index');
      } catch (\Throwable $e) {
          return back()->withErrors([
            'error' => 'Create fail'
          ]);
      }
    }

    public function update(CarouselRequest $request, string $carouselId)
    {
      $title = $request->input('title');
      $status = $request->input('status');
      $image = $request->file('file');
      $filepath = null;
      if ($image instanceof UploadedFile) {
        $filename = $image->getFilename();
        $pathFile = 'products/' . base64_encode($filename);
        $filepath = Storage::disk('public')->put($pathFile, $image);
      }

      try {
        $carousel = Carousel::query()->findOrFail($carouselId);
        $carousel->fill([
          'title' => $title,
          'status' => $status,
          'filepath' => $filepath,
        ])->saveOrFail();
        return redirect()->route('carousel.index');
      } catch (\Throwable $e) {
        return back()->withErrors([
          'error' => 'Update fail'
        ]);
      }
    }

    public function delete(string $carouselId)
    {
      try {
        $carousel = Carousel::query()->findOrFail($carouselId);
        $carousel->delete();
        return redirect()->route('carousel.index');
      } catch (\Throwable $e) {
        return back()->withErrors([
          'error' => 'delete fail'
        ]);
      }
    }
}
