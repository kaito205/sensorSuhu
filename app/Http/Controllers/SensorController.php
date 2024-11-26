<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{

    public function index() {
        return view('index');
    }
    public function getdata() {
        $dhtSensor = Sensor::first();
        return response()->json($dhtSensor);
    }

    public function update($temperature, $humidity) {

        $dht = Sensor::first();
        $dht->temperature = $temperature;
        $dht->humidity = $humidity;
        $dht->save();
    }
    // public function temperature(){
    //     $sensor = Sensor::select('*')->get();
    //     return view('bacasuhu', ['nilaisuhu' => $sensor]);
    // }

    // public function humidity(){
    //     $sensor = Sensor::select('*')->get();
    //     return view('humidity', ['nilaisuhu' => $sensor]);
    // }

    // public function simpan() {
    //     Sensor::where('id', '1')->update(['temperature' => request()->temperature, 'humidity' => request()->humidity]);
    // }
}
