<?php

namespace App\Http\Utils;

use Illuminate\Support\Str;

trait UploadConf
{
  public function getImgName($image)
  {
    if ($image !== null) {
      $name = Str::random(16) . round(microtime(true)) . '.' . $image->guessExtension();
      $imgName = $name;
      $image->move('statics/img', $name);
    }
    return $imgName;
  }
}
