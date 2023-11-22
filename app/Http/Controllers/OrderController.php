<?php

namespace App\Http\Controllers;

use App\Service\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index()
    {
        $orders = $this->orderService->getAllOrders();
        return response()->json($orders);
    }

    public function show($id)
    {
        $order = $this->orderService->getOrderById($id);
        return response()->json($order);
    }

    public function store(Request $request)
    {
        $order = $this->orderService->createOrder($request);
        return response()->json($order, 201);
    }

    public function update(Request $request, $id)
    {
        $order = $this->orderService->updateOrder($request, $id);
        return response()->json($order, 200);
    }

    public function delete($id)
    {
        $this->orderService->deleteOrder($id);
        return response()->json(null, 204);
    }
}
