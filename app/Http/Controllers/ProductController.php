<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function saveDataApi() {
        $client = new Client();
        // $credentials = base64_encode('ck_2682b35c4d9a8b6b6effac126ac552e0bfb315a0:cs_cab8c9a729dfb49c50ce801a9ea41b577c00ad71');

        $res = $client->request('GET', 'https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products', [
                            'auth' => ['ck_2682b35c4d9a8b6b6effac126ac552e0bfb315a0', 'cs_cab8c9a729dfb49c50ce801a9ea41b577c00ad71']
                        ]);

        $result= $res->getBody()->getContents();
        $data = json_decode($result);
        // $images = json_decode($data->images);

        // @foreach($data as $d)
        //     dd($d);
        // @endforeach

        // $img = $data[0]->images[0]->src_small;
        // dd($images);

        return view('frontend.index', ['data' => $data]);
    }
}
