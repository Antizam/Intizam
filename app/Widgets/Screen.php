<?php

namespace App\Widgets;
use Illuminate\Http\Request;
use App\User;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\DB;

class Screen extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
       /* $users = User::get();
        dd($users->id);
        $users = DB::table('students')->orderBy('created_at', 'desc')->where('user_id', $users->id)->get();

        return view('widgets.screen', [
            'config' => $this->config,
            'students' => $users,
        ])->with('i'); */
    }
}
