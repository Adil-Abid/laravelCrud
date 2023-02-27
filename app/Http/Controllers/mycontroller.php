<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class mycontroller extends Controller
{
    //
    function insert(Request $req){
      $name =  $req->get('PName');
      $price =  $req->get('PPrice');
      $pimage =  $req->file ('PImage')->getClientOriginalName();
      //move uploaded file
      $req->PImage->move(public_path('images'),$pimage);
        // return $req->input();
        $prod = new product();
        $prod->PName = $name;
        $prod->PPrice = $price;
        $prod->PImage = $pimage;
        $prod->save();
        return redirect('index');
    }
    function readData(){
     $pdata = product::all();
     return view('insertRead',['data'=>$pdata]);
    }
    function updateOrdelete(Request $req){
            $id = $req->get('id');
            $name = $req->get('name');
            $price = $req->get('price');
            if($req->get('update') == 'Update'){

                return view('updateView',['pid'=>$id,'pname'=>$name,'pprice'=>$price]);

            }
            else{
             //   echo 'abc';
                $prod = product::find($id);
            //   echo $prod;
            //     exit;
               $prod-> delete();
            }
            return redirect('index');

    }
    function update(Request $req){
        $ID = $req->get('id');
        $Name = $req->get('name');
        $Price = $req->get('price');
        $prod = product::find($ID);
        $prod->PName = $Name;
        $prod->PPrice = $Price;
        $prod->save();
        return redirect('index');
    }
}
