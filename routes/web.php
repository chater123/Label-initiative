<?php
Auth::routes();
//static pages routing
Route::get('/qui_sommes_nous','StaticPagesController@qui_sommes_nous');
Route::get('/contact','StaticPagesController@contact');
Route::get('/team','StaticPagesController@team');
// home page and deposer projet routing
Route::get('/','HomeController@index')->name('home');
// translate route
Route::get('language/{lang}', 'HomeController@language')->where('lang', '[A-Za-z_-]+');
Route::get('/deposer','DeposerProjetController@index');
Route::post('/deposer','DeposerProjetController@store');
//espace Partenaires
Route::get('/espace_partenaire/myaccount','EspacePartenaireController@myaccount');
Route::put('/espace_partenaire/myaccount/{id}','EspacePartenaireController@update_myaccount')->name('update_myaccount_partenaire');
Route::get('/espace_partenaire/chat','EspacePartenaireController@chat');
Route::get('/espace_partenaire','EspacePartenaireController@index')->name('all_projet_partenaire');
Route::get('/espace_partenaire/fav_projets','EspacePartenaireController@fav_projets');
Route::get('/espace_partenaire/projets/{categorie_name}','EspacePartenaireController@categorie');
// espace porteur de projet routing

Route::get('/espace_porteur/myaccount','EspacePorteurProjetController@myaccount');
Route::put('/espace_porteur/myaccount/{id}','EspacePorteurProjetController@update_myaccount')->name('update_myaccount_porteur');
Route::get('/espace_porteur/chat','EspacePorteurProjetController@chat');
Route::get('/espace_porteur','EspacePorteurProjetController@index')->name('projet_news');
Route::get('/espace_porteur/edit','EspacePorteurProjetController@edit');
Route::get('/espace_porteur/createnouvelle','EspacePorteurProjetController@createNouvelle');
Route::post('/espace_porteur','EspacePorteurProjetController@storeNouvelle')->name('store_nouvelle');
Route::Delete('/espace_porteur/photonouvelle/{id}','EspacePorteurProjetController@destroy')->name('deletephoto_nouvelle');
//projet routing
Route::post('favorite/{projet}','ProjetController@favoriteProjet');
Route::post('unfavorite/{projet}','ProjetController@unFavoriteProjet');
Route::put('/projet/{id}/photo','ProjetController@updatephotos')->name('updatephotos');
Route::Delete('/projet/photo/{id}','ProjetController@destroyphoto')->name('deletephoto');
Route::resource('projet','ProjetController');
Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');
Route::resource('partenaire', 'PartenaireController');
Route::resource('evenement', 'EvenementController');
//notification routing
Route::get('/profiles/{user}/notifications', 'UserNotificationsController@index');
Route::delete('/profiles/{user}/notifications/{notification}', 'UserNotificationsController@destroy');
//talk routing
Route::get('message/{id}', 'MessageController@chatHistory')->name('message.read');
Route::group(['prefix'=>'ajax', 'as'=>'ajax::'], function() {
	Route::post('message/send', 'MessageController@ajaxSendMessage')->name('message.new');
	Route::delete('message/delete/{id}', 'MessageController@ajaxDeleteMessage')->name('message.delete');
});