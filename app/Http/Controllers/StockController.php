<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Requests\StockRequest;
use App\Services\StockService;
use Illuminate\Http\Response;

class StockController extends Controller
{
    private $stockService;

    public function __construct(StockService $stockService)
    {
        $this->stockService = $stockService;
    }

    public function getStockByBook($id){
        $stocks = $this->stockService->getStockByBook($id);
        return ApiResponse::success($stocks, "Stocks found", Response::HTTP_OK);
    }
}
