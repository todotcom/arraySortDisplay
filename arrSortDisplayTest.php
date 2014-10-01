<?php
/* 
 DESCRIPTION: Test class to test arrSortDisplay class.
 DATE: 01.09.2014
 BY: Mohammed firoz shaikh 
 */

require_once "PHPUnit/Autoload.php";
require_once "arrSortDisplay.php";

class clsArrSortDisplayTest extends PHPUnit_Framework_TestCase
{
    protected $objArraySort;
    
    protected $arrSorter = array('Name' ,'Color','Element','Likes');
    protected  $arrSource =  array(    
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
        )
    );
    
    
    public function testKeysCustomSort() {
        $expected = 2;
        $actual = $this->objArraySort->customSort($this->arrSource,$this->arrSorter);
        foreach( $arrSorter as $keySorter => $valSorter){
            foreach( $actual as $keyActual => $valActual){
                $this->assertArrayHasKey($valSorter,$valActual);
            }
        }
    }
    
    public function testCountCustomSort() {        
        $actual = $this->objArraySort->customSort($this->arrSource,$this->arrSorter);
        $this->assertCount(0, $actual);        
    }
    
    public function testEmptyCustomSort() {        
        $actual = $this->objArraySort->customSort($this->arrSource,$this->arrSorter);         
        $this->assertEmpty($actual);
        
    }
    
    protected function setUp() {
        $this->$objArraySort = new clsArraySort();
        //$this->objCalc->add(1,1);
    }
    
    protected function tearDown() {
        unset($this->$objArraySort);
    }        
}
?>