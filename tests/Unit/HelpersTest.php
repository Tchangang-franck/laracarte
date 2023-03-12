<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Illuminate\Support\Facades\Route;

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
        $this->assertEquals('About | Laracarte List of artisan',page_title('About'));
        $this->assertEquals('Contact | Laracarte List of artisan',page_title('Contact'));
    }

    /**
     * A basic unit test example.
     * @test
     */

     public function set_active_route_should_return_the_active_route():void{
        $this->get(Route('_home-path'));
        $this->assertEquals('active',set_active_route('_home-path'));
        $this->assertEquals('',set_active_route('_about-path'));
        $this->assertEquals('',set_active_route('contact-path'));

        $this->get(Route('_about-path'));
        $this->assertEquals('active',set_active_route('_about-path'));
        $this->assertEquals('',set_active_route('_home-path'));
        $this->assertEquals('',set_active_route('contact-path'));


        $this->get(Route('contact-path'));
        $this->assertEquals('active',set_active_route('contact-path'));
        $this->assertEquals('',set_active_route('_about-path'));
        $this->assertEquals('',set_active_route('_home-path'));


     }


}
