<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Http\Requests\StoreBillRequest;
use App\Http\Requests\UpdateBillRequest;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bills = Bill::query()->get();
        return view('admin.bills.index', [
            'bills' => $bills,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBillRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($bill)
    {
        $billInfo = DB::table('bills')
            ->join('bill_details', 'bills.id', '=', 'bill_details.bill_id')
            ->join('products', 'bill_details.product_id', '=', 'products.id')
            ->where('bill_id', $bill)
            ->select('bills.id', 'bills.created_at', 'products.name', 'bill_details.quantity', 'products.price', 'bills.total_amount')
            ->first();
            return view('admin.bills.show', [
                'bill' => $billInfo,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $bill = Bill::query()->findOrFail($id);
        $billInfo = DB::table('bills')
            ->join('bill_details', 'bills.id', '=', 'bill_details.bill_id')
            ->join('products', 'bill_details.product_id', '=', 'products.id')
            ->where('bill_id', $bill)
            ->select('bills.id', 'bills.created_at', 'products.name', 'bill_details.quantity', 'products.price', 'bills.total_amount')
            ->first();
        return view('admin.bills.edit', [
            'bill' => $bill,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBillRequest $request, Bill $bill)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bill $bill)
    {
        //
    }
}
