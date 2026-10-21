<?php

namespace App\Filament\Widgets;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $totalDepartments = Department::count();
        $totalPositions = Position::count(); 
        $totalEmployees = Employee::count();

        return [
            Stat::make('Total Departments', $totalDepartments)
            ->icon(Heroicon::BuildingOffice2)
            ->description('Total Departemen yang Tersedia'),
            Stat::make('Total Positions', $totalPositions)
            ->icon(Heroicon::UserGroup)
            ->description('Total Jabatan yang Tersedia'),
            Stat::make('Total Employees', $totalEmployees)
            ->icon(Heroicon::Users)
            ->description('Total Karyawan yang Tersedia'),
        ];
    }
}
