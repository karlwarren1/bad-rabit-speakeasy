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
        ['name' => 'Bad Decisions', 'spec' => '792 Small Batch · Amaro Averna · Black Cherry Syrup · Cacao · Orange', 'img' => 'BAD RABBIT C_M 1.png'],
        ['name' => 'Velvet Rope', 'spec' => 'Brown-Butter-Washed Bourbon · Fig Syrup · Black Walnut Liqueur · Angostura', 'img' => 'BAD RABBIT C_M 2.png'],
        ['name' => 'Down the Rabbit Hole', 'spec' => 'Rabbit Hole · Oloroso Sherry · Pure Maple Syrup Fresh Espresso · Black Walnut · Angostura', 'img' => 'BAD RABBIT C_M 3.png'],
        ['name' => 'Smoke & Mirrors', 'spec' => 'Mezcal · Tequila Blanco · Cynar · Lime · Raspberry · Egg White', 'img' => 'BAD RABBIT C_M 15 (mocktail_).png'],
        ['name' => 'Good Trouble', 'spec' => 'Rabbit Hole Heigold High Rye · Fresh Lemon Juice · Rosemary & Ginger Syrups · Blackberry', 'img' => 'BAD RABBIT C_M 5.png'],
        ['name' => "One More Won't Hurt", 'spec' => 'Small Batch Bourbon · Apple Cider · Cinnamon Syrup · Fresh Lemon Juice', 'img' => 'BAD RABBIT C_M 13.png'],
        ['name' => 'Best Kept Secret', 'spec' => 'Reposado · Fresh Blood Orange Juice · Lime · Agave · Ancho Chile Liqueur', 'img' => 'BAD RABBIT C_M 7.png'],
        ['name' => "We're All Mad Here", 'spec' => 'Empress Gin · Lychee Liqueur · St. Germain · Ginger Syrup · Yuzu · Acid Pour', 'img' => 'BAD RABBIT C_M 8.png'],
        ['name' => 'The Password', 'spec' => 'Reposado, Pear Liqueur · Honey Simple · Fresh Lemon · Angostura · Prosecco · Candied Pear', 'img' => 'BAD RABBIT C_M 12.png'],

        ['name' => 'After Midnight', 'spec' => 'Wheatley Vodka · Fresh Espresso · Cold Brew Liqueur · Agave · Saline', 'img' => 'BAD RABBIT C_M 6.png'],
    ];

    /**
     * Provisions. "Bad Rabbit Spiced Nuts" removed per the Sept 2026
     * handoff note. Images cycle through the three available culinary
     * renderings — representative, not a confirmed pairing.
     */
    public array $provisions = [
        ['name' => 'BIG DILL ENERGY DEVILED EGGS', 'spec' => 'Creamy Deviled Eggs · Dill Pickle · Pickle Brine · Sweet & Spicy Bacon · Paprika · Dill Pickle Chip', 'img' => 'Bad Rabbit Rabbit.png'],

        ['name' => 'Crab Cake Street Poppers', 'spec' => 'Lump Crab Cake Poppers · Chipotle-Lime Crema · Cotija · Cilantro · Chili Crisps', 'img' => 'culinary-4.png'],

        // ['name' => 'Crab Cake Street Poppers', 'spec' => 'Jumbo Lump Crab · Corn · Red Pepper · Cajun Aioli', 'img' => 'culinary-1.jpg'],

        ['name' => 'Mac N Cheese Donuts', 'spec' => 'Sweet & Spicy Bacon · Habanero Maple Syrup', 'img' => 'culinary-2.jpeg'],

        ['name' => 'Crispy Brussels Sprouts', 'spec' => 'Dijon · Aioli · Sliced Almonds · Cotija', 'img' => 'culinary-3.jpg'],

        ['name' => 'Crab & Avocado', 'spec' => 'Chilled Jumbo Lump Crab · Avocado · Lime · Serrano · Chili Crisp · Sesame Wonton Crisp · Crispy Shallots', 'img' => 'culinary-6.png'],

        ['name' => 'Wagyu After Dark', 'spec' => 'American Wagyu · Smoked Chili-Honey Aioli · Soy-Lime Glaze · Pickled Pepper Relish · Chili Crisp · Scallions ', 'img' => 'culinary-5.jpg'],

        ['name' => 'Rabbit Bait', 'spec' => 'Dark Chocolate Carrot Cake Truffle · Bourbon Caramel · Brown Butter Pecan Crunch · Cream Cheese Cream · Candied Carrot · Edible Gold · Flaky Sea Salt ', 'img' => 'BAD RABBIT - RABBIT BAIT.png'],
    ];

    /**
     * Zero Proof — the four confirmed names from the handoff. Images
     * cycle through the two available mocktail renderings.
     */
    public array $zeroProof = [
        ['name' => 'Clean Getaway', 'spec' => 'Passion Fruit, Lime · Ginger Syrup · Simple · Sparkling Mineral Water · Mint Sprig', 'img' => 'BAD RABBIT C_M 9 (mocktail).png'],
        ['name' => 'The Lookout', 'spec' => 'Fresh Blackberry · Lemon · Rosemary · Ginger Cranberry · Egg White · Saline · Mint', 'img' => 'BAD RABBIT C_M 14 (mocktail).png'],
        ['name' => 'Undercover', 'spec' => 'Apple Cider · Fresh Lemon Juice · Ginger Syrup · Cinnamon · Sparkling Mineral Water', 'img' => 'BAD RABBIT C_M 10 (mocktail).png'],
        ['name' => 'Off the Record', 'spec' => 'Fresh Strawberry · Fresh Lime Juice · Hibiscus · Agave · Tajín', 'img' => 'BAD RABBIT C_M 11 (mocktail).png'],
    ];

    /** Bourbons & Whiskeys, grouped as on the source sheet. */
    public array $spirits = [
        'Bourbon' => [
            '1792 Small Batch',
            'Angel’s Envy',
            'Angel’s Envy Bottled in Bond',
            'Angel’s Envy Triple Oak',
            'Baker’s 7 Year',
            'Bardstown Bottled in Bond',
            'Bardstown Discovery Series',
            'Basil Hayden',
            'Basil Hayden 10 Year',
            'Ben Holladay Rickhouse',
            'Bib & Tucker 6 Year',
            'Blade & Bow',
            'Blade & Bow Solera Reserve 12 Yr.',
            'Boone County Founders America 250',
            'Breckenridge',
            'Brothers of the Leaf',
            'Buzzard’s Roost Double Oak',
            'Calumet Small Batch',
            'Camp Dennison Double Oaked',
            'Chicken Cock Kentucky Straight',
            'Cincinnati Distilling',
            'Cleveland Underground Black Cherry',
            'Cooper’s Craft Barrel Reserve',
            'Coppercraft Blend',
            'Elijah Craig Small Batch',
            'Evan Williams Black Label',
            'Ezra Brooks 99',
            'Field of Dreams All-Star',
            'Four Roses Single Barrel',
            'Four Roses Small Batch',
            'Frey Ranch Farm Strength Uncut',
            'Garrison Brothers Small Batch',
            'George Remus',
            'Heaven Hill Bottled in Bond',
            'High Bank Whiskey War',
            'High Bank Whiskey War Barrel Proof',
            'Highline Spirits',
            'Horse Soldier',
            'Jefferson’s',
            'Jefferson’s Ocean',
            'Jefferson’s Reserve',
            'Jim Beam White Label',
            'Joseph Magnus',
            'Kentucky Owl Confiscated',

            'Knob Creek',
            'Knob Creek Single Barrel',
        ],
        'Bourbon Con.' => [
            'Larceny',
            'Lux Row Small Batch',

            'Maker’s Mark',
            'Maker’s Mark 46',
            'Maker’s Mark Cincinnati Reds Label ‘26',
            'Michter’s Bourbon',
            'Minden Mill Estate',
            'Name Brandt Bastard',
            'New Riff',
            'New Riff Single Barrel',
            'Noah’s Mill',
            'Old Elk 10 Year',
            'Old Forester 1870',
            'Old Forester 1920',
            'Old Forester 86',
            'Old Grand Dad 114',
            'Old Man Winter',
            'Peerless Double Oak',
            'Peg Leg Porker',
            'Penelope 7 Year',
            'Pinhook',
            'Rabbit Hole Cavehill',
            'Rabbit Hole Dareringer',
            'Redemption',
            'Russell’s Reserve 10 Year',
            'Sam Houston Small Batch Reserve',
            'Smooth Ambler Contradiction',
            'Still Austin Cask Strength',
            'Tincup',
            'Town Branch',
            'True Story Moscatel Casks',
            'Von Payne Black',
            'Watershed',
            'Western Reserve 10 Year 24',
            'WhistlePig',
            'WhistlePig Home Field Hog Batch #3',
            'Widow Jane 10 Year',
            'Widow Jane Baby Jane',
            'Wild Turkey 101',
            'Wild Turkey Rare Breed',
            'Wilderness Trail Bottled in Bond',
            'Willett Pot Still Reserve',
            'Woodford Double Oaked',
            'Woodford Reserve',
            'Yellowstone Select',
        ],
        'Rye' => [
            'Angel’s Envy',
            'Jim Beam',
            'Knob Creek',
            'Michter’s',
            'Minor Case',
            'New Riff',
            'Rabbit Hole Boxergrail',
            'Redemption',
            'Rittenhouse',
            'WhistlePig 10 Year',
            'Wild Turkey 101',
            'Woodford Reserve',
        ],
        'Scotch' => [
            'Ardbeg 10',
            'Balvenie 14 Caribbean Cask',
            'Chivas 18',
            'Dalmore 12',
            'Dewar’s 12',
            'Glenfiddich 12',
            'Glenlivet 12',
            'Glenmorangie Quinta Ruban 14',
            'Highland Park',
            'Johnnie Walker 18',
            'Johnnie Walker Black',
            'Johnnie Walker Blue',
            'Johnnie Walker Gold',
            'Johnnie Walker Red',
            'Lagavulin 16',
            'Laphroaig 10',
            'Macallan 12 Sherry Oak',
            'Macallan Rare Cask',
            'Monkey Shoulder',
            'Oban 14',
        ],

        'IRISH WHISKEY' => [
            'Green Spot',
            'Jameson',
            'Redbreast 12',
            'Redbreast 12 Cask',
            'Teeling Small Batch 11',
            'Tullamore Dew 8',
            'Writer’s Tears Copper Pot',
        ],
        'American Whiskey' => [
            'Michter’s Whiskey',
            'Smooth Ambler Old Scout',
            'Traveler Whiskey',
        ],
        'CANADIAN WHISKEY' => [
            'Crown Royal',
            'Crown Royal Regal Apple',
        ],
        'JAPANESE WHISKY' => [
            'Suntory Toki ',
        ],

        'DRAFT BEER' => [
            'Modelo Especial',
            'Bad Rabbit Lime Lager',
            'Rhinegeist Truth',
            'Modelo Negra',
        ],
        'CANNED BEER' => [
            'Ask the team about our rotating selection',
        ],
    ];

    public array $bourbonFlights = [
        ['name' => 'THE KENTUCKY THREE', 'spec' => 'New Riff KY Straight · Russell’s Reserve 10 Yr. · Rowan’s Creek', 'img' => 'Bad Rabbit Rabbit.png'],
        ['name' => 'THE RABBIT’S RESERVE', 'spec' => 'Rabbit Hole Dareringer · Rabbit Hole Cavehill · Rabbit Hole Heigold', 'img' => 'Bad Rabbit Rabbit.png'],
        ['name' => 'RYE NOT', 'spec' => 'Rittenhouse · Sazerac · Michter’s', 'img' => 'Bad Rabbit Rabbit.png'],
    ];

    public function render()
    {
        return view('livewire.menu');
    }
}
