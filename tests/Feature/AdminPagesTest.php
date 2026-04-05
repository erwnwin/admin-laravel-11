<?php

namespace Tests\Feature;

use Tests\TestCase;

class AdminPagesTest extends TestCase
{
    public static function pageProvider(): array
    {
        return [
            ['/', '+24.8%'],
            ['/table', 'Table Lab v2.0'],
            ['/forms', 'Add Data Modal'],
            ['/ui', 'Strategic Tone Palette'],
            ['/icons', 'Icons Gallery'],
            ['/documentation', 'Admin Laravel Documentation'],
            ['/profile', 'Profile'],
            ['/settings', 'Settings'],
            ['/forgot-password', 'Forgot Password'],
            ['/login', 'Welcome Back'],
            ['/register', 'Create Account'],
        ];
    }

    /**
     * @dataProvider pageProvider
     */
    public function test_pages_are_accessible(string $uri, string $expectedText): void
    {
        $response = $this->get($uri);

        $response->assertOk();
        $response->assertSee($expectedText);
    }
}
