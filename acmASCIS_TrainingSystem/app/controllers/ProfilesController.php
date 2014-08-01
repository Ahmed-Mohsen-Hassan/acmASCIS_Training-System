<?php

class ProfilesController extends \BaseController {

	/**
	 * Display a listing of profiles
	 *
	 * @return Response
	 */
	public function index()
	{
		$profiles = Profile::all();

		return View::make('profiles.index', compact('profiles'));
	}

	/**
	 * Show the form for creating a new profile
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('profiles.create');
	}

	/**
	 * Store a newly created profile in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Profile::$rules);
	// check if the validator failed -----------------------
	  if ($validator->fails()) {
		// get the error messages from the validator
		$messages = $validator->messages();
		// redirect our user back to the form with the errors from the validator
		return Redirect::to('profiles/create')
			->withErrors($validator)
			->withInput(Input::all());
		
		}
	else {
		$profile_ = new Profile();
		$profile_-> real_name = Input::get('real_name');
		$profile_-> country = Input::get('country');
		$profile_-> photo = Input::get('photo');
		$profile_-> uva_id = Input::get('uva_id');
		$profile_-> spoj_username = Input::get('spoj_username');
		$profile_-> codeforces_username = Input::get('codeforces_username');
		$profile_-> topcoder_username = Input::get('topcoder_username');
		$profile_-> livearchive_id = Input::get('livearchive_id');
		$profile_->save();
		return Redirect::to('profiles');
	
	}
	}

	/**
	 * Display the specified profile.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$profile = Profile::findOrFail($id);
		return View::make('profiles.show', compact('profile'));
	}

	/**
	 * Show the form for editing the specified profile.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$profile = Profile::find($id);

		return View::make('profiles.edit', compact('profile'));
	}

	/**
	 * Update the specified profile in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$profile = Profile::find($id);
		$validator = Validator::make(Input::all(), Profile::$update_rules);
		if ($validator->fails())
		{
			return Redirect::back()
			->withErrors($validator)
			->withInput(Input::all());
		}
		$profile_-> real_name = Input::get('real_name');
		$profile_-> country = Input::get('country');
		$profile_-> photo = Input::get('photo');
		$profile_-> uva_id = Input::get('uva_id');
		$profile_-> spoj_username = Input::get('spoj_username');
		$profile_-> codeforces_username = Input::get('codeforces_username');
		$profile_-> topcoder_username = Input::get('topcoder_username');
		$profile_-> livearchive_id = Input::get('livearchive_id');
		$profile_->save();
		return Redirect::route('profiles.index');
	}

	/**
	 * Remove the specified profile from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Profile::destroy($id);

		return Redirect::route('profiles.index');
	}

}
