<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lib {

        public function print_r2($var)
        {
                ob_start();
                $str = ob_get_contents();
                ob_end_clean();
                $str = preg_replace("/ /", "&nbsp;", $str);
                echo nl2br("<span style='font-family:Tahoma, 굴림; font-size:9pt;'>$str</span>");
        }
        // 메타태그를 이용한 URL 이동
                // header("location:URL") 을 대체
        public function goto_url($url)
        {
                echo "<script type='text/javascript'> location.replace('$url'); </script>";
                exit;
        }
        // 경고메세지를 경고창으로
        public function alert($msg='', $url='')
        {
                global $g4;

                if (!$msg) $msg = '올바른 방법으로 이용해 주십시오.';

                        //header("Content-Type: text/html; charset=$g4[charset]");
                        echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=$g4[charset]\">";
                        echo "<script type='text/javascript'>alert('$msg');";
                if (!$url)
                        echo "history.go(-1);";
                echo "</script>";
                if ($url)
                        // 4.06.00 : 불여우의 경우 아래의 코드를 제대로 인식하지 못함
                        //echo "<meta http-equiv='refresh' content='0;url=$url'>";
                        goto_url($url);
                exit;
        }

        // 경고메세지 출력후 창을 닫음
        public function alert_close($msg)
        {
                global $g4;
                echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=$g4[charset]\">";
                echo "<script type='text/javascript'> alert('$msg'); window.close(); </script>";
                exit;
        }

        public function calc_date_month($date){
                $bDate = new DateTime(date('Y-m-d',strtotime($date)));
                $nDate = new DateTime(date('Y-m-d'));
                return $bDate->diff($nDate)->m + ($bDate->diff($nDate)->y*12);

        }
}