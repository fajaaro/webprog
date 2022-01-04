<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieController extends Controller
{
    public function set(Request $request)
    {
        if (isset($_COOKIE['carts'])) {
            $data = json_decode($_COOKIE['carts']);

            if (in_array((int)$request->game_id, $data)) {
                return back()->with('failed', 'This game is already in your carts :)');
            } else {
                array_push($data, (int)$request->game_id);

                $this->unsetCookie('carts');
                
                $this->setNewCookie('carts', json_encode($data));            
            }
        } else {
            $data = json_encode([(int)$request->game_id]);

            $this->setNewCookie('carts', $data);
        }

        return back()->with('success', 'Success add game to your carts!');
    }

    public function delete(Request $request)
    {
        $data = json_decode($_COOKIE['carts']);
        
        $data[array_search($request->game_id, $data)] = null;        

        $this->unsetCookie('carts');
        
        $this->setNewCookie('carts', json_encode($data));         

        return back()->with('success', 'Success remove game from your carts!');   
    }

    private function unsetCookie($name)
    {
        unset($_COOKIE[$name]);
        setcookie($name, '', time() - 3600);
    }

    private function setNewCookie($name, $data)
    {
        setcookie('carts', $data);
    }
}
