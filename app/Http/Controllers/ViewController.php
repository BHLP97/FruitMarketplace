<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function index()
    {
        return view('home');
    }

    public function indexFruits(Request $request)
    {
        $isLastCrumb = 1;
        switch ($request->type) {
            case 'apples':
                $breadcrumb_2 = "Apples";
                $isLastCrumb = 2;
                break;
            case 'grapes':
                $breadcrumb_2 = "Grapes";
                $isLastCrumb = 2;
                break;
            case 'persimmons':
                $breadcrumb_2 = "Persimmons";
                $isLastCrumb = 2;
                break;
            case 'baskets':
                $breadcrumb_2 = "Fruit Baskets";
                $isLastCrumb = 2;
                break;
            case 'imported':
                $breadcrumb_2 = "Imported Fruits";
                $isLastCrumb = 2;
                break;
            case 'dried-seeds':
                $breadcrumb_2 = "Dried fruits & Nutritious Seeds";
                $isLastCrumb = 2;
                break;
            case 'dried-fruits':
                $breadcrumb_2 = "Dried fruits";
                $isLastCrumb = 2;
                break;
            case 'seeds':
                $breadcrumb_2 = "Nutritious Seeds";
                $isLastCrumb = 2;
                break;
            default:
                $breadcrumb_2 = "";
                break;
        }
        if($request->type == 'baskets') {
            $breadcrumb_2 = "Fruit Baskets";
        }
        return view('indexFruits',[
            "breadcrumb_1" => 'Fruits',
            "link_1" => "/fruits",
            "breadcrumb_2" => $breadcrumb_2,
            "link_2" => "",
            "isLastCrumb" => $isLastCrumb,
            "product_type" => $request->type,
            "price" => $request->price,
            "price_min" => $request->price_min ?? '',
            "price_max" => $request->price_max ?? ''
        ]);
    }

    public function aboutUs()
    {
        return view('aboutUs',[
            "breadcrumb_1" => 'About Us',
        ]);
    }

    public function blog()
    {
        return view('blog',[
            "breadcrumb_1" => 'Blog',
        ]);
    }

    public function contact()
    {
        return view('contactUs',[
            "breadcrumb_1" => 'Contact Us',
        ]);
    }

    public function policy(Request $request)
    {
        $breadcrumb_1 = '';
        switch ($request->type) {
            case 'payment':
                $view = 'paymentPolicy';
                $breadcrumb_1 = 'Payment Policy';
                break;
            case 'shipping':
                $view = 'shippingPolicy';
                $breadcrumb_1 = 'Shipping Policy';
                break;
            case 'refund':
                $view = 'refundPolicy';
                $breadcrumb_1 = 'Refund Policy';
                break;
            case 'security':
                $view = 'securityPolicy';
                $breadcrumb_1 = 'Security Policy';
                break;
            case 'goods_inspection':
                $view = 'goodsInspectionPolicy';
                $breadcrumb_1 = 'Goods Inspection Policy';
                break;
            default:
                break;
        }
        return view($view, [
            'breadcrumb_1' => $breadcrumb_1,
            "isLastCrumb" => 1
        ]);
    }
}
