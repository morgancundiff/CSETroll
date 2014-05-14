<?php


class FactsSeeder extends Seeder {

        public function run()
        {

        	DB::table('facts')->delete();   
                DB::table('facts')->insert(
                        array(
                                array(
                                	"fact" => e("No one really knows when donuts were invented or who invented them."),
                                	"id" => 1
                                	),   
                               
                                array(
                                	"fact" => e("Apples, potatoes, and onions all taste the same when eaten with your nose plugged."),
                                	"id" => 2
                                	),   
                                array(
                                	"fact" => e("When an egg floats in water, it is \"off\" and should not be eaten."),
                                	"id" => 3
                                	),  
                                
                                array(
                                	"fact" => e("The consumption of natural vanilla causes the body to release catecholamines (including adrenalin) – for this reason it is considered to be mildly addictive."),
                                	"id" => 4
                                	),   

                                array(
                                	"fact" => e("Banana trees are not actually trees – they are giant herbs."),
                                	"id" => 5
                                	),   

                                array(
                                	"fact" => e("Ketchup was originally a fish sauce originating in the orient"),
                                	"id" => 6
                                	),   

                                array(
                                	"fact" => e('7-Up - invented in 1920 contained Lithium - the drug commonly prescribed now to sufferers of bi-polar disorder.'),
                                	"id" => 7
                                	),   

                                array(
                                	"fact" => e("In Tibet, a common drink is butter tea - it is made from yak butter, salt, and tea."),
                                	"id" => 8
                                	),   
 
                                array(
                                	"fact" => e("Nutritious food costs 10 times as much as junk food."),
                                	"id" => 9
                                	),  

                                array(
                                	"fact" => e("Grocers don’t have to tell you where your salad comes from."),
                                	"id" => 10
                                	),   

                                array(
                                	"fact" => e("Chicken today contains 266 percent more fat than it did 40 years ago."),
                                	"id" => 11
                                	),   

                                array(
                                	"fact" => e("Chewing gum while peeling onions will keep you from crying!"),
                                	"id" => 12
                                	),  

                                array(
                                	"fact" => e("Smelling bananas and/or green apples (smelling, not eating) can help you lose weight!"),
                                	"id" => 13
                                	),  


                          
                        ));
        }

}