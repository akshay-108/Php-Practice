<?php
// 23_convert_mulidimensional_array_to_xml

// create array
$array = array(
    'company'=>'Ambab',
    'employee'=>array(
        '0'=>array(
            'Name'=>'akshay',
            'age'=>'25'
        ),
        '1'=>array(
            'Name'=>'harshada',
            'age'=>'23'
        ),
        '2'=>array(
            'Name'=>'ashwin',
            'age'=>'26'
        ),
        '3'=>array(
            'Name'=>'siddhesh',
            'age'=>'22'
        ),
        '4'=>array(
            'Name'=>'sandesh',
            'age'=>'24'
        )
    )
);


// create function to generate array to xml
function generateXML($data)
{
    $title=$data['company'];
    $rowCount=count($data['employee']);

    // create new xml document
    $xmlDoc = new DOMDocument();

    $root = $xmlDoc->appendChild($xmlDoc->createElement('ambab'));

    $root = $xmlDoc->appendChild($xmlDoc->createElement('title',$title));

    $root = $xmlDoc->appendChild($xmlDoc->createElement('totalRows',$rowCount));

    $tabUsers = $root->appendChild($xmlDoc->createElement('rpws'));

    foreach($data['employee'] as $user)
    {
        if(!empty($user))
        {
            $tabUser=$tabUsers->appendChild($xmlDoc->createElement('employee'));

            foreach ($user as $key => $value) {
                $tabUser->appendChild($xmlDoc->createElement($key,$value));
            }
        }
    }

    header("Content-Type: text/plain");

    // make the output
    $xmlDoc->formatOutput=true;

    // save xml file
    $fileName=str_replace(' ','_',$title).'.xml';
    $xmlDoc->save($fileName);

    // return xml file name
    return $fileName;
}

generateXML($array);

?>