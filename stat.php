<?php
    /*include "../../../secret.php";
    if ($secret == false) {
        header("Location: ../../index.php");
    }*/
?>
<?php
if (isset ($_POST['url'])) {  // если переменная установлена (передана)
    $fn = $_SERVER['DOCUMENT_ROOT'] . $_POST['url'];  // абсолютный адрес файла
    if (file_exists($fn)) {  // если файл существует
      $f = fopen($fn, "r+");  // открыть файл
      if (flock($f, LOCK_EX)) {  // заблокировать файл, пока выполняется скрипт [php.net]
        $fr = fread($f, filesize($fn));  // записать в переменную содержимое файла
        $pattern = '/(<output id="statlike">)(\d+)(<\/output>)/i';
        $line_ok = preg_match($pattern, $fr, $matches);
        if($line_ok == 1) {  // если в содержимом был найден тег output с id="statlike"
          $m = $matches[2] + 1;  // к числу прибавить 1
          $fr = preg_replace($pattern, '${1}'.$m.'$3', $fr, 1);  // изменить число в содержимом
          rewind($f); // переместить указатель в начало файла
          ftruncate($f, 0); // очистить файл
          fwrite($f, $fr);  // записать в файл содержимое с изменённым числом
        }
      echo $m;  // вывести число, чтобы передать в JS
      flock($f, LOCK_UN);  // разблокировать файл
      }
      fclose($f);  // закрыть файл
    }
  }
?>