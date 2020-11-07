<?php
namespace Illuminate\Xr\Views\Components;

use Illuminate\View\Component;

class Code extends Component {

  public $lang;

  public function __construct($lang)
  {
    $this->lang = $lang;
  }

  public function render()
  {
    return function(array $data) {
      return sprintf(
        '<pre><code class="language-%s">%s</code></pre>',
         $this->lang,
        htmlentities(trim($data['slot'] ?? ''))
      );
    };
  }


}