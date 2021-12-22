<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Str;


class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.property.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if ($request->ajax()) {

            //$data = Lead::with('roles')->latest();
            $data = Property::
//                ->when(auth()->user()->hasRole('corretor'), function ($query) {
//                    $query->where('user_id', auth()->user()->id);
//                })
                latest();

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('Endereco', function ($row) {
                    return '<b>' . $row->TipoImovel . ' ' . $row->Bairro . '</b> (' . $row->Endereco . ')';
                })
                ->editColumn('UrlGaiaSite', function ($row) {
                    return '<a href="http://www.rivierafull.com.br/imovel-detalhes.aspx?ref='. $row->CodigoImovel . '" target="_blank">Acessar</a>';
                })
                ->editColumn('Url', function ($row) {
                    $title = $row->TipoImovel . ' ' . $row->Bairro . ' ' . $row->Bairro;
                    $user = (auth()->user()->hasRole('corretor') ? auth()->user()->id : '0');
                    return '<a href="'. route('web.property', ['user' => $user,'propertycode' => $row->CodigoImovel, 'slug' => Str::slug($title) ]) .'" target="_blank">Site Próprio</a>';
                })
//                ->addColumn('user', function ($row) {
//                    $x = '<a href="' . route('admin.users.edit', ['user' => $row->user->id]) . '">'
//                        . $row->user->name . '</a>';
//                    return (auth()->user()->hasRole('corretor') ? $row->user->name : $x);
//                })
                ->rawColumns(['Endereco', 'UrlGaiaSite', 'Url'])
                ->make(true);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
