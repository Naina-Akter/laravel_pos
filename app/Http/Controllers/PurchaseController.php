<?php

 namespace App\Http\Controllers;
 use Illuminte\Http\Request;
 use App\model\Purchase;
 use Illuminate\Pagination\Paginator;

 class PurchaseController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        return view("pages.purchase.index");
    }


 }