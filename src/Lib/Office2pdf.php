<?php
/**
 * Created by PhpStorm.
 * User: aoxiaoxi
 * Date: 2018/6/21
 * Time: 16:35
 */

namespace Lib;


class Office2pdf
{

    public function index(){
        echo "welcome office2pdf";
        echo "haha";
        echo "aowu";
    }

    public function office2pdf($filePath,$pdffilePath){
        $shell = "java -jar /opt/jodconverter-2.2.2/lib/jodconverter-cli-2.2.2.jar {$filePath}  {$pdffilePath}";
        passthru($shell);
        ob_clean();
    }

    public function addwatermark($userName,$oldfilepath,$newfilepath){
        $downloadshell = "java -jar -Dfile.encoding=utf-8 /opt/waterMaker/waterMark.jar  -w '$userName'  -o $oldfilepath  -n $newfilepath ";
        passthru($downloadshell);
        ob_clean();
    }
}