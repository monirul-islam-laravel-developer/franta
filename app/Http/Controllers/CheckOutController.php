<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\UserAuth;
use Illuminate\Http\Request;
use Session;
use Cart;

class CheckOutController extends Controller
{
    public function index()
    {
        $user = UserAuth::find(Session::get('userAuth_id'));
        return view('front.checkout.index',compact('user'));
    }
    public function newOrder(Request $request)
    {
        if (Session::get('userAuth_id'))
        {
            $user = UserAuth::find(Session::get('userAuth_id'));
        }
        else
        {
            $this->validate($request, [
                'name' => 'required|min:3|max:50',
                'email' => 'unique:user_auths,email'
            ]);
            $user = new UserAuth();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->password = bcrypt($request->mobile);
            $user->save();

            Session::put('userAuth_id', $user->id);
            Session::put('userAuth_name', $user->name);

            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['password'] = $request->mobile;
            $data['title'] = 'Register Mail';

//            Mail::send('emails.registerMail', ['data' => $data], function ($message) use ($data){
//                $message->to($data['email'])->subject($data['title']);
//            });
        }

        $order = new Order();
        $order->userAuth_id = $user->id;
        $order->total_price = Session::get('grand_total');
        $order->order_date = date('Y-m-d');
        $order->payment_status = 2;
        $order->order_code = rand(111111,999999);;
        $order->save();

        $cartContests = Cart::getContent();
        foreach ($cartContests as $cartContest)
        {
            $orderDetail = new OrderDetail();
            $orderDetail->contest_id = $cartContest->id;
            $orderDetail->order_id = $order->id;
            $orderDetail->contest_name = $cartContest->name;
            $orderDetail->contest_price = $cartContest->price;
            $orderDetail->contest_quantity = $cartContest->quantity;
            $orderDetail->save();
        }
        foreach ($cartContests as $cartContest)
        {
            Cart::remove($cartContest->id);
        }
        $dataOrder['name'] = $user->name;
        $dataOrder['email'] = $user->email;
        $dataOrder['code'] = $order->order_code;
        $dataOrder['total'] = Session::get('grand_total');
        $dataOrder['date'] = date('Y-m-d');
        $dataOrder['payment_status'] = $order->payment_status;
        $dataOrder['title'] = 'Order Confirmation';

//        Mail::send('emails.orderConfirm', ['data' => $dataOrder], function ($message) use ($dataOrder){
//            $message->to($dataOrder['email'])->subject($dataOrder['title']);
//        });

        return redirect()->route('confirm.order', ['id' => $order->id]);
    }
}
