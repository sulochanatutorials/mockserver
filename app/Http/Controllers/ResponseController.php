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
            case 'account/projects':
               $response = [
                    "status" => "Success",
                    "message" => "Projects Data Fetched",
                    "data"=>[
                        'projects'=>[
                            ["id"=>"1",
                            "icon"=>"https://dev01.stackconsole.io/images/clouds/cloud-01.svg",
                            "name"=>"ganesh-kanade-1003",
                            "description"=>"This is a dummy text for cloud compute introduction. This is a dummy text for cloud compute introduction. This is a dummy text."],
                            ["id"=>"2",
                            "icon"=>"https://dev01.stackconsole.io/images/clouds/cloud-02.svg",
                            "name"=>"another-project",
                            "description"=>"This is a dummy text for cloud compute introduction. This is a dummy text for cloud compute introduction. This is a dummy text."],
                        ]
                    ]
                ];

            break;
            case 'providers':
               $response = [
                    "status" => "Success",
                    "message" => "Providers Data Fetched",
                    "data"=>[
                        'providers'=>[
                            ["id"=>"1",
                            "icon"=>"https://dev01.stackconsole.io/images/clouds/cloud-01.svg",
                            "name"=>"Cloud Compute",
                            "description"=>"This is a dummy text for cloud compute introduction. This is a dummy text for cloud compute introduction. This is a dummy text."],
                            ["id"=>"2",
                            "icon"=>"https://dev01.stackconsole.io/images/clouds/cloud-02.svg",
                            "name"=>"Bare Metal",
                            "description"=>"This is a dummy text for cloud compute introduction. This is a dummy text for cloud compute introduction. This is a dummy text."],
                            ["id"=>"3",
                            "icon"=>"https://dev01.stackconsole.io/images/clouds/cloud-03.svg",
                            "name"=>"Dinasor",
                            "description"=>"This is a dummy text for cloud compute introduction. This is a dummy text for cloud compute introduction. This is a dummy text."],
                        ]
                    ]
                ];

            break;

            case 'regions':
               $response = [
                    "status" => "Success",
                    "message" => "Regions Data Fetched",
                    "data"=>[
                        'regions'=>[
                            ["id"=>"1",
                            "icon"=>"https://dev01.stackconsole.io/images/clouds/cloud-01.svg",
                            "name"=>"India",
                            "description"=>"This test description",
                            "continent"=>"Asia"],
                            ["id"=>"2",
                            "icon"=>"https://dev01.stackconsole.io/images/clouds/cloud-02.svg",
                            "name"=>"China",
                            "description"=>"This test description",
                            "continent"=>"Asia"],
                            ["id"=>"3",
                            "icon"=>"https://dev01.stackconsole.io/images/clouds/cloud-03.svg",
                            "name"=>"Japan",
                            "description"=>"This test description",
                            "continent"=>"Asia"],
                            ["id"=>"4",
                            "icon"=>"https://dev01.stackconsole.io/images/clouds/cloud-03.svg",
                            "name"=>"New York",
                            "description"=>"This test description",
                            "continent"=>"USA"],
                            ["id"=>"5",
                            "icon"=>"https://dev01.stackconsole.io/images/clouds/cloud-03.svg",
                            "name"=>"XYZ",
                            "description"=>"This test description",
                            "continent"=>"USA"],
                        ]
                    ]
                ];

            break;
        }
        return response()->json($response);
    }
}
