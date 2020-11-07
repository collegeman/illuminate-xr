<?php

if (config('xr.examples')) {
  Route::get('examples', function() {
    return redirect(route('xr.examples.getting-started.introduction'));
  });

  Route::get('examples/getting-started', function() {
    return redirect(route('xr.examples.getting-started.introduction'));
  })->name('xr.examples.getting-started');

  Route::get('examples/getting-started/introduction', function() {
    return view('illuminate-xr::examples.getting-started.introduction', [
      'title' => 'Getting Started'
    ]);
  })->name('xr.examples.getting-started.introduction');

  Route::get('examples/networking', function() {
    return redirect(route('xr.examples.networking.overview'));
  })->name('xr.examples.networking');

  Route::get('examples/networking/overview', function() {
    return view('illuminate-xr::examples.networking.overview', [
      'title' => 'Networking Overview'
    ]);
  })->name('xr.examples.networking.overview');
}