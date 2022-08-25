<?php

namespace App\Observers;

use App\Models\Promotion;

class PromotionObserver
{
	/**
	 * Handle the Promotion "created" event.
	 *
	 * @param  \App\Models\Promotion  $promotion
	 * @return void
	 */
	public function created(Promotion $promotion)
	{
		$promotions = Promotion::get();
		if ($promotions->count() >= 5) {

			$promotions_winner = $promotions->random();
			$promotions_winner->winner = 1;
			$promotions_winner->save();
		}
	}

	/**
	 * Handle the Promotion "updated" event.
	 *
	 * @param  \App\Models\Promotion  $promotion
	 * @return void
	 */
	public function updated(Promotion $promotion)
	{
		//
	}

	/**
	 * Handle the Promotion "deleted" event.
	 *
	 * @param  \App\Models\Promotion  $promotion
	 * @return void
	 */
	public function deleted(Promotion $promotion)
	{
		//
	}

	/**
	 * Handle the Promotion "restored" event.
	 *
	 * @param  \App\Models\Promotion  $promotion
	 * @return void
	 */
	public function restored(Promotion $promotion)
	{
		//
	}

	/**
	 * Handle the Promotion "force deleted" event.
	 *
	 * @param  \App\Models\Promotion  $promotion
	 * @return void
	 */
	public function forceDeleted(Promotion $promotion)
	{
		//
	}
}
