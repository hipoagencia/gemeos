<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\LeadSource;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\LeadSource as LeadSourceRequest;

class LeadSourceController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:leadSource-list|leadSource-create|leadSource-edit|leadSource-delete', ['only' => ['index','store']]);
        $this->middleware('permission:leadSource-create', ['only' => ['create','store']]);
        $this->middleware('permission:leadSource-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:leadSource-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $leadSources = LeadSource::orderBy('id', 'DESC')->paginate(20);
        return view('admin.leadSource.index', [
            'leadSources' => $leadSources
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.leadSource.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LeadSourceRequest $request)
    {
        $LeadSource = LeadSource::create($request->all());

        return redirect()->route('admin.lead-source.edit', [
            'lead_source' => $LeadSource->id
        ])->with(['type' => 'success', 'message' => 'Origem cadastrada com sucesso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $LeadSource = LeadSource::where('id', $id)->firstOrFail();
        return view('admin.leadSource.edit', [
            'lead_source' => $LeadSource
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(LeadSourceRequest $request, $id)
    {
        $LeadSource = LeadSource::where('id', $id)->firstOrFail();
        $LeadSource->fill($request->all());
        $LeadSource->save();

        return redirect()->route('admin.lead-source.edit', [
            'lead_source' => $LeadSource->id
        ])->with(['type' => 'success', 'message' => 'Origem atualizada com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        LeadSource::where('id', $id)->delete();
        return redirect()->back()->with(['type' => 'success', 'message' => 'Registro deletado com sucesso!']);
    }
}
