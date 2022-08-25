<?php

namespace App\Http\Controllers;

use App\Exports\PromotionsExport;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
	public function index()
	{

		$promotions = Promotion::get();
		$winner = $promotions->where('winner', 1)->first();
		return view('app', compact('winner', 'promotions'));
	}

	public function deletePromotion()
	{
		Promotion::truncate();
		return redirect()->route('index');
	}
	public function exportPromotionList()
	{
		return Excel::download(new PromotionsExport, "invoices" . date("Y-m-d H:i:s") . ".xlsx");
	}
}
