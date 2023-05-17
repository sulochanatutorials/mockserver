<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function index(Request $request)
    {
        // sleep(3);

        $response = [];
        //dd($request->slug);
        switch ($request->slug) {
            case 'verify/email/otp':
                $response = [
                    "status" => "Success",
                    "message" => "New OTP Successfully sent on your email"
                ];
                break;
            case 'verify/email':

                $response = [
                    "status" => "Success",
                    "message" => "Email Verification Successful"
                ];

                break;

            case 'verify/mobile/otp':
                $response = [
                    "status" => "Success",
                    "message" => "New OTP Successfully sent on your mobile"
                ];
                break;
            case 'verify/mobile':

                $response = [
                    "status" => "Success",
                    "message" => "Mobile Number Verification Successful"
                ];

                break;
            case 'legal/terms':

                $response = [
                    "status" => "Success",
                    "message" => "Terms & Conditions",
                    "data"=>[
                        "terms"=>view('privacy')->render()
                    ]
                ];

                break; 
            case 'profile':
                $response = ['data'=>['user'=>json_decode('{"id":"9927da01-c299-4a51-bd9a-a862a7133c3b","name":"Ganesh Kanade","email":"ganesh.kanade+react@gmail.com","email_verified_at":null,"entity_type":"Personal","created_at":"2023-05-13T07:53:23.000000Z","updated_at":"2023-05-13T08:55:37.000000Z"}',true)]];

            break;
            case 'account/terms/accepted':
               $response = [
                    "status" => "Success",
                    "message" => "Terms Accepted successfully",
                ];

            break;
            case 'account/kyc/documents':
               $response = [
                    "status" => "Success",
                    "message" => "Document uploaded successfully",
                    "data"=>request()->all()
                ];

            break;
            
        }
        return response()->json($response);
    }
}
