<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meeting;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // get all records
      $meetings = Meeting::all();
      foreach ($meetings as $meeting) {
        $meeting->view_meeting = [
          'href' => 'api/v1/meeting/' . $meeting->id,
          'method' => 'GET'
        ];
      }

      // response
      $response = [
        'msg' => 'List of all meetings',
        'meetings' => $meetings
      ];
      return response()->json($response, 200);
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
        'title' => 'required',
        'description' => 'required',
        'time' => 'required|date_format:Y-m-d H:i:s',
        'user_id' => 'required'
      ]);

      // set variable
      $title = $request->input('title');
      $description = $request->input('description');
      $time = $request->input('time');
      $user_id = $request->input('user_id');

      // insert new records
      $meeting = new Meeting([
        'title' => $title,
        'description' => $description,
        'time' => $time
      ]);

      // response
      if($meeting->save()) {
        $meeting->users()->attach($user_id);
        $meeting->view_meeting = [
          'href' => 'api/v1/meeting/' . $meeting->id,
          'method' => 'GET'
        ];
        $response = [
          'msg' => 'Meeting created successfully !',
          'meeting' => $meeting
        ];
        return response()->json($response, 201);
      }

      $response = [
        'msg' => 'An error occured during creation !'
      ];
      return response()->json($response, 404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // get specific record
      $meeting = Meeting::with('users') ->
                          where('id', $id) ->
                          firstOrFail();
      $meeting->view_meetings =[
        'href' => 'api/v1/meeting',
        'method' => 'GET'
      ];

      // response
      $response = [
        'msg' => 'Meeting information showed !',
        'meeting' => $meeting
      ];
      return response()->json($response, 200);
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
      // validate input
      $request->validate([
        'title' => 'required',
        'description' => 'required',
        'time' => 'required|date_format:Y-m-d H:i:s',
        'user_id' => 'required'
      ]);

      // set variable
      $title = $request->input('title');
      $description = $request->input('description');
      $time = $request->input('time');
      $user_id = $request->input('user_id');

      // find specific records
      $meeting = Meeting::with('users')->findOrFail($id);
      if(!$meeting->users()->where('users.id', $user_id)->first()){
        return response()->json(['msg' => 'User not registered for meeting, update unsuccessful'], 401);
      }

      // update records
      $meeting->title = $title;
      $meeting->description = $description;
      $meeting->time = $time;

      // response
      if(!$meeting->update()){
        return response()->json([
          'msg' => 'An error occured during update !'
        ], 404);
      }
      $meeting->view_meeting = [
        'href' => 'api/v1/meeting' . $meeting->id,
        'method' => 'GET'
      ];
      $response = [
        'msg' => 'Meeting update successfully !',
        'meeting' => $meeting
      ];
      return response()->json($response, 200);
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
      $users = $meeting->users;

      // detach user that connected to the meeting
      $meeting->users()->detach();

      // delete records (or fail)
      if(!$meeting->delete()){
        foreach ($users as $user) {
          $meeting->users()->attach($user);
        }
        return response()->json(['msg' => 'An error occured during deleting records !'], 404);
      }

      // response
      $response = [
        'msg' => 'A meeting schedule deleted successfully !',
        'create' => [
          'href' => 'api/v1/meeting',
          'method' => 'POST',
          'params' => 'titel, description, time'
        ]
      ];
      return response()->json($response, 200);
    }
}
