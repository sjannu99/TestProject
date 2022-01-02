<?php
	require_once './db/dbTestProject_dbManager.php';
	
/*
 * SCHEMA DB Student
 * 
	{
		Address1: {
			type: 'String'
		},
		Address2: {
			type: 'String'
		},
		City: {
			type: 'String'
		},
		DOB: {
			type: 'Date', 
			required : true
		},
		Email: {
			type: 'String', 
			required : true
		},
		FirstName: {
			type: 'String', 
			required : true
		},
		Gender: {
			type: 'Custom'
		},
		GradeLevel: {
			type: 'Number'
		},
		LastName: {
			type: 'String', 
			required : true
		},
		MiddleName: {
			type: 'String'
		},
		State: {
			type: 'String'
		},
		Zip: {
			type: 'String'
		},
		//RELAZIONI
		
		
		//RELAZIONI ESTERNE
		
		
	}
 * 
 */


//CRUD METHODS

	
//CRUD - REMOVE

$app->delete('/student/:id',	function ($id) use ($app){
	
	$params = array (
		'id'	=> $id,
	);

	makeQuery("DELETE FROM student WHERE _id = :id LIMIT 1", $params);

});
	
//CRUD - GET LIST

$app->get('/student',	function () use ($app){
	makeQuery("SELECT * FROM student");
});



/*
 * CUSTOM SERVICES
 *
 *	These services will be overwritten and implemented in  Custom.js
 */

			
?>