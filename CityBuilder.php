<?php
/**
 *
 */
class CityBuilder
{
    function __construct(){}

    /**
     *
     * Random cities
     *
     */
    public function randomCity($value='')
    {
        $city      = [];
        $buildings = rand(3, 20);
        $stages    = rand(3, 20);

        for ($i = 0; $i < $buildings; $i++) {
            $city[] = rand(0, $stages);
        }

        return $city;
    }

    /**
     *
     * Static cities
     *
    */
    public function staticCity()
    {
        $cities = [													// Result
            [1, 2, 1, 5, 2, 4, 1, 0, 1, 2, 6, 4, 5, 2, 3, 4, 1, 2], // 20
            [2,3,5,3,2,3,4,5,4,2,3,6,3,2,3,6,3,2,3,4,6,4,2],        // 12
            [2,3,5,3,2,3,4,5,4,2,3,6,3,2,3,4,6,4],                  // 12
            [10,10,3,2,7,8,6,5,7],                                  // 12
            [8,11,14,4,3],                                          // 0
            [10,8,10,8,10,8,10],                                    // 2
            [1,4,2,4,8,3,2,9],                                      // 11
            [1,4,2,4,7,3,2,8],                                      // 9
            [1,8,2,5,8,9]                                           // 9
        ];

        return $cities[rand(0, count($cities) - 1)];
    }
}
?>