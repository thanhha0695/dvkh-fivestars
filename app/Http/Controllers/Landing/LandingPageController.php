<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Throwable;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function contact()
    {
        $key = md5('halt@forseti.vn');
        $input = request()->all();
        if (isset($input['_token'])) unset($input['_token']);
        $input['key'] = $key;

        $apiUri = sprintf('%s/client/contact', env('API_URL'));
        try {
          $response = Http::retry(3, 100)->post($apiUri, $input);
          $status = $response->status();
          logger()->debug('contact-response', $response->json());
          if ($status !== 200) {
            return response()->json([
              'message' => 'Failed',
              'data' => [],
            ], 500);
          }
        } catch (Throwable $e) {
            logger()->error($e);
            return response()->json([
              'message' => 'Failed',
              'data' => [],
            ], 500);
        }

        return response()->json([
          'message' => 'Successfully',
          'data' => [],
        ]);
    }
}
