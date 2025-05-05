<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\NivelRepositoryInterface;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    protected $nivelRepositorio;

    public function __construct(NivelRepositoryInterface $nivelRepositorio)
    {
        $this->nivelRepositorio = $nivelRepositorio;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nivels = $this->nivelRepositorio->all();
        return view('nivels.index')->with('nivels', $nivels);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nivels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->nivelRepositorio->create([
            'nome' => $request->nome,
        ]);

        return redirect()->route('nivels.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
