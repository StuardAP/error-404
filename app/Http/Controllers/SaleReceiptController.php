<?php

namespace App\Http\Controllers;

use App\Models\Sale_Receipt;
use App\Http\Requests\StoreSale_ReceiptRequest;
use App\Http\Requests\UpdateSale_ReceiptRequest;

class SaleReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale_Receipt  $sale_Receipt
     * @return \Illuminate\Http\Response
     */
    public function show(Sale_Receipt $sale_Receipt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale_Receipt  $sale_Receipt
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale_Receipt $sale_Receipt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSale_ReceiptRequest  $request
     * @param  \App\Models\Sale_Receipt  $sale_Receipt
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSale_ReceiptRequest $request, Sale_Receipt $sale_Receipt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale_Receipt  $sale_Receipt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale_Receipt $sale_Receipt)
    {
        //
    }
}
