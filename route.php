
<?php



                            //Controller + function handler
Route::get('/en/rooms', 'RoomController@index');
Route::post('/login','AuthController@create');

Route::get('/orders', 'OrderController@index');

//login { "username": 'brye@gmail.com', "password": 'brye1234'}

// HTTP METHODS

// GET - 
// POST - create new data
// PUT/PATCH - modify existing data 
// DELETE - delete data    
// trying