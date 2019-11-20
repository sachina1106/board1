<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;

class BoardsController extends Controller
{
    private $board;

    public function __construct(Board $board)
    {
        $this->board = $board;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boards = $this->board->all();

        return view('board.index', ['boards' => $boards]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('board.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->board->fill($request->all())->save();

        return redirect()->route('board.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //編集対象データをidをもとに取得して画面に渡す
        $board = $this->board->find($id);

        return view('board.edit', ['board' => $board]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $board = $this->board->find($id);
        $board->fill($input)->save();

        return redirect()->route('board.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->board->find($id)->delete();

        return redirect()->route('board.index');
    }
}