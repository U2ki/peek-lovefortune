<?php

namespace App\Http\Controllers;

use App\Fortune;
use App\Http\Requests\StoreFortuneRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Throwable;
use Illuminate\Support\Facades\Mail;
use App\Mail\Admin;

class FortuneController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Factory|View
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('createFortune');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Factory|View
     * @throws Throwable
     */
    public function store(Request $request)
    {
        $fortune = new Fortune;
        $fortune->my_name = $request->myName;
        $fortune->my_crush_name = $request->myCrush;
        $fortune->peek_user_id = $request->id;
        $fortune->save();

        $toMail = DB::table('users')->where('id', $fortune->peek_user_id)->value('email');

        Mail::to($toMail)->send( new \App\Mail\Fortune($fortune->my_name, $fortune->my_crush_name) );

        return redirect('/fortune/{id}/peeked');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     */
    public function update($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Show the that it has been sent.
     *
     * @return Factory|View
     */
    public function peeked()
    {
        return view('peeked');
    }

    /**
     * @param $id
     */
    public function sendMail($id)
    {

    }
}
