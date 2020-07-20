<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvestStoreRequest;
use App\Http\Requests\InvestUpdateRequest;
use App\Invest;

class InvestController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $invests = Invest::all();

        return view('invest.index', compact('invests'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('invest.create');
    }

    /**
     * @param \App\Http\Requests\InvestStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvestStoreRequest $request)
    {
        $invest = Invest::create($request->all());

        $request->session()->flash('invest.id', $invest->id);

        return redirect()->route('invest.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\invest $invest
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Invest $invest)
    {
        return view('invest.show', compact('invest'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\invest $invest
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Invest $invest)
    {
        return view('invest.edit', compact('invest'));
    }

    /**
     * @param \App\Http\Requests\InvestUpdateRequest $request
     * @param \App\invest $invest
     * @return \Illuminate\Http\Response
     */
    public function update(InvestUpdateRequest $request, Invest $invest)
    {
        $invest->update([]);

        $request->session()->flash('invest.id', $invest->id);

        return redirect()->route('invest.index');
    }

    /**`
     * @param \Illuminate\Http\Request $request
     * @param \App\invest $invest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Invest $invest)
    {
        $invest->delete();

        return redirect()->route('invest.index');
    }
}
