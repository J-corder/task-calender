<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\Sample\IndexController;

class SampleTest extends TestCase
{
    /**
     * @dataProvider sampleDataProvider
     */
    public function test_sample(int $id, string $equ)
    {
        $sampleController = new IndexController;
        $req = $sampleController->__invoke($id);
        $this->assertSame($req, $equ);
    }

    public function sampleDataProvider()
    {
        return [
            'テスト1（True）' => [5, "Hello 5"],
            'テスト2（True）' => [1, "Hello 1"],
            // 'テスト3（False）' => [2, "Hello"]
        ];
    }
}
