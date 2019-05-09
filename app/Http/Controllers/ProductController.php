<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

//$request= new Request();
//request() class ar akta object banate hobe
//database ar data gulak access korte help korbe
class ProductController extends Controller
{
    function addproductview()
    {
        return view('product/view');
    }

    /**
     * @param Request $request
     */
//    shortvabe object korte
//    je function ta post ar kaz korbe tar paramitar
//hisabe oporer Reqest class pass korte hobe and jekono
//nam a akta $object korte hobe
//developer ra $request use kore thken

    /**
     * @param Request $request
     */
    function addproductinsert(Request $request)
    {
        //print_r($_POST);
//       echo $request->product_name;
//      echo  '</br>';
//       echo $request->product_price;
        // print_r($request->all());
       
        Product::create([
            'product_name' => $request->product_name,
            'product_discription' => $request->product_discription,
            'product_price' => $request->product_price,
            'product_quentity' => $request->product_quentity,
            'alert_quentity' => $request->alert_quentity
//   bam pase thke table ar field ar nam
//    dan pase a thke from ar field ar nam
//          echo "done";
        ]);

    }

}
