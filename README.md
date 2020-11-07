**This is an alpha-stage project. Please do not use it, yet.**

# Illuminate XR

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Travis](https://img.shields.io/travis/illuminate/xr.svg?style=flat-square)]()
[![Total Downloads](https://img.shields.io/packagist/dt/illuminate/xr.svg?style=flat-square)](https://packagist.org/packages/illuminate/xr)

Build your next app UI with WebVR/WebXR using [A-Frame](https://github.com/aframevr/aframe), 
and self-host "multiplayer" networked experiences using [Laravel WebSockets](https://beyondco.de/docs/laravel-websockets/getting-started/introduction).
This Laravel package aims to provide:

* Patterns for creating reactive VR UI, powered by [Vue](https://vuejs.org/) and A-Frame
* Laravel WebSockets pre-configured for self-hosting fast, scalable networked experiences
* Provide familiar and comfortable networking experiences, with Lobbies and Rooms
* Use [Cashier](https://laravel.com/docs/8.x/billing) to charge credit cards and manage paid subscriptions
* Use [Socialite](https://laravel.com/docs/8.x/socialite) to allow visitors to login using their social media accounts and [many other providers](https://socialiteproviders.com/)
* Add an API to your project using [Passport](https://laravel.com/docs/8.x/passport), and allow your users to have and manage profiles
* Catalog and preview scene assets using [Twill](https://twill.io) as your CMS

While the focus of this project is currently on building experiences for VR, the goal is to 
eventually expand that scope to support AR solutions as well, hence the *X* in *Illuminate XR*.

## Why VR, and why now?

Dramatically increased by the Coronavirus pandemic of 2020, the demand for remote collaboration 
calls on creatives to give birth to novel ways of fostering connection across distances. 
There is ample space in that [greenfield project](https://en.wikipedia.org/wiki/Greenfield_project)
for immersive experiences that connect people with each other and interact with new and old 
ideas on a emotional visceral level—one that cannot be reached just by talking to a grid
of faces displayed on a monitor.

## Why Laravel?

Laravel is a popular [web application framework](https://laravel.com/) written in PHP. It's 
also a community, comprised of many thousands of developers all around the world. My experiences
using Laravel to build enterprise software inspired me to provide similarly "opinionated" patterns and 
packaged solutions for deploying XR, to enable the consumption of content—not just VR content,
but all kinds of content, services, and even products, delivered *through* VR—and for fostering 
more and better collaboration online.

When setting out to build an XR experience, a developer shouldn't have to consume such a large
breadth of information just to be able to get started. Great projects like [A-Frame](https://aframe.io/) 
gave a web geek like me the ability to start rapidly iterating in VR, even building experiences 
I could explore using my Oculus headset. 

Illuminate XR should allow you to easily trace those really difficult
first steps I took, and be able to create robust, collaborative, VR experiences almost as quickly 
as you can imagine them. My goal is for this project to help keep the creative space in VR democratic and
open. After all, that's the way the web should be.

## Install

Because it's a Laravel package, you need to create a local Laravel app to install Illuminate XR into.
The best place to learn about setting up Laravel is [the manual](https://laravel.com/docs/8.x).

Note that while Laravel includes a built-in webserver for developing locally, if you plan to use
the networking features of this package, you'll need to use [Valet](https://laravel.com/docs/8.x/valet),
[Homestead](https://laravel.com/docs/8.x/homestead), or some other proper webserver. 

You can install XR into any Laravel 6.0+ application: 

```bash
composer require illuminate/xr
```

Then, publish the package's config into your own project. If you've never worked with Laravel
before, note that the [artisan](https://laravel.com/docs/8.x/artisan) command is how you
use Laravel's CLI.

```bash
php artisan vendor:publish --provider="Illuminate\Xr\XrServiceProvider" --tag="config" 
```

## Usage

The best way to learn how to use the features of this package is to explore the 
[examples](https://xr.aaroncollegeman.com), but before you do, make sure you *enable* the examples 
in your copy of `config/xr.php`:

```php
<?php

return [
  
  'examples' => true, // Set to true to enable example experiences
  
];
```

If you can't find your copy of `config/xr.php` in your project it's because you skipped the asset publishing
step above.

Once you've enabled the examples, just visit the URL `/xr/examples` in your app. Happy creating! 

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security-related issues, please email aaron@collegeman.net instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.