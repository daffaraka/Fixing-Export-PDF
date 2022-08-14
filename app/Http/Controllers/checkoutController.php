<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\pesanan;
use App\pesanan_detail;
use App\User;
use App\komentar;
use App\best_seller;
use App\produkDipesan;
use Auth;

class checkoutController extends Controller {
    public function get_province() {
        $curl=curl_init();

        curl_setopt_array($curl, array(CURLOPT_URL=> "https://api.rajaongkir.com/starter/province",
                CURLOPT_RETURNTRANSFER=> true,
                CURLOPT_ENCODING=> "",
                CURLOPT_MAXREDIRS=> 10,
                CURLOPT_TIMEOUT=> 30,
                CURLOPT_HTTP_VERSION=> CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST=> "GET",
                CURLOPT_HTTPHEADER=> array("key: a499bb45669e96b267634a55d979b8ba"
                ),
            ));

        $response=curl_exec($curl);
        $err=curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:". $err;
        }

        else {
            //ini kita decode data nya terlebih dahulu
            $response=json_decode($response, true);
            //ini untuk mengambil data provinsi yang ada di dalam rajaongkir resul
            $data_pengirim=$response['rajaongkir']['results'];
            return $data_pengirim;
        }
    }

    public function get_city($id) {
        $curl=curl_init();

        curl_setopt_array($curl, array(CURLOPT_URL=> "https://api.rajaongkir.com/starter/city?&province=$id",
                CURLOPT_RETURNTRANSFER=> true,
                CURLOPT_ENCODING=> "",
                CURLOPT_MAXREDIRS=> 10,
                CURLOPT_TIMEOUT=> 30,
                CURLOPT_HTTP_VERSION=> CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST=> "GET",
                CURLOPT_HTTPHEADER=> array("key: a499bb45669e96b267634a55d979b8ba"
                ),
            ));

        $response=curl_exec($curl);
        $err=curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:". $err;
        }

        else {
            $response=json_decode($response, true);
            $data_kota=$response['rajaongkir']['results'];
            return json_encode($data_kota);
        }
    }

    public function checkout() {
        {
            $data['pesanan'] = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
            if(!empty($data['pesanan']))
            {
                $data['pesanan_details'] = pesanan_detail::where('pesanan_id', $data['pesanan']->id_pesanan)->get();
            }
    
           //dd(pesanandetail::where('pesanan_id', $data['pesanan']->id->get());
           $provinsi = $this->get_province();
    
    
            return view('user.checkout', $data, ['provinsi' => $provinsi]);
        }

    }

    public function get_ongkir($origin, $destination, $weight, $courier) {
        $curl=curl_init();
        curl_setopt_array($curl, array(CURLOPT_URL=> "https://api.rajaongkir.com/starter/cost",
                CURLOPT_RETURNTRANSFER=> true,
                CURLOPT_ENCODING=> "",
                CURLOPT_MAXREDIRS=> 10,
                CURLOPT_TIMEOUT=> 30,
                CURLOPT_HTTP_VERSION=> CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST=> "POST",
                CURLOPT_POSTFIELDS=> "origin=$origin&destination=$destination&weight=$weight&courier=$courier",
                CURLOPT_HTTPHEADER=> array("content-type: application/x-www-form-urlencoded",
                    "key: a499bb45669e96b267634a55d979b8ba"
                ),
            ));
        $response=curl_exec($curl);
        $err=curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:". $err;
        }

        else {
            $response=json_decode($response, true);
            $data_ongkir=$response['rajaongkir']['results'];
            return json_encode($data_ongkir);
        }
    }
}
