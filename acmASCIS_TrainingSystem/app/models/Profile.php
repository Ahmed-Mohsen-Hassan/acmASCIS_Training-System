<?php

class Profile extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'\
	        'real_name' => 'required|unique:profiles',
	        'uva_id' => 'numeric',
	        'livearchive_id' => 'numeric'
	];
	public static $update_rules =[

	        'uva_id' => 'numeric',
	        'livearchive_id' => 'numeric'
	];

	// Don't forget to fill this array
	protected $fillable = [];
}