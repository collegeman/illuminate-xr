@php

function ex($route) {
  return route("xr.examples.{$route}");
}

$contents = [
  'Examples' => [
    'Getting Started' => [
      'route' => ex('getting-started'),
      'pages' => [
        'Introduction' => [
          'route' => ex('getting-started.introduction'),
        ],
        'Installation' => [
          'route' => '#',
        ],
        'Testing' => [
          'route' => '#',
        ],
        'Reporting Issues' => [
          'route' => '#',
        ],
      ],
    ],
    'VR' => [
      'route' => '#',
      'pages' => [
        'Overview' => [
          'route' => '#',
        ],
      ]
    ],
    'Modeling' => [
      'route' => '#',
      'pages' => [
        'Overview' => [
          'route' => '#',
        ],
      ]
    ],
    'Networking' => [
      'route' => ex('networking'),
      'pages' => [
        'Overview' => [
          'route' => ex('networking.overview'),
        ],
      ]
    ],
  ],
];

@endphp<!doctype html>
<html>
  <head>
    <title>{{ $title ?? '' }} | illuminate-xr</title>
    @section('styles')
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.3.2/styles/default.min.css">
      <style>
        a-scene[embedded] {
          width: 100%;
          height: 480px;
        }

        .sidebar {
          position: fixed;
          top: 50px;
          border-right: 1px solid #eee;
          height: calc(100vh - 4rem);
          width: 300px;
          padding: 25px;
        }

        .sidebar-toc-heading {
          font-size: 1.1rem;
          color: #111;
          font-weight: bold;
        }

        .sidebar-toc-link {
          color: #111;
        }

        .sidebar-toc-link.active {
          font-weight: bold;
        }

        main > section {
          margin-bottom: 2rem;
        }
      </style>
    @show
    @section('aframe')
      <script src="https://aframe.io/releases/1.0.4/aframe.js"></script>
    @show
  </head>
  <body>
    @section('container')
      <div class="container pt-5">
        <div class="row justify-content-center">
          <main class="col-12 col-md-8 col-xl-7 pt-5">
            @section('content')

            @show
          </main>
        </div>
      </div>
      @section('navbar')
        <div class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <a class="navbar-brand" href="#">Illuminate XR</a>
        </div>
        <aside class="sidebar">
          <ul class="list-unstyled">
            @foreach(data_get($contents, 'Examples') as $section => $config)
              <a class="sidebar-toc-heading" href="{{ data_get($config, 'route', '#') }}">{{ $section }}</a>
              @if ($pages = data_get($config, 'pages'))
                <ul class="list-unstyled mb-3">
                  @foreach($pages as $title => $config)
                    <li>
                      <a class="sidebar-toc-link" href="{{ data_get($config, 'route', '#') }}">
                        {{ $title }}
                      </a>
                    </li>
                  @endforeach
                </ul>
              @endif
            @endforeach
          </ul>
        </aside>
      @show
    @show
    @section('scripts')
      <script src="//code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.3.2/highlight.min.js"></script>
      <script>hljs.initHighlightingOnLoad();</script>
    @show
  </body>
</html>