<?php


namespace Tests\Feature;


use Tests\TestCase;

class TennisTest extends TestCase
{
    /**
     * @dataProvider tennisData
     * @param array $balls
     * @param array $expected
     */
    public function testTennis(array $balls, array $expected)
    {
        $this->markTestSkipped();
        $response = $this->post('api/tennis/', $balls);
        $response->assertStatus(200)
            ->assertExactJson($expected);
    }

    public function tennisData()
    {
        return [
            [[], ['Alice' => 'love', 'Bob' => 'love']],
            [['Alice'], ['Alice' => '15', 'Bob' => 'love']],
            [['Bob'], ['Alice' => 'love', 'Bob' => '15']],
        ];
    }
}
