<?php

namespace Faker\Provider\fr_FR;

class ProductCategory extends \Faker\Provider\Base
{
    protected static $categoryNames = array(
        'Femmes', 'Homme', 'Accessories', 'Maison & Déco', 'Ventes', 'VIP', 'Nouveau Arrivage',
        'Vestes & Blousons', 'Pantalons et Shorts', 'Robes', 'Jupes', 'T-Shirts', 'Sous Vêtements', 'Bijouterie',
        'Chaussures','Sacs & Bags', 'Electroménager', 'Bricolage', 'Chauffage', 'Informatique', 'Téléphonie', 'Sport',
        'Jardinage', 'Son Musique', 'Photo Caméscope', 'Ordinateur', 'Liseuse numérique', 'Tablettes', 'Smartphones',
        'Fitness', 'Golf', 'Lave-vaiselle', 'Lave-linge', 'Jeux', 'Jeux Vidéos', 'Bluray', 'CDs et DVDs', 'Home Cinéma',
        'Animalerie', 'Lecteurs MP3', 'Cartes mémoires', 'Jeans Homme', 'Jeans Femme', 'Parfums', 'Parfums Homme',
        'Parfums Femme', 'Chasse et Pêche', 'Rugby', 'Banquettes', 'Casques HI-FI', 'Tondeuses', 'Congélateur'

    );

    /**
     * @example 'Books & Music'
     */
    public function categoryName()
    {
        return static::randomElement(static::$categoryNames);
    }
}