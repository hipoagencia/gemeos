<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\Product;
use Illuminate\Http\Request;
use DataTables;

class LeadController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:lead-list|lead-create|lead-edit|lead-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:lead-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:lead-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:lead-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.lead.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if ($request->ajax()) {

            //$data = Lead::with('roles')->latest();
            $data = Lead::with(['user', 'product'])
                ->when(auth()->user()->hasRole('corretor'), function ($query) {
                    $query->where('user_id', auth()->user()->id);
                })
                ->latest();

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('name', function ($row) {
                    return $row->name;
                })
                ->addColumn('action', function ($row) {
                    $x =
                        '<form action="' . route('admin.leads.destroy', ['lead' => $row->id]) . '" method="POST">' .
                        csrf_field() . method_field("DELETE") .
                        '<a href="' . route('admin.leads.edit', ['lead' => $row->id]) . '" class="edit btn btn-success btn-sm">Editar</a>

                        <button type="submit" class="delete btn btn-danger btn-sm"
                            onclick="return confirm(\'Você tem certeza de que deseja deletar esse registro?\')">Deletar</button>
                        </form>
                    ';
                    return (auth()->user()->hasRole('corretor') ? '-' : $x);
                })
//                ->addColumn('user', function ($row) {
//                    return $row->user->name;
//                })
                ->addColumn('user', function ($row) {
                    $x = '<a href="' . route('admin.users.edit', ['user' => $row->user->id]) . '">'
                        . $row->user->name . '</a>';
                    return (auth()->user()->hasRole('corretor') ? $row->user->name : $x);
                })
                ->addColumn('product', function ($row) {
                    if($row->product){
                        $x = '<a href="' . route('admin.products.edit', ['product' => $row->product->id]) . '">'
                            . $row->product->name . '</a>';
                    }
                    else{
                        $x = $row->product_text;
                    }
                    return (auth()->user()->hasRole('corretor') ? $row->product->name : $x);
                })
                ->rawColumns(['action', 'user', 'product'])
                ->make(true);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lead = Lead::where('id', $id)->firstOrFail();
        $products = Product::latest()->orderBy('name', 'ASC')->get();

        return view('admin.lead.edit', [
            'lead' => $lead,
            'products' => $products
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
