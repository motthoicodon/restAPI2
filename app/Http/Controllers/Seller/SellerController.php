<?php

namespace App\Http\Controllers\Seller;

use App\Seller;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class SellerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = Seller::get();

        return $this->showAll($sellers);
    }

    public function show(Seller $seller)
    {
        //$seller = Seller::has('products')->findOrFail($id);

        return $this->showOne($seller);
    }

}
