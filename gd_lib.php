<?php
$img = imagecreatetruecolor(100, 40);
$black = imagecolorallocate($img, 0x00, 0x00, 0x00);
$green = imagecolorallocate($img, 0x00, 0xFF, 0x00);
$white = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);
imagefill($img,0,0,$white);

$code = 'xdf';
for($i = 0; $i < 4; $i++) {
    $code .= rand(0, 9);
}
imagestring($img, 5, 10, 10, $code, $black);

for($i=0;$i<500;$i++) {
  imagesetpixel($img, rand(0, 100) , rand(0, 100) , $black); 
  imagesetpixel($img, rand(0, 100) , rand(0, 100) , $green);
}

header("content-type: image/png");
imagepng($img);
imagedestroy($img);
/*
//???????????????????
$url = 'http://www.iyi8.com/uploadfile/2014/0521/20140521105216901.jpg';
$content = file_get_contents($url);
$filename = 'tmp.jpg';
file_put_contents($filename, $content);
$url = 'http://wiki.ubuntu.org.cn/images/3/3b/Qref_Edubuntu_Logo.png';
file_put_contents('logo.png', file_get_contents($url));
//????????
$im = imagecreatefromjpeg($filename);
$logo = imagecreatefrompng('logo.png');
$size = getimagesize('logo.png');
imagecopy($im, $logo, 15, 15, 0, 0, $size[0], $size[1]); 
 
header("content-type: image/jpeg");
imagejpeg($im);

异常处理类
PHP具有很多异常处理类，其中Exception是所有异常处理的基类。
Exception具有几个基本属性与方法，其中包括了：
message 异常消息内容
code 异常代码
file 抛出异常的文件名
line 抛出异常在该文件的行数
其中常用的方法有：
getTrace 获取异常追踪信息
getTraceAsString 获取异常追踪信息的字符串
getMessage 获取出错信息
如果必要的话，可以通过继承Exception类来建立自定义的异常处理类。
try {
    throw new Exception('wrong');
} catch(Exception $ex) {
    $msg = 'Error:'.$ex->getMessage()."\n";
    $msg.= $ex->getTraceAsString()."\n";
    $msg.= '异常行号：'.$ex->getLine()."\n";
    $msg.= '所在文件：'.$ex->getFile()."\n";
    //将异常信息记录到日志中
    file_put_contents('error.log', $msg);
}
*/

?>
