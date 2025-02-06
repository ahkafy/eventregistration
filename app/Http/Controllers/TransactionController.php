<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PaymentController;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class TransactionController extends Controller
{
    public function success($pid)
    {
        $payment = new PaymentController;

        $res_array = json_decode($payment->queryPayment($pid));

        $trx = Transaction::where('user_id', auth()->user()->id)->first();
        //dd($trx->id);
        DB::table('transactions')->where('id', $trx->id)->update([
            'method' => 'bkash',
        ]);

        DB::commit();
    }
}
