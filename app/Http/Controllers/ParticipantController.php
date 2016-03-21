<?php namespace Evento\Http\Controllers;

use Evento\Http\Requests;
use Evento\Http\Requests\ParticipantRequest;

use Evento\Http\Controllers\Controller;
use Evento\Participant;

use Illuminate\Http\Request;

class ParticipantController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		//
		$participants = Participant::document($request->get('document'))->paginate();

		//dd($participants);
		return view('participants.index',compact('participants'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('participants.create');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ParticipantRequest $request)
	{
		//
		$participant = Participant::create($request->all());

		return redirect('participants');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$participant = Participant::find($id);

		return view('participants.edit',compact('participant'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,ParticipantRequest $request)
	{
		//
		$participant = Participant::find($id);
	    $participant->fill($request->all());
	    $participant->push();

	    return redirect('participants');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$participant = Participant::find($id);
		$participant->delete();
		return redirect('participants');
	}

}
