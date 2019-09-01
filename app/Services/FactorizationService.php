<?php


namespace App\Services;


class FactorizationService
{
    /**
     * @param int $num
     * @return array
     */
    public function factor(int $num): array
    {
        $factors = [];
        for ($factor = 2; $factor <= $num; $factor++) {
            if ($num == 1) {
                break;
            }
            if ($num % $factor == 0) {
                array_push($factors, $factor);
                while ($num % $factor == 0) {
                    $num = $num / $factor;
                }
            }
        }
        return $factors;
    }
}
