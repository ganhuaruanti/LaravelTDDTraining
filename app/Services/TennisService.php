<?php


namespace App\Services;


class TennisService
{
    /**
     * @param array $input
     * @return array
     */
    public function tennis(array $input): array
    {
        $output = [
            'Alice' => 'love',
            'Bob' => 'love',
        ];
        foreach($input as $key => $value){
                $output[$value] = '15';
        }
        return $output;
    }
}
