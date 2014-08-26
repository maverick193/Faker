<?php

namespace Faker\Provider;

class ProductCategory extends \Faker\Provider\Base
{
    protected static $categoryNames = array(
        'Women', 'Men', 'Accessories', 'Home Decor', 'Sale', 'VIP', 'Tops & Blouses', 'Pants & Denim',
        'Dresses & Skirts', 'New Arrivals', 'Shirts', 'Tees, Knits and Polos', 'Eyewear', 'Jewelry',
        'Shoes','Bags & Luggage', 'Books & Music', 'Bed & Bath', 'Electronics', 'Decorative Accents',
        'Smartphones', 'Camera & Photo', 'Computers', 'MP3 Players', 'TV & Video', 'Sports Nutrition',
        'Health Care', 'Diet Supplements', 'Pens', 'Textbooks', 'Video Projectors', 'Lamps', 'Games',
        'Fitness', 'Hunting & Fishing', 'Cycling', 'Golf', 'Athletic Clothing', 'Water Sports', 'Outdoor',
        'Movies', 'Blu-ray', 'Digital Games', 'Digital Music', 'CDs & DVDs'
    );

    /**
     * @example 'Books & Music'
     */
    public function categoryName()
    {
        return static::randomElement(static::$categoryNames);
    }
}