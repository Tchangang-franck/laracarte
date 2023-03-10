<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class HelpersTest extends TestCase
{
    /**
     * A basic unit test example.
     * @test
     */
    public function page_title_should_return_the_base_title_if_title_is_empty():void
    {
        $this->assertEquals('Laracarte List of artisan',page_title(''));
    }

    /**
     * A basic unit test example.
     * @test
     */
    public function page_title_should_return_the_correct_title_if_title_is_provided():void
    {
        
        $this->assertEquals('home | Laracarte List of artisan',page_title('home'));
    }
}
