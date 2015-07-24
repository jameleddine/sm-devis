<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','HelloControler@Helloworld');
Route::get('/about','HelloControler@about');
//Route::get('/contact','HelloControler@contact');

$router->get('contact', 'ContactController@showForm');
Route::post('contact', 'ContactController@sendContactInfo');




Route::get('/habitat', function () {return view('Habitat');
});


Route::get('/personne', function () {return view('Personne');
});

Route::get('/assurance', function () {return view('Assurance');
});
Route::get('/entreprise', function () {return view('Entreprise');
});
Route::get('/inscriptionartisan', function () {return view('artisan');
});
Route::get('/inscriptionprofessionnel', function () {return view('professionnel');
});
Route::get('/DemandeDevis', function () {return view('DemandeDevis');
});
Route::get('/ChoixCat', function () {return view('ChoixCat');
});
Route::get('/ArtisanProfessionnel', function () {return view('ArtisanProfessionnel');
});
Route::get('/TrouverArtisan', function () {return view('TrouverArtisan');
});
//------ formulaire de demande de devis //
Route::get('/fourniture_et_pose', function () {return view('Sous_Cat/Habitat/fourniture_et_pose');
});






