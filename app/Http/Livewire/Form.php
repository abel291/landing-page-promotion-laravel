<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Department;
use App\Models\Promotion;
use Livewire\Component;

class Form extends Component
{
	public Promotion $promotion;

	public $deparments;
	public $cities;

	public $selectedDepartment = null;
	public $selectedCity = null;

	public $habeasData = true;

	protected $rules = [
		'promotion.first_name' => 'required|alpha_num|min:3',
		'promotion.last_name' => 'required|alpha_num|min:3',
		'promotion.cedula' => 'required|integer|min:1',
		'promotion.phone' => 'required|alpha_num|min:6',
		'promotion.email' => 'required|email|unique:promotions,email',
		'selectedDepartment' => 'required|exists:departments,id',
		'selectedCity' => 'required|exists:cities,id',
		'habeasData' => 'required|accepted',
	];

	public function mount()
	{
		$this->promotion = \App\Models\Promotion::factory()->make();
		$this->deparments = Department::orderBy('name', 'asc')->get();
		// $this->cities = collect();
		// $this->selectedDepartment = null;
		// $this->selectedCity = null;

		$deparment = $this->deparments->random();
		$this->cities = $this->deparments->random()->cities;
		$this->selectedDepartment = $deparment->id;
		$this->selectedCity = $this->cities->random()->id;
	}

	public function store()
	{
		//sleep(10000);
		$this->validate();

		Promotion::create([
			'first_name' => $this->promotion->first_name,
			'last_name' => $this->promotion->last_name,
			'cedula' => $this->promotion->cedula,
			'phone' => $this->promotion->phone,
			'email' => $this->promotion->email,
			'city_id' => $this->selectedCity,
		]);


		$this->dispatchBrowserEvent('notification');
		$this->mount();
		$this->promotion = new Promotion();

		return redirect('/')->with('success', 'success');
	}

	public function updatedSelectedDepartment($department_id)
	{
		$this->cities = City::where('department_id', $department_id)->orderBy('name', 'asc')->get();
	}

	public function render()
	{
		return view('livewire.form');
	}
}
