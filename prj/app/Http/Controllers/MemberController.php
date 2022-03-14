<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $members=DB::table('members')
            ->select('id', 'name', 'telephone', 'email')
            ->get();

        return view('member/index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('member/create');
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
        $member= new Member;
        $member->name=$request->input('name');
        $member->telephone=$request->input('telephone');
        $member->email=$request->input('email');

        $member->save();

        return redirect('member/index');
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
        $member = Member::find($id);
        return view('member/show', compact('member'));
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
        $member=Member::find($id);
        return view('member/edit', compact('member'));
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
        $member=Member::find($id);

        $member->name=$request->input('name');
        $member->telephone=$request->input('telephone');
        $member->email=$request->input('email');

        $member->save();
        
        return redirect('member/index');
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
        $member=Member::find($id);

        $member->delete();

        return redirect('member/index');
    }
}
