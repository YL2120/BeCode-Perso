<?php

class RecipeCollection
{
    private $title;
    private $recipes = array();

    public function setTitle($title)
    {
        $this->title= ucwords($title);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function __construct($title)
    {
        $this->setTitle($title);
    }

    public function addRecipe($string)
    {
        $this->recipes[]=$string;
    }

    public function getRecipe($string)
    {
        return $this->recipes;
    }

    public function getRecipeTitles()
    {
        $titles=array();
        foreach ($this->recipes as $recipe) {
            $titles[] = $recipe->getTitle();
        }
        return array_values($titles);
    }

    public function filterByTag($tag)
    {
        $taggedRecipes = array();
        foreach($this->recipes as $recipe){
            if(in_array(strtolower($tag),$recipe->getTags())) {
                $taggedRecipes[] = $recipe;
            }
        }
        return $taggedRecipes;
    }

    public function getCombinedIngredients ()
    {      
        $combinedIngredients=array();
       foreach($this->recipes as $recipe){
        
        $combinedIngredients[]=Render::displayIngredients($recipe->getIngredients());;
        
       }
       
       return ($combinedIngredients);
    }
        
    

}













?>