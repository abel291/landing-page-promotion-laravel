<?php

namespace App\Exports;

use App\Models\Promotion;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PromotionsExport implements WithMapping, FromQuery, WithHeadings
{

	public function query()
	{
		return Promotion::query()->with('city', 'city.department');
	}

	/**
	 * @var Promotion $Promotion
	 */
	public function map($promotion): array
	{
		return [
			$promotion->first_name,
			$promotion->last_name,
			$promotion->phone,
			$promotion->email,
			$promotion->cedula,
			$promotion->city->department->name,
			$promotion->city->name,
		];
	}
	public function headings(): array
	{
		return [
			'Nombre',
			'apellido',
			'Telefono',
			'Email',
			'Cedula',
			'Departamento',
			'Ciudad',
		];
	}
}
