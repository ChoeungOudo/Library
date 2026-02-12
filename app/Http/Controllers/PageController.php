<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function story($id)
    {
        $stories = [

            1 => [
                'title' => 'The Book of the National Parks',
                'image' => 'images/pic01.jpg',
                'content' => <<<TEXT
"The Book of the National Parks" by Robert Sterling Yard explores the beauty,
geology, and educational value of the United States national park system.

The author encourages readers to look beyond surface beauty and understand
the deep geological history that shaped these landscapes over millions of years.

National parks are presented as "museums of nature" that preserve America’s
natural heritage for future generations.
TEXT,
                'full_link' => 'https://www.gutenberg.org/cache/epub/27513/pg27513-images.html'
            ],

            2 => [
                'title' => 'Modern Ships of War',
                'image' => 'images/pic02.jpg',
                'content' => <<<TEXT
"Modern Ships of War" by Sir Edward J. Reed and Edward Simpson examines the
evolution of naval engineering in the late 19th century.

The book discusses the transformation from wooden ships to armored metal
vessels, focusing on artillery, ship classification, and naval strategy.

It highlights the urgency of strengthening naval power to meet modern
military challenges faced by major nations.
TEXT,
                'full_link' => 'https://www.gutenberg.org/cache/epub/73887/pg73887-images.html'
            ],

            3 => [
                'title' => 'The Natural History of Pliny, Volume 2',
                'image' => 'images/pic03.jpg',
                'content' => <<<TEXT
Written in AD 77, this volume by Pliny the Elder is part of a vast encyclopedia
covering astronomy, geography, zoology, medicine, mining, and art.

Pliny presents nature as a divine force serving humanity, cataloging plants,
animals, minerals, and even mythical creatures.

The work reflects ancient Roman knowledge and curiosity about the natural world.
TEXT,
                'full_link' => 'https://www.gutenberg.org/cache/epub/60230/pg60230-images.html'
            ],

            4 => [
                'title' => "John Deere's Steel Plow",
                'image' => 'images/pic04.jpg',
                'content' => <<<TEXT
"John Deere's Steel Plow" by Edward C. Kendall explores one of the most important
agricultural inventions of the 19th century.

The book explains how Deere’s polished steel plow solved the problem of sticky
prairie soil, greatly improving farming efficiency.

It presents historical context, technical details, and the lasting impact of
this innovation on American agriculture.
TEXT,
                'full_link' => 'https://www.gutenberg.org/cache/epub/34562/pg34562-images.html'
            ],
10 => [
    'title' => 'Soils and Men',
    'author' => 'Hugh Hammond Bennett',
    'image' => 'images/pic10.jpg',
    'content' => <<<TEXT
"Soils and Men" examines the relationship between soil conservation
and human civilization.

The book explains how soil erosion and poor land management have
contributed to the collapse of past societies.

It promotes sustainable farming as essential to humanity’s future.
TEXT,
    'full_link' => 'https://www.gutenberg.org/ebooks/38345'
],

11 => [
    'title' => 'Manures and the Principles of Manuring',
    'author' => 'Charles Morton Aikman',
    'image' => 'images/pic11.jpg',
    'content' => <<<TEXT
This agricultural guide explains the chemistry and effectiveness of
natural and artificial fertilizers.

It covers animal manures, crop rotation, and soil nutrients.

The book helped shape modern agricultural science.
TEXT,
    'full_link' => 'https://www.gutenberg.org/ebooks/28122'
],

12 => [
    'title' => 'The Soil: Its Nature, Relations, and Fundamental Principles',
    'author' => 'Milton Whitney',
    'image' => 'images/pic12.jpg',
    'content' => <<<TEXT
This book explores the physical and chemical nature of soil.

It explains soil formation, water retention, and plant nutrition.

An early scientific approach to soil management.
TEXT,
    'full_link' => 'https://www.gutenberg.org/ebooks/45144'
],

13 => [
    'title' => 'Elements of Agriculture',
    'author' => 'George E. Morrow',
    'image' => 'images/pic13.jpg',
    'content' => <<<TEXT
An educational text covering plant growth, soil science,
and farm management.

Written for students and practical farmers alike.

It emphasizes scientific methods in agriculture.
TEXT,
    'full_link' => 'https://www.gutenberg.org/ebooks/44702'
],

14 => [
    'title' => 'Farm Drainage',
    'author' => 'Henry Flagg French',
    'image' => 'images/pic14.jpg',
    'content' => <<<TEXT
This book explains how proper drainage improves soil productivity.

It covers drainage systems, tools, and land improvement techniques.

A foundational text in agricultural engineering.
TEXT,
    'full_link' => 'https://www.gutenberg.org/ebooks/23457'
],

15 => [
    'title' => 'Rural Hygiene',
    'author' => 'Henry N. Ogden',
    'image' => 'images/pic15.jpg',
    'content' => <<<TEXT
A study of sanitation, water supply, and health in rural communities.

The book links environmental conditions with human well-being.

Early public health science applied to agriculture.
TEXT,
    'full_link' => 'https://www.gutenberg.org/ebooks/29506'
],

16 => [
    'title' => 'The Farmer’s Business Handbook',
    'author' => 'Isaac Phillips Roberts',
    'image' => 'images/pic16.jpg',
    'content' => <<<TEXT
This guide helps farmers manage finances, labor, and productivity.

It combines economics with practical farm operations.

A bridge between agriculture and business management.
TEXT,
    'full_link' => 'https://www.gutenberg.org/ebooks/37937'
],

17 => [
    'title' => 'Agriculture for Beginners',
    'author' => 'Charles William Burkett',
    'image' => 'images/pic17.jpg',
    'content' => <<<TEXT
An introductory book explaining soil, crops, and livestock.

Written in simple language for new farmers and students.

Promotes scientific thinking in farming.
TEXT,
    'full_link' => 'https://www.gutenberg.org/ebooks/37570'
],

18 => [
    'title' => 'The Book of Farm-Buildings',
    'author' => 'Henry Stephens',
    'image' => 'images/pic18.jpg',
    'content' => <<<TEXT
This book covers the design and construction of farm buildings.

It includes barns, stables, and storage facilities.

Focuses on efficiency and animal welfare.
TEXT,
    'full_link' => 'https://www.gutenberg.org/ebooks/19936'
],

19 => [
    'title' => 'Practical Agriculture',
    'author' => 'John McLennan',
    'image' => 'images/pic19.jpg',
    'content' => <<<TEXT
A practical guide to crops, livestock, and farm management.

Emphasizes hands-on experience and experimentation.

Designed for working farmers.
TEXT,
    'full_link' => 'https://www.gutenberg.org/ebooks/24897'
],

20 => [
    'title' => 'The Chemistry of the Farm',
    'author' => 'R. Warington',
    'image' => 'images/pic20.jpg',
    'content' => <<<TEXT
Explains chemical processes occurring in soil and crops.

Topics include fertilizers, plant nutrition, and soil chemistry.

An important work in agricultural science.
TEXT,
    'full_link' => 'https://www.gutenberg.org/ebooks/37810'
],

        ];

        $story = $stories[$id] ?? abort(404);

        return view('story', compact('story'));
    }
}
