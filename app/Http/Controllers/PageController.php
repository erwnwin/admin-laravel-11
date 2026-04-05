<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    /**
     * @var array<string, array{view: string, title: string}>
     */
    private array $pages = [
        'dashboard' => ['view' => 'pages.dashboard', 'title' => 'CODETA Admin Dashboard'],
        'table' => ['view' => 'pages.table', 'title' => 'Data Table | CODETA Admin'],
        'forms' => ['view' => 'pages.forms', 'title' => 'Forms | CODETA Admin'],
        'ui' => ['view' => 'pages.ui', 'title' => 'UI Elements | CODETA Admin'],
        'icons' => ['view' => 'pages.icons', 'title' => 'Icons Gallery | CODETA Admin'],
        'documentation' => ['view' => 'pages.documentation', 'title' => 'Documentation | CODETA Admin'],
        'profile' => ['view' => 'pages.profile', 'title' => 'Profile | CODETA Admin'],
        'settings' => ['view' => 'pages.settings', 'title' => 'Settings | CODETA Admin'],
    ];

    public function dashboard(): View
    {
        return $this->render('dashboard');
    }

    public function table(): View
    {
        return $this->render('table');
    }

    public function forms(): View
    {
        return $this->render('forms');
    }

    public function ui(): View
    {
        return $this->render('ui');
    }

    public function icons(): View
    {
        return $this->render('icons');
    }

    public function documentation(): View
    {
        return $this->render('documentation');
    }

    public function profile(): View
    {
        return $this->render('profile');
    }

    public function settings(): View
    {
        return $this->render('settings');
    }

    private function render(string $pageKey): View
    {
        return view($this->pages[$pageKey]['view'], [
            'pageKey' => $pageKey,
            'title' => $this->pages[$pageKey]['title'],
        ]);
    }
}
