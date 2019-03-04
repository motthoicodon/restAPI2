<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BuyerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */


    public function test_transaction()
    {

        $buyer = \App\Buyer::where('id', 1)->get()->first();
        $transaction =$buyer->transactions;

        $this->assertEquals(3, count($transaction));
    }
}
