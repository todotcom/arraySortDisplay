<?php
$arrTest =  array(
    array(
        'Name' => 'Trixie',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'
        ),
    array(
        'Name' => 'Tinkerbell',
        'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue'
        ),
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Blum',
        'Color' => 'Pink'
        ),
);

$arrSorter =  array('Name' ,'Color','Element','Likes');

//BEGIN. 
//DESCRIPTION: Apply custom sort
//BY: Mohammed Firoz Shaikh
//DATE: 01.10.2014
$arrRes = array();
foreach ($arrTest as $keyTest => $valTest){
$arrRes[$keyTest] = clsArraySort::customSort($valTest, $arrSorter);
}
//END.
?>
<html>
<head>
    <style>
        body{font-family: verdana;font-size: 0.9em;}
        .dvMain{
            width:70%; display:table;
        }   
        .dvtitle{
         font-size: 1.2em;width:70%;   display:table; text-align: center;padding:0.5em;
        }
        .dvth{
             display:table-row; font-weight:bold; text-align:center;            
        }
        .dvth .dvtd{
            width:20%;display: table-cell; border: solid; border-width: thin; vertical-align: middle;padding:1em;
        }
        .dvth .dvtd:nth-child(1){background-color: #05c56d;}
        .dvth .dvtd:nth-child(2){background-color: #0e66e2;}
        .dvth .dvtd:nth-child(3){background-color: #e21c62;}
        .dvth .dvtd:nth-child(4){background-color: #ff8200;}
        
        .dvtr{ display: table-row; }
        .dvtd{border:#000 1px solid;border: solid; border-width: thin; padding:0.7em;
             display: table-cell;text-align:center; 
        }
        .dvtr .dvtd:nth-child(1){background-color: #80ffb9;}
        .dvtr .dvtd:nth-child(2){background-color: #7ca6e2;}
        .dvtr .dvtd:nth-child(3){background-color: #ff99c3;}
        .dvtr .dvtd:nth-child(4){background-color: #ffc487;}
    </style>
</head>
<body>
<div class='dvtitle'><h2></h2>Sort And Display</h2></div>   
<div class="dvMain">
 
    <div class='dvth'>
        <div class='dvtd'>Name</div>
        <div class='dvtd'>Color</div>
        <div class='dvtd'>Element</div>    
        <div class='dvtd'>Likes</div>        
    </div>    
        <?php foreach($arrRes as $keyRes => $valRes) { ?>
    <div class='dvtr'>
        <div class='dvtd'><?php echo $valRes["Name"]; ?></div>        
        <div class='dvtd'><?php echo $valRes["Color"]; ?></div>        
        <div class='dvtd'><?php echo $valRes["Element"]; ?></div>        
        <div class='dvtd'><?php echo $valRes["Likes"]; ?></div>        
        </div>
        <?php } ?>
    
</div>
</body>
</html>
<?php

//BEGIN. Class clsArraySort
//DESCRIPTION: Class to apply custom sort to array
//BY: Mohammed Firoz Shaikh
//DATE: 01.10.2014
class clsArraySort{
    //BEGIN. Function customSort2
    //DESCRIPTION: 
    //BY: Mohammed Firoz Shaikh
    //DATE: 01.10.2014     
    public static function customSort(array $array, array $orderArray) {
        $ordered = array();

        foreach($orderArray as $key) {        
            if(array_key_exists($key,$array)) {            
                $ordered[$key] = $array[$key];
                unset($array[$key]);
            }
        }
        return array_merge($ordered + $array);
    }
    //END. Function customSort

}
//END. class clsArraySort
?>