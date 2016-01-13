<?php

function create_item($arr)
{
   //  属性数组
$attribute_array = array(
    'title' => array(
    'size' => 1
    )
);
$xml = new XMLWriter();
$xml->openUri("php://output");
//  输出方式，也可以设置为某个xml文件地址，直接输出成文件
$xml->setIndentString('  ');
$xml->setIndent(true);
$xml->startDocument('1.0', 'utf-8');
//  开始创建文件
//  根结点
$xml->startElement('article');
foreach ($arr as $data) {
    $xml->startElement('item');
    if (is_array($data)) {
        foreach ($data as $key => $row) {
          $xml->startElement($key);
          if (isset($attribute_array[$key]) && is_array($attribute_array[$key]))
          {
              foreach ($attribute_array[$key] as $akey => $aval) {
              //  设置属性值
                    $xml->writeAttribute($akey, $aval);
                }
            }
            $xml->text($row);   //  设置内容
            $xml->endElement(); // $key
        }
    }
    $xml->endElement(); //  item
}
$xml->endElement(); //  article
$xml->endDocument();
$xml->flush();

}
 




?>