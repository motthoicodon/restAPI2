<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Buyer;

class BuyerSellerController extends ApiController
{
    public function index(Buyer $buyer){
        $sellers = $buyer->transactions()
            ->with('product.seller')
            ->get()
            ->pluck('product.seller')
            ->unique('id');

        return $this->showAll($sellers);
    }
}
