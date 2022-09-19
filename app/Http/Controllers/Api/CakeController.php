<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCakeRequest;
use App\Models\Cake;
use Illuminate\Http\Request;

class CakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $cake = Cake::all();

        return response()->json([
            'status' => true,
            'data' => $cake,
        ]);
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreCakeRequest $request)
    {
        $data = Cake::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Cake foi criado com sucesso!",
            'data' => $data
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cake  $cake
     * @return \Illuminate\Http\Response
     */
    public function show(Cake $cake)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cake  $cake
     * @return \Illuminate\Http\Response
     */
    public function edit(Cake $cake)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cake  $cake
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(StoreCakeRequest $request, Cake $cake)
    {
        $cake->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Cake foi atualizado com sucesso!",
            'data' => $cake
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cake  $cake
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Cake $cake)
    {
        $cake->delete();

        return response()->json([
            'status' => true,
            'message' => "Cake foi deletado com sucesso!"
        ]);
    }
}
