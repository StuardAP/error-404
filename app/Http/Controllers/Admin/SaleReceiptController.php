<?php

namespace App\Http\Controllers\Admin;

use App\Models\SaleReceipt;
use App\Http\Requests\StoreSale_ReceiptRequest;
use App\Http\Requests\UpdateSale_ReceiptRequest;
use App\Models\Employee;
use App\Models\Client;
use App\Models\Administrator;
class SaleReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sale_receipts = SaleReceipt::all();
        $administrators=Employee::where('employee_profession', 'administrator')->pluck('employee_name', 'uuid');
        //$administrators=Employee::with('administrators')->get();
        return view('admin.sale-receipts.index ', compact('sale_receipts', 'administrators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSale_ReceiptRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSale_ReceiptRequest $request)
    {
        $sale_receipt = SaleReceipt::create($request->all());
        return redirect()->route('sale-receipts.index')->with('success', 'Sale Receipt created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale_Receipt  $sale_Receipt
     * @return \Illuminate\Http\Response
     */
    public function show(Sale_Receipt $sale_Receipt)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale_Receipt  $sale_Receipt
     * @return \Illuminate\Http\Response
     */
    public function edit(SaleReceipt $sale_receipt)
    {
        $employees = Employee::all();
        $clients = Client::all()->pluck('client_name', 'uuid');
        $administrators=Employee::where('employee_profession', 'administrator')->pluck('employee_name', 'uuid');
        return view('admin.sale-receipts.edit', compact('sale_receipt', 'employees', 'clients', 'administrators'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSale_ReceiptRequest  $request
     * @param  \App\Models\Sale_Receipt  $sale_Receipt
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSale_ReceiptRequest $request, Sale_Receipt $sale_receipt)
    {
        $sale_receipt->update($request->all());
        return redirect()->route('sale-receipts.index')->with('info', 'Sale Receipt updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale_Receipt  $sale_Receipt
     * @return \Illuminate\Http\Response
     */
    public function destroy(SaleReceipt $sale_receipt)
    {
        $sale_receipt->delete();
        return redirect()->route('sale-receipts.index')->with('info', 'Sale Receipt deleted successfully');
    }
}
