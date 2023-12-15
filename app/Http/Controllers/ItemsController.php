<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ItemCategory;
use Illuminate\Database\QueryException;
use Illuminate\Database\UniqueConstraintViolationException;

use function Laravel\Prompts\alert;

class ItemsController extends Controller
{
    public function items(){
        $items = Item::all();
        return view('items.index',[
            'items'=>$items
        ]);


    }


    public function add(){
        $categories = ItemCategory::all();
        return view('items.add',[
            'categories' => $categories
        ]);
    }

    public function addItems(Request $request){
        $items = $request->all();
        // dd($items);
        Item::create($items);
        return redirect()->to('/items/add');

    }

    public function editItems($id){
        $item = Item::find($id);
        return view('items.edit',[
            'item'=>$item
        ]);

    }

    public function updateItems($id, Request $request){
        $data = $request->all();
        $items = Item::find($id);
        $items->update($data);

        return redirect('items');
        
    }

    public function deleteItems($id){
        $item = Item::find($id);
        $item->delete();
        return redirect()->back();
    }


    public function itemsCategory(){
        $categories = ItemCategory::all();
        return view('itemsCategory.index',[
            'categories'=> $categories
        ]);
    }

    public function addCategory(){
        return view('itemsCategory.add');
    }

    public function addItemsCategory(Request $request){
        $request->validate([
            'name' => 'unique:itemsCategory',
        ]);
        // try{
        //     $items = $request->all();
        //     ItemCategory::create($items);
        // } catch(QueryException $e){
        //     if ($e->errorInfo[1] == 1062) {
        //     }
                        
        // }
        $items = $request->all();
        ItemCategory::create($items);

        return redirect()->back();
        
        

    }

    public function editCategory($id){
        $category = ItemCategory::find($id);

        return view('itemsCategory.edit',[
            'category'=>$category
        ]);

    }

    public function updateCategory($id, Request $request){
        $data = $request->all();

        $itemCategory = ItemCategory::find($id);

        $itemCategory->update($data);

        return redirect('itemsCategory');

    }

    public function deleteCategory($id){
        $category = ItemCategory::find($id);
        $category->delete();
        return redirect()->back();
    }


}
