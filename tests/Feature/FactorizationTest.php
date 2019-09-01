<?php


namespace Tests\Feature;


use Tests\TestCase;

class FactorizationTest extends TestCase
{
    /**
     * @dataProvider factorData
     * @param int $num
     * @param array $expected
     */
    public function testFactor(int $num, array $expected)
    {
        $this->markTestSkipped();
        $response = $this->get('api/factor/' . $num);
        $response->assertStatus(200)
            ->assertExactJson($expected);
    }

    /**
     * @return array
     */
    public function factorData()
    {
        return [
            [
                2,
                [
                    "factors" => [2],
                ]
            ],
            [
                16,
                [
                    "factors" => [16],
                ]
            ],
            [
                1023,
                [
                    "factors" => [1, 2, 4, 8, 16, 32, 64, 128, 256, 512],
                ]
            ],
        ];
    }
}
