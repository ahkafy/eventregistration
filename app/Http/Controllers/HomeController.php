<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;
use DB;

class HomeController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function img()
    {
            $imgs = DB::table('img')->get();
            $count = 0;

            foreach($imgs as $img){

                $manager = new ImageManager(new Driver());
                $image = $manager->read('temp.png');
                $image->text($img->name, 185, 680, function($font){
                    $font->file(public_path('pop.ttf'));
                    $font->size(40);
                    $font->color('fff');
                });

                $image->save(public_path('withName/'. $img->id . '_' . $img->name .'.jpg'));

                $count = $count+1;
                //break;
            }
            return $count;
    }


    function sms_send() {

        $users = User::join('transactions', 'transactions.user_id', '=', 'users.id')->where('transactions.bk_status', 'Completed')->where('users.id', '>', '2024129900437')->select('users.phone', 'users.id')->get();
        //dd($users);
        foreach($users as $user){

        $url = "http://bulksmsbd.net/api/smsapi";
        $api_key = "iaz4tnVQoFwMiiPhYKAw";
        $senderid = "8809617642628";
        $number = $user->phone;
        $message = "Asslamu Alaikum. Alhamdulillah, JU Islamic Conference is opening at 09.00 AM tomorrow. Your Registration Number is $user->id. Please show this at the welcome booth to collect your ID and Gifts. Join our group for future engagement. https://chat.whatsapp.com/EuXqGOdO5Tb3RMkXWeyEKn ";

        $data = [
            "api_key" => $api_key,
            "senderid" => $senderid,
            "number" => $number,
            "message" => $message
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        //break;
         }
        return $response;
    }


    public function index()
    {
        if(auth()->user()->type == 'student'){
            $amount = 300;
        }elseif(auth()->user()->type == 'junior'){
            $amount = 300;
        }else{
            $amount = 300;
        }

        $check = Transaction::where('user_id', auth()->user()->id)->first();
        if(!$check){
            Transaction::create([
                'user_id' => auth()->user()->id,
                'amount' => $amount,
            ]);
        }

        $check = DB::table('cards')->where('user_id', auth()->user()->id)->first();

        if(!$check){
            $manager = new ImageManager(new Driver());
            $image = $manager->read('template.jpg');
            $image->text(auth()->user()->name, 300, 640, function($font){
                $font->file(public_path('kalpurush.ttf'));
                $font->size(40);
                $font->color('fff');
            });

            $image->text(auth()->user()->id, 320, 940, function($font){
                $font->file(public_path('barcode.ttf'));
                $font->size(82);
                $font->color('000');
            });

            $image->save(public_path('cards/'. auth()->user()->id .'.jpg'));

            $path = 'cards/'. auth()->user()->id .'.jpg';

            DB::table('cards')->insert([
                'user_id' => auth()->user()->id,
                'url' => $path,
            ]);
        }

        $card_url = DB::table('cards')->where('user_id', auth()->user()->id)->first();

        $trxInfo = Transaction::where('user_id', auth()->user()->id)->first();

        return view('home', compact('trxInfo', 'card_url'));
    }
}
