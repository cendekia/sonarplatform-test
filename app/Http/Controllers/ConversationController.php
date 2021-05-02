<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversationController extends Controller
{
    /**
     * Display a listing of the twitter conversation.
     *
     * @return \Illuminate\Http\Response
     */
    public function twitter()
    {
        return view('conversation.twitter');
    }

    /**
     * Display a listing of the facebook conversation.
     *
     * @return \Illuminate\Http\Response
     */
    public function facebook()
    {
        return view('conversation.facebook');
    }

    /**
     * Display a listing of the instagram conversation.
     *
     * @return \Illuminate\Http\Response
     */
    public function instagram()
    {
        return view('conversation.instagram');
    }
}
