## office2pdf 
## prepare
1.install openoffice service and java environment  
2.composer require aoxiaoxi/office2pdf

## use
```
use Lib\Office2pdf;

public function testComposer(){
        $office = new Office2pdf();
        $office->index();
}

//office to pdf
@param $filePath,
@param $pdffilePath
$office->office2pdf($filePath,$pdffilePath)


//pdf addwatermark
@param $waterName,
@param $oldfilepath
@param $newfilepath
$office->addwatermark($waterName,$oldfilepath,$newfilepath)
```

