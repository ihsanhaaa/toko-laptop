<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();

        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();

        return view('product.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
            'judul' => 'string|string',
            'slug' => 'string|string',
            'harga' => 'required|integer',
            'ringkasan' => 'required',
            'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png|max:2048',
            'status' => 'nullable|string',
            'deskripsi' => 'nullable|string',
        ]);

        if($request->hasfile('imageFile')) {
            foreach($request->file('imageFile') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(storage_path('/../public/photos'), $name);
                $imgData[] = $name; 
            }

            $input = $request->all();
            $input['foto'] = json_encode($imgData);
            $input['slug'] = Str::slug($request['judul'], '-');
            Product::create($input);

            return redirect()->route('product.index')
                ->with('success','Produk created successfully');
        }

        // dd($request);

        

        return redirect()->route('product.index')
                        ->with('success','Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd(decrypt($id));

        $product = Product::find(decrypt($id));

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find(decrypt($id));

        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $product = Product::find(decrypt($id));

        request()->validate([
            'title' => 'string',
            'slug' => 'string',
            'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png|max:2048',
            'status' => 'nullable|string',
            'deskripsi' => 'nullable|string',
        ]);

        if(request()->hasfile('imageFile')) {
            foreach(request()->file('imageFile') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(storage_path('/../../public_html/photos'), $name);
                $imgData[] = $name; 
            }
        }

        $product = new Product();
        $product->title = $request->title;
        $product['slug'] = Str::slug($product['title'], '-');
        $product->foto_program = json_encode($imgData);
        $product->status = $request->status;
        $product->deskripsi = $request->deskripsi;
        $product ->save();

        return redirect()->route('product.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd(decrypt($id));
        Product::find(decrypt($id))->delete();

        return redirect()->route('product.index')
                        ->with('success','Product deleted successfully');
    }

    public function status(Request $request, Product $product)
    {
        $product->status = true;
        $product->save();

        return redirect()->route('product.index')
            ->with('success', 'Product sudah soldout');
    }
}
