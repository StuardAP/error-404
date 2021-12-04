<?php

namespace App\Http\Controllers\Admin;

use App\Models\DetailSale;
use App\Models\Service;
use App\Http\Requests\StoreDetail_SaleRequest;
use App\Http\Requests\UpdateDetail_SaleRequest;

class DetailSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail_sales = DetailSale::all();
        return view('admin.detail-sale.index', compact('detail_sales'));
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
     * @param  \App\Http\Requests\StoreDetail_SaleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetail_SaleRequest $request)
    {
        $detail_sale=DetailSale::create($request->all());
        return redirect()->route('admin.detail-sale.index')->with('success', 'Thêm chi tiết bán hàng thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detail_Sale  $detail_Sale
     * @return \Illuminate\Http\Response
     */
    public function show(Detail_Sale $detail_Sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detail_Sale  $detail_Sale
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailSale $detail_sale)
    {
        $services = Service::all()->pluck('service_name', 'uuid');
        return view('admin.detail-sale.edit', compact('detail_sale', 'services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetail_SaleRequest  $request
     * @param  \App\Models\Detail_Sale  $detail_Sale
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetail_SaleRequest $request, DetailSale $detail_sale)
    {
        $detail_sale->update($request->all());
        return redirect()->route('detail-sale.edit', $detail_sale)->with('info', 'Se ha actualizado el detalle de venta con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detail_Sale  $detail_Sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailSale $detail_sale)
    {
        $detail_sale->delete();
        return redirect()->route('detail-sale.index')->with('info', 'Se ha eliminado el detalle de venta correctamente');
    }
}
