<?php
/**
 * get the number which occurs odd times in the source array
 *
 * @param $arrValues array
 * @return int
 */

function odd($var)
{
    return $var & 1;
}

function getOddNumber($srcValues)
{
    $result = array_filter(array_count_values($srcValues), "odd");

//    if (count($result) > 1) {
//        throw new Exception('Must be only one odd value');
//    }

    return array_keys($result);
}


class OddNumberTest// extends \PHPUnit_Framework_TestCase
{
    public function testOddNumber()
    {
        $result = getOddNumber([2, 5, 9, 1, 5, 1, 8, 2, 8]);
        $this->assertEquals(9, $result[0]);

        $result = getOddNumber([2, 3, 4, 3, 1, 4, 5, 1, 4, 2, 5]);
        $this->assertEquals(4, $result[0]);
    }
}
