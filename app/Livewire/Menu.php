<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
#[Title('Menu — Bad Rabbit')]
class Menu extends Component
{
    /**
     * Libations. Names + specs are the confirmed copy from the brand
     * handoff. Prices were not included in that handoff, so they render
     * as placeholders rather than invented numbers. Images cycle through
     * the four available cocktail renderings — they're representative,
     * not a confirmed 1:1 pairing (see the note on the page itself and
     * the Sept 2026 memo referenced in Build Notes).
     */
    public array $cocktails = [
        ['name' => 'Bad Decisions', 'spec' => 'Bourbon · Black Cherry · Amaro · Lemon · Cinnamon · Smoked Wood', 'img' => 'BAD RABBIT C_M 1.png'],
        ['name' => 'Velvet Rope', 'spec' => 'Vodka · Passion Fruit · Vanilla · Lime · Prosecco Float', 'img' => 'BAD RABBIT C_M 2.png'],
        ['name' => 'Down the Rabbit Hole', 'spec' => 'Gin · Cucumber · Elderflower · Lemon · Absinthe Rinse', 'img' => 'BAD RABBIT C_M 3.png'],
        ['name' => 'Smoke & Mirrors', 'spec' => 'Mezcal · Aperol · Blood Orange · Agave · Smoked Citrus', 'img' => 'BAD RABBIT C_M 15 (mocktail_).png'],
        ['name' => 'Good Trouble', 'spec' => 'Rye Whiskey · Pineapple · Cinnamon · Angostura · Tiki Bitters', 'img' => 'BAD RABBIT C_M 5.png'],
        ['name' => "One More Won't Hurt", 'spec' => 'Buffalo Trace · Apple · Cinnamon · Lemon · Clarified Milk Punch · Flamed Apple', 'img' => 'BAD RABBIT C_M 13.png'],
        ['name' => 'Best Kept Secret', 'spec' => 'Tequila · Blackberry · Jalapeño · Lime · Black Lava Salt', 'img' => 'BAD RABBIT C_M 7.png'],
        ['name' => "We're All Mad Here", 'spec' => 'Gin · Blue Curaçao · Coconut · Pineapple · Lemon · Color Change · Buzz Button', 'img' => 'BAD RABBIT C_M 8.png'],
        ['name' => 'The Password', 'spec' => 'Reposado Tequila · Pear · Amontillado Sherry · Burnt Honey · Lemon · Sparkling Wine', 'img' => 'BAD RABBIT C_M 12.png'],

        ['name' => 'After Midnight', 'spec' => '', 'img' => 'BAD RABBIT C_M 12.png'],

        ['name' => 'Scratch This One', 'spec' => '', 'img' => 'BAD RABBIT C_M 4.png'],


        // ['name' => '', 'spec' => '', 'img' => 'BAD RABBIT C_M 10 (mocktail).png'],

        // ['name' => '', 'spec' => '', 'img' => 'BAD RABBIT C_M 11 (mocktail).png'],

        // ['name' => '', 'spec' => '', 'img' => 'BAD RABBIT C_M 12.png'],

        // ['name' => '', 'spec' => '', 'img' => 'BAD RABBIT C_M 13.png'],

        // ['name' => '', 'spec' => '', 'img' => 'BAD RABBIT C_M 14 (mocktail).png'],

        // ['name' => '', 'spec' => '', 'img' => 'BAD RABBIT C_M 15 (mocktail_).png'],
    ];

    /**
     * Provisions. "Bad Rabbit Spiced Nuts" removed per the Sept 2026
     * handoff note. Images cycle through the three available culinary
     * renderings — representative, not a confirmed pairing.
     */
    public array $provisions = [
        ['name' => 'Crispy Brussels Sprouts', 'spec' => 'Dijon Aioli · Sliced Almonds · Cotija', 'img' => 'culinary-3.jpg'],
        ['name' => 'Crab Cake Street Poppers', 'spec' => 'Jumbo Lump Crab · Corn · Red Pepper · Cajun Aioli', 'img' => 'culinary-1.jpg'],
        ['name' => 'Mac N Cheese Donuts', 'spec' => 'House-Made · Smoked Cheddar · Bacon Jam · Chives', 'img' => 'culinary-2.jpeg'],
        ['name' => 'Crab Cake Street Poppers', 'spec' => 'Lump Crab Cake Poppers · Chipotle-Lime Crema · Cotija · Cilantro · Chili Crisps', 'img' => 'culinary-4.png'],
        ['name' => 'Crab & Avocado', 'spec' => 'Jumbo Lump Crab · Avocado · Citrus · Wontons · Everything Spice', 'img' => 'culinary-6.png'],
        ['name' => 'Wagyu Filet', 'spec' => 'American Wagyu* (4oz) · Smoked Chili- Honey Aioli · Chili Crisp · Pickled Pepper Relish', 'img' => 'culinary-5.jpg'],

        ['name' => 'Rabbit Bait', 'spec' => 'Dark Chocolate Carrot Cake Truffle · Bourbon Caramel · Brown Butter Pecan · Cream Cheese · Candied Carrot · Sea Salt', 'img' => 'BAD RABBIT - RABBIT BAIT.png'],
    ];

    /**
     * Zero Proof — the four confirmed names from the handoff. Images
     * cycle through the two available mocktail renderings.
     */
    public array $zeroProof = [
        ['name' => 'Clean Getaway', 'spec' => 'Passion Fruit · Lime · Ginger · Sparkling Mineral Water', 'img' => 'BAD RABBIT C_M 9 (mocktail).png'],
        ['name' => 'The Lookout', 'spec' => 'Blackberry · Sage · Lemon · Black Tea · Honey · Sparkling Water', 'img' => 'BAD RABBIT C_M 14 (mocktail).png'],
        ['name' => 'Undercover', 'spec' => 'Pineapple · Coconut · Lime · Cinnamon · Angostura-Style Zero-Proof Bitters', 'img' => 'BAD RABBIT C_M 10 (mocktail).png'],
        ['name' => 'Off the Record', 'spec' => 'Pear · Burnt Honey · Lemon · Rosemary · Sparkling Wine Alternative', 'img' => 'BAD RABBIT C_M 11 (mocktail).png'],
    ];

    /** Bourbons & Whiskeys, grouped as on the source sheet. */
    public array $spirits = [
        'Bourbon' => [
            'Buffalo Trace',
            'Eagle Rare 10 Yr',
            'Weller Special Reserve',
            'Weller Antique 107',
            "Blanton's",
            'E.H. Taylor Small Batch',
            'E.H. Taylor Single Barrel',
            'Stagg',
            'Woodford Reserve',
            'Four Roses Single Barrel',
            'Elijah Craig Small Batch',
            "Maker's Mark",
            "Maker's Mark 46",
            'Knob Creek 9 Yr',
            'Knob Creek 18 Yr',
            "Booker's",
            'Basil Hayden',
            'Basil Hayden Dark Rye',
            "Jefferson's Ocean",
            "Angel's Envy",
            'Widow Jane 10 Yr',
            "Russell's Reserve 10 Yr",
            "Russell's Reserve Single Barrel",
            "Michter's Small Batch",
            "Michter's Single Barrel",
            'Pappy Van Winkle',
            'George T. Stagg',
        ],
        'Rye' => [
            'Sazerac Rye',
            'Bulleit Rye',
            'High West Double Rye',
            'WhistlePig 10 Yr',
            'WhistlePig 15 Yr',
            "Angel's Envy Rye",
            "Michter's Rye",
            'Knob Creek Rye',
            'Templeton Rye',
            'Rittenhouse',
        ],
        'American Whiskey' => [
            "Jack Daniel's",
            "Jack Daniel's Single Barrel",
            "Jack Daniel's Bonded",
            'Gentleman Jack',
            'Uncle Nearest 1856',
            'Uncle Nearest Rye',
            'Balcones Texas Single Malt',
            'Westland American Single Malt',
            'FEW American Whiskey',
        ],
        'Scotch' => [
            'Macallan 12 Yr',
            'Macallan 18 Yr',
            'Lagavulin 16 Yr',
            'Oban 14 Yr',
            'Glenfiddich 15 Yr',
            'Johnnie Walker Black',
            'Johnnie Walker Blue',
            'The Glenlivet 12 Yr',
            'Talisker 10 Yr',
            'Auchentoshan 12 Yr',
        ],
    ];

    public function render()
    {
        return view('livewire.menu');
    }
}
