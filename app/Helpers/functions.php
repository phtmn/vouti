<?php

if (! function_exists('removeMaskCpf')) {
    function removeMaskCpf($cpf) {
        return preg_replace("/[^\d]+/", "", $cpf);
    }
}

if (! function_exists('removeMaskCnpj')) {
    function removeMaskCnpj($cnpj) {
        return preg_replace("/[^\d]+/", "", $cnpj);
    }
}

function mask($mask,$str){

    $str = str_replace(" ","",$str);

    for($i=0;$i<strlen($str);$i++){
        $mask[strpos($mask,"#")] = $str[$i];
    }

    return $mask;

}

function dataBanco($data){
    $dataBanco = str_replace("/", "-", $data);
    return date('Y-m-d', strtotime($dataBanco));
}

if(! function_exists('toMoney')){
    function toMoney($value){
        $val = str_replace(',','.',str_replace('.','',$value));
        return $val;
    }
}

/**
 * Store media
 */
if (!function_exists('storeMedia')) :
  function storeMedia($obj, $img, $legend, $collection, $update = false)
  {
      if ($img) :
          if ($update) :
              $obj->clearMediaCollection($collection);
          endif;

          $obj->addMedia($img)
              ->usingName($legend)
              ->usingFileName(md5($img->getClientOriginalName()) . '.' . $img->getClientOriginalExtension())
              ->toMediaCollection($collection);
      endif;
  }
endif;


    /**
     * Create a "Random" String
     *
     * @param   string  type of random string.  basic, alpha, alnum, numeric, nozero, unique, md5, encrypt and sha1
     * @param   int number of characters
     * @return  string
     */
    if (!function_exists('random_string')) {
        function random_string($type = 'alnum', $len = 8)
        {
            switch ($type)
            {
                case 'basic':
                    return mt_rand();
                case 'alnum':
                case 'numeric':
                case 'nozero':
                case 'alpha':
                    switch ($type)
                    {
                        case 'alpha':
                            $pool = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                            break;
                        case 'alnum':
                            $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                            break;
                        case 'numeric':
                            $pool = '0123456789';
                            break;
                        case 'nozero':
                            $pool = '123456789';
                            break;
                    }
                    return substr(str_shuffle(str_repeat($pool, ceil($len / strlen($pool)))), 0, $len);
                case 'md5':
                    return md5(uniqid(mt_rand()));
                case 'sha1':
                    return sha1(uniqid(mt_rand(), TRUE));
            }
        }
    }
