<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $invoices = Invoice::get();
        return view('index', compact('invoices'));
    }

    public function profile()
    {
        $invoices = Invoice::where('user_id', auth()->user()->id)->get();
        return view('profile', compact('invoices'));
    }

    public function new()
    {
        $categories = Category::get();
        return view('new', compact('categories'));
    }

    public function create(Request $r)
    {
        $address = $r->address;
        $description = $r->description;
        $category = $r->category;
        $price = $r->price;

        if($r->file('image')) {
            $imageName = $r->image->getClientOriginalName();
            $r->image->move(public_path('images'), $imageName);
        }

        Invoice::create([
            'user_id' => auth()->user()->id,
            'address' => $address,
            'description' => $description,
            'category_id' => $category,
            'image' => $imageName,
            'price' => $price,
            'status' => Invoice::NEW_INVOICE
        ]);

        return redirect()->route('site.profile')->with('success', 'Заявка создана!');
    }

    public function delete($id)
    {
        Invoice::destroy($id);
        return back()->with('success', 'Заявка удалена!');
    }
}
