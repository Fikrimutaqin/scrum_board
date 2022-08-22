<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ['title' => 'Dashboard', 'menu' => $this->dataMenu()];
        return view('pages.dashboard.home.index', $data);
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
    public function show($id)
    {
        //
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

    /**
     * List data menu
     */

    public function dataMenu()
    {
        $data = [['title' => 'Home', 'icon' => 'fa-solid fa-house-user', 'url' => '#', 'slug' => 'dashboard'], ['title' => 'Project', 'icon' => 'fa-solid fa-diagram-project', 'url' => '#', 'slug' => 'project'], ['title' => 'Setting', 'icon' => 'fa-solid fa-sliders', 'url' => '#', 'slug' => 'setting'], ['title' => 'Logout', 'icon' => 'fa-solid fa-right-from-bracket', 'url' => '/auth/signout', 'slug' => 'logout']];
        $arrayPushMenu = [];
        foreach ($data as $datas) {
            array_push($arrayPushMenu, $datas);
        }
        return $arrayPushMenu;
    }
}
