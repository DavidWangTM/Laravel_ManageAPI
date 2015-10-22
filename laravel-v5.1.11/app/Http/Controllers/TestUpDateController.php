<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestUpDateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('upimage');
//        $disk = \Storage::disk('qiniu');
//        $token = $disk->getDriver()->uploadToken('01.jpg');
//        return view('upimage',compact('token'));
    }


    public function index_ajax(){

        return view('ajaxup');
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $realPath = $file -> getRealPath();
            $disk = \Storage::disk('qiniu');
            $clientName = $file->getClientOriginalName();
            $type = $disk->put($clientName, file_get_contents($realPath));
            if ($type) {
                $path = $disk->getDriver()->privateDownloadUrl($clientName);
                dd($path);
            } else {
                dd('上传失败');
            }
        }
    }

    public function store_ajax(Request $request)
    {

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $realPath = $file -> getRealPath();
            $disk = \Storage::disk('qiniu');
            $clientName = $file->getClientOriginalName();
            $type = $disk->put($clientName, file_get_contents($realPath));
            if ($type) {
                $path = $disk->getDriver()->privateDownloadUrl($clientName);
                $back = \Response::json([
                        'success' => true,
                        'avatar' => asset($path),]);
                return $back;
            } else {
                $back = \Response::json([
                    'success' => false,
                    'errors' => asset('上传失败'),]);
                return $back;
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
