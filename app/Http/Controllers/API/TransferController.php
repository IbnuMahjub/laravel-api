<?php

namespace App\Http\Controllers\API;

use App\Models\Saldo;
use App\Models\Transfer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransferController extends Controller
{
    public function create(Request $request)
    {
        // dd($request->all());
        $saldo = new Saldo;
        $saldo->user_id = $request->user_id;
        $saldo->balance = $request->balance;
        $saldo->balanceArchive = $request->balanceArchive;
        $saldo->save();

        foreach ($request->list_balance as $key => $value) {
            $transfer = array(
                'saldo_id' => 2,
                'balanceBefore' => $value['balanceBefore'],
                'balanceAfter' => $value['balanceAfter'],
                'location' => $value['location'],
            );
            $transfer = Transfer::create($transfer);
        }
        return response()->json([
            'message' => 'success'
        ], 200);
    }
}