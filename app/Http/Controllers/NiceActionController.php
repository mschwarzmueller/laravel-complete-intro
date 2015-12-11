<?php

namespace App\Http\Controllers;

use App\LoggedAction;
use App\NiceAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class NiceActionController extends Controller
{
    public function getHome()
    {
        $nice_action_names = NiceAction::select('name')->get();
        $logged_nice_actions = LoggedAction::all();
        return view('home', ['logged_nice_actions' => $logged_nice_actions, 'nice_action_names' => $nice_action_names]);
    }

    public function deleteActions()
    {
        LoggedAction::where('id', '>', 0)->delete();
        return redirect()->route('home');
    }

    public function getAction($action)
    {
        $nice_action = NiceAction::where('name', $action)->first();
        $logged_nice_action = new LoggedAction();
        $nice_action->loggedActions()->save($logged_nice_action);
        return redirect()->route('home');
    }

//    public function getGreet()
//    {
//        $nice_action = NiceAction::where('name', 'greet')->first();
//        $logged_nice_action = new LoggedAction();
//        $nice_action->loggedActions()->save($logged_nice_action);
//        return redirect()->route('home');
//    }
//
//    public function getHug($name = null)
//    {
//        $nice_action = NiceAction::where('name', 'hug')->first();
//        $logged_nice_action = new LoggedAction();
//        $nice_action->loggedActions()->save($logged_nice_action);
//        return redirect()->route('home');
//    }
//
//    public function getWave()
//    {
//        $nice_action = NiceAction::where('name', 'wave')->first();
//        $logged_nice_action = new LoggedAction();
//        $nice_action->loggedActions()->save($logged_nice_action);
//        return redirect()->route('home');
//    }

    public function postDoCustomAction(Request $request)
    {
        if (isset($request['action']) && isset($request['name'])) {
            if (strlen($request['name']) > 0) {
                return view('nice', ['action' => $request['action'], 'name' => $this->transformName($request['name'])]);
            }
            if (View::exists($request['action'])) {
                return view($request['action']);
            }
        }
        return redirect()->back();
    }

    private function transformName($name)
    {
        $prefix = "KING ";
        return $prefix . strtoupper($name);
    }
}