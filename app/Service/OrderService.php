<?php

namespace App\Service;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderService
{
    public function getAllOrders()
    {
        $orders = Order::with(['client', 'product.category'])->get();

        return $orders->map(function ($order) {
            return [
                'order_id' => $order->id,
                'order_date' => $order->order_date, 
                'client' => [
                    'client_id' => $order->client->id,
                    'client_name' => $order->client->name, 
                ],
                'product' => [
                    'product_id' => $order->product->id,
                    'product_name' => $order->product->name, 
                    'product_price' => $order->product->price, 
                    'category' => [
                        'category_id' => $order->product->category->id,
                        'category_name' => $order->product->category->name, 
                    ],
                ],
            ];
        });
    }

    public function getOrderById($id)
    {
        return Order::with(['product', 'client'])->find($id);
    }

    public function createOrder(Request $request)
    {
        return Order::create($request->all());
    }

    public function updateOrder(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update($request->all());
        return $order;
    }

    public function deleteOrder($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return $order;
    }
}