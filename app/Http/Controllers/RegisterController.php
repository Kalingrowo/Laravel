<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Meeting;

class RegisterController extends Controller
{
    public function __construct(){
      $this->middleware('auth:api');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate input
      $request->validate([
        'meeting_id' => 'required',
        'user_id' => 'required'
      ]);

      // set variable
      $meeting_id = $request->input('meeting_id');
      $user_id = $request->input('user_id');

      $meeting = Meeting::findOrFail($meeting_id);
      $user = User::findOrFail($user_id);

      // response
      $message = [
        'msg' => 'User is already registered for meeting',
        'user' => $user,
        'meeting' => $meeting,
        'unregister' => [
          'href' => 'api/v1/meeting/registration/' . $meeting->id,
          'method' => 'DELETE'
        ]
      ];
      if($meeting->users()->where('users.id', $user->id)->first()){
        return response()->json($message, 404);
      }

      // register user to meeting
      $user->meetings()->attach($meeting);

      // response
      $message = [
        'msg' => 'User registered successfully !',
        'user' => $user,
        'meeting' => $meeting,
        'unregister' => [
          'href' => 'api/v1/meeting/registration/' . $meeting->id,
          'method' => 'DELETE'
        ]
      ];
      return response()->json($message, 201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // find specific records
      $meeting = Meeting::findOrFail($id);

      // detach all connected users
      $meeting->users()->detach();

      // response
      $message = [
        'msg' => 'All users unregistered for meeting !',
        'user' => 'xAdmin',
        'meeting' => $meeting,
        'register' => [
          'href' => 'api/v1/meeting/registration/',
          'method' => 'POST',
          'params' => 'user_id, meeting_id'
        ]
      ];
      return response()->json($message, 200);
    }
}
