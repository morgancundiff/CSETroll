<?php


class FactsSeeder extends Seeder 
{

        public function up()
        {

        		DB::table('facts')->delete();
        		   
                DB::table('facts')->insert(
                        array(
                                array("fact" => "No one really knows when donuts were invented or who invented them."),   
                               
                                array("fact" => "Apples, potatoes, and onions all taste the same when eaten with your nose plugged."),   

                                array("fact" => "When an egg floats in water, it is \"off\" and should not be eaten."),  
                                
                                array("fact" => "The consumption of natural vanilla causes the body to release catecholamines (including adrenalin) – for this reason it is considered to be mildly addictive."),   

                                array("fact" => "Banana trees are not actually trees – they are giant herbs."),   

                                array("fact" => "Ketchup was originally a fish sauce originating in the orient"),   

                                array("fact" => "7-Up – invented in 1920 contained Lithium – the drug commonly prescribed now to sufferers of bi-polar disorder."),   

                                array("fact" => "In Tibet, a common drink is butter tea – it is made from yak butter, salt, and tea."),   
 
                                array("fact" => "Nutritious food costs 10 times as much as junk food."),   

                                array("fact" => "Grocers don’t have to tell you where your salad comes from."),   

                                array("fact" => "Chicken today contains 266 percent more fat than it did 40 years ago."),   

                                array("fact" => "Chewing gum while peeling onions will keep you from crying!"),   

                                array("fact" => "Smelling bananas and/or green apples (smelling, not eating) can help you lose weight!"),   


                          
                        ));
        }

        public function down()
        {
                DB::table('facts')->delete();
        }

}