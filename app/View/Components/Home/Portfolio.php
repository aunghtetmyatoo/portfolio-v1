<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'JQuery', 'Bootstrap'],
                'title' => 'Housing For All Property',
                'image' => url('/img/project1.png'),
                'github' => 'https://housingforallproperty.com',
            ],
            [
                'category' => ['Laravel', 'Backpack'],
                'title' => 'MoeHein Gabar Pharmacy',
                'image' => url('/img/project2.png'),
                'github' => 'https://moeheingabar.com/admin',
            ],
            [
                'category' => ['Laravel', 'Backpack'],
                'title' => 'DongFang Pay',
                'image' => url('/img/project3.png'),
                'github' => 'https://dfpaymm.com',
            ],
            [
                'category' => ['Laravel', 'LiveWire', 'Tailwind'],
                'title' => 'Movies App',
                'image' => url('/img/project4.png'),
                'github' => 'https://movies-ahmo.vercel.app',
            ],
            [
                'category' => ['React'],
                'title' => 'Covid-19 Tracker',
                'image' => url('/img/project5.png'),
                'github' => 'https://covid-19-tracker-ahmo.vercel.app',
            ],
            [
                'category' => ['Nextjs', 'React'],
                'title' => 'Coffee Stores App',
                'image' => url('/img/project6.png'),
                'github' =>  'https://coffee-stores-six.vercel.app',
            ],
            [
                'category' => ['Nextjs', 'React', 'TypeScript'],
                'title' => 'Photo Gallery App',
                'image' => url('/img/project7.png'),
                'github' =>  'https://photo-ahmo.vercel.app/gallery',
            ],
            [
                'category' => ['JavaScript'],
                'title' => 'Road To Japan',
                'image' => url('/img/project8.png'),
                'github' =>  'https://road-to-japan.vercel.app',
            ],
            [
                'category' => ['Nextjs', 'Tailwind'],
                'title' => 'LiverPool FC',
                'image' => url('/img/project9.png'),
                'github' =>  'https://lfc-ynwa.vercel.app',
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
