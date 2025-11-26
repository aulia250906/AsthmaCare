<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PertanyaanController extends Controller
{
    public function index()
    {
        return view('pertanyaan');
    }

    public function kirimFastAPI(Request $request)
    {
        // Validasi basic
        $request->validate([
            'Age'                     => 'required|numeric|min:1|max:120',
            'Gender'                  => 'required|string',
            'BMI'                     => 'required|numeric|min:10|max:60',
            'Smoking_Status'          => 'required|string',
            'Family_History'          => 'required|string', // "0" atau "1"
            'Allergies'               => 'required|string',
            'Air_Pollution_Level'     => 'required|string',
            'Physical_Activity_Level' => 'required|string',
            'Occupation_Type'         => 'required|string',
            'Comorbidities'           => 'required|string',
        ]);

        $data = [
            'Age'                      => (float) $request->Age,
            'Gender'                   => $request->Gender,
            'BMI'                      => (float) $request->BMI,
            'Smoking_Status'           => $request->Smoking_Status,
            'Family_History'           => $request->Family_History, // "0"/"1"
            'Allergies'                => $request->Allergies,
            'Air_Pollution_Level'      => $request->Air_Pollution_Level,
            'Physical_Activity_Level'  => $request->Physical_Activity_Level,
            'Occupation_Type'          => $request->Occupation_Type,
            'Comorbidities'            => $request->Comorbidities,
        ];

        try {
            $response = Http::timeout(5)->post('http://127.0.0.1:8080/predict', $data);

            if ($response->failed()) {
                return back()->with('error', 'FastAPI error (status ' . $response->status() . '): ' . $response->body());
            }

            $hasil = $response->json();

            return view('hasil_deteksi', compact('hasil'));

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal terhubung ke FastAPI: ' . $e->getMessage());
        }
    }
}