<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnviTest extends TestCase
{
    
    public function testGetEnv()
    {
        $youtube = env('YOUTUBE');
        self::assertEquals('rizalsyarief', $youtube);
    }
    public function testGetEnvDefault()
    {
        $penulis = env('PENULIS','rizalsyarief');
        self::assertEquals('rizalsyarief', $penulis);
    }
}
