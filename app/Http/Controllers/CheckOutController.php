<?php

namespace App\Http\Controllers;

use App\Models\Cart_Items;
use App\Models\OrderDetails;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckOutController extends Controller
{
    //
    public function index(){

    }

    // Function Check Out Customer
    public function AddOrder(Request $request){
        // Thêm đơn hàng
        $orders = Orders::create([
            'first_name' =>  $request->first_name,
            'last_name' =>  $request->last_name,
            'address' => $request->address,
            'date' => now(),
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => 'Ordered',
            'message' => $request->message,
            'payment_type' => $request->payment_type,
        ]);
        $orders->save();
        // Thêm chi tiết đơn hàng
        $cartItems = Cart_Items::where('customer_id', auth()->id())->get();
        foreach ($cartItems as $cart){
            $data = [
                'order_id' => $orders->id,
                'product_id' => $cart->product_id,
                'amount' => $cart->product_amount,
                'price' => $cart->product_price,
                'total' => $cart->product_amount * $cart->product_price,
            ];
            OrderDetails::create($data);
        }
        // Gửi Email
        $total = $cartItems->sum('total');
        $cartCount = count($cartItems); 
        $percent = 15 / 100;
        $percent1 = $percent * $total;
        $percent_15 = $total - $percent1;

        $this->sendEmail($orders , $total, $cartCount, $percent_15, $cartItems);
        // Xóa bỏ giỏ hàng
        $cartItems->each(function($cartItem) {
            $cartItem->delete();
        });
        // Trả về kq
        return view('customer.payment', compact('total','cartCount','percent_15','cartItems'));
    }

    private function sendEmail($orders , $total, $cartCount, $percent_15, $cartItems){
        $email_to = $orders->email;
        Mail::send('customer.email', compact('orders', 'total', 'cartCount', 'percent_15', 'cartItems'), function($message) use ($email_to){
            $message->from('thanhdofun09@gmail.com', 'ThanhDo');
            $message->to($email_to, $email_to);
            $message->subject('Order Notification');
        }); 
    }
}
