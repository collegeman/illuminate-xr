<?php
namespace Illuminate\Xr\Http;

use Route;

class ExamplePage {

  protected $path;

  public $namespace;

  function __construct($path) {
    $this->path = $path;
    $this->namespace = "xr.examples.{$path}";
  }

  function route() {
    return route($this->namespace);
  }

  function view($data) {
    return function() use ($data) {
      return view("illuminate-xr::examples." . $this->path, $data);
    };
  }

  function viewWithTitle($title) {
    return $this->view([
      'title' => $title,
    ]);
  }

  function redirect() {
    return function () {
      return redirect($this->route());
    };
  }

}

function ex($path) {
  return new ExamplePage($path);
}

if (config('xr.examples')) {
  Route::get('examples', ex('getting-started.introduction')->redirect())->name('xr.examples');

  with(ex('getting-started.introduction'), function($ex) {
    Route::get('examples/getting-started', $ex->redirect())->name('xr.examples.getting-started');
    Route::get('examples/getting-started/introduction', $ex->viewWithTitle('Getting Started'))->name($ex->namespace);
  });

  with(ex('networking.overview'), function($ex) {
    Route::get('examples/networking', $ex->redirect())->name('xr.examples.networking');
    Route::get('examples/networking/overview', $ex->viewWithTitle('Networking'))->name($ex->namespace);
  });

}