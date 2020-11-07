@extends('illuminate-xr::examples.layout')

@section('content')

  <header class="mb-4">
    <h1 class="mb-2">
      Introduction
    </h1>
    <div class="h4 font-weight-normal">
      Get started with <b>Illuminate XR</b>, a framework for creating and
      self-hosting networked VR and AR experiences using <a href="https://laravel.com/">Laravel</a> and
      <a href="https://github.com/aframevr/aframe">A-Frame</a>.
    </div>
  </header>

  <section>
    <h2 class="h3">
      Why VR? Why Now?
    </h2>

    <p>
      Dramatically increased by the Coronavirus pandemic of 2020, the demand for remote collaboration
calls on creatives to give birth to novel ways of fostering connection across distances.
      There is ample space in that <a href="https://en.wikipedia.org/wiki/Greenfield_project">greenfield project</a>
for immersive experiences that connect people with each other and interact with new and old
ideas on a visceral level—one that cannot be reached just by talking to a grid
of faces displayed on a monitor. That's what VR can be.
    </p>
  </section>

  <section>
    <h2 class="h3">
      Laravel
    </h2>
    <p>
      <a href="https://laravel.com/">Laravel</a> is an opinionated web application framework written in PHP.
      Laravel is also a global
      community of developers. You can learn more about Laravel and its ecosystem on
      <a href="https://laravel.com/">laravel.com</a>.
    </p>
    <p>
      <b>Illuminate XR</b> is a Laravel package, meaning that it's a Composer-packaged library of
      code that installs into a Laravel codebase as a dependency. If all of that is greek, don't
      worry: Laravel's <a href="https://laravel.com/docs/8.x">documentation</a> is second to none,
      and on <a href="https://laracasts.com/series/laravel-6-from-scratch">Laracasts</a> you'll find
      all the instructional courses you need to start using Laravel today.
    </p>
  </section>

  <section>
    <h2 class="h3">
      A-Frame
    </h2>
    <p>
      <a href="https://aframe.io/">A-Frame</a> is a web framework for building 3D/AR/VR experiences. It allows
      you to use HTML to compose 3D worlds that can be explored using Quest, Rift, WMR, SteamVR, mobile, and desktop
      devices and browsers.
    </p>
    <p>
      A-Frame is built on top of the ever-popular <a href="https://github.com/mrdoob/three.js/">three.js</a>,
      which is a lightweight library for rendering 3D with WebGL. A-Frame abstracts away a lot of the complexity
      of coding directly with the three.js, allowing you to define Entity-Components through the familiar
      and simple syntax of HTML.
    </p>
    <p>
      An example of an A-Frame scene is below. If you can't see it, your browser might not support WebGL rendering.
      It should <a href="#">look like this</a>, and you should be able to grab it with your mouse to adjust your
      perspective on the scene.
    </p>

    <div class="mb-3">
      <a-scene embedded>
        <a-box position="-1 0.5 -3" rotation="0 45 0" color="#4CC3D9"></a-box>
        <a-sphere position="0 1.25 -5" radius="1.25" color="#EF2D5E"></a-sphere>
        <a-cylinder position="1 0.75 -3" radius="0.5" height="1.5" color="#FFC65D"></a-cylinder>
        <a-plane position="0 0 -4" rotation="-90 0 0" width="4" height="4" color="#7BC8A4"></a-plane>
        <a-sky color="#ECECEC"></a-sky>
      </a-scene>
    </div>

    <p>
      The code that creates the scene above looks like this:
    </p>

    <x-illuminate-xr::code lang="html">
<a-scene embedded>
  <a-box position="-1 0.5 -3" rotation="0 45 0" color="#4CC3D9"></a-box>
  <a-sphere position="0 1.25 -5" radius="1.25" color="#EF2D5E"></a-sphere>
  <a-cylinder position="1 0.75 -3" radius="0.5" height="1.5" color="#FFC65D"></a-cylinder>
  <a-plane position="0 0 -4" rotation="-90 0 0" width="4" height="4" color="#7BC8A4"></a-plane>
  <a-sky color="#ECECEC"></a-sky>
</a-scene>
    </x-illuminate-xr:>

    <p>
      You can probably infer easily the role
      that each HTML element is playing in describing to the browser what needs to be rendered and where:
      <code>&lt;a-box&gt;</code> nested inside an <code>&lt;a-scene&gt;</code> tag is, quite literally, <em>a box
      inside a 3D scene</em>.
    </p>



  </section>

@endsection

