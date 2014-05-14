<?php

class Rating extends \Eloquent {
	protected $fillable = [];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ratings';
	public $timestamps = false;

	/**
	 * database relationship rating belongs to Item
	 * @return [type] [description]
	 */
	public function item()
    {
        return $this->belongsTo('Item');
    }

    /**
     * this function sets up the appropriate rating for 
     * the item that is being rated
     */
    public function scopeSetRating($query, $item_id, $rating){

    	//get the rating id
    	$rating_id = Item::getRatingID($item_id)->first();

    	//$query->select('ratings_id')->where('id', '=', $item_id)->first();

    	$previous_rating = $query->where('id', '=', $rating_id['ratings_id'])->first(); 

    	/**
    	 * This algorithim works using simple probabilty
    	 * established by Marin Bezhanov you can view his algorithm
    	 * at http://bit.ly/1mWG6zW
    	 */
    	$totalVotes = $previous_rating['total_votes'];
    	$overAllProbability = $totalVotes + 1;
    	$oldRating = $previous_rating['rating'];

    	$new_rating = ((double)$oldRating * ((double)$totalVotes/(double)$overAllProbability)) + ((double)$rating/(double)$overAllProbability);

    	/**end algorithm **/


    	//store the new rating into the database
    	
    	$newRating = $query
    					->where('id', '=', $rating_id['ratings_id'])
    					->update(array('total_votes' => $overAllProbability, 'rating' => $new_rating));
    	

    	return $newRating;


    	
    }
}