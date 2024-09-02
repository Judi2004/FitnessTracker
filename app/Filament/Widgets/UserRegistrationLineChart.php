<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class UserRegistrationLineChart extends ChartWidget
{
    protected static ?string $heading = 'User Registrations Over Time';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        // Get data for the last 30 days
        $dates = collect();
        $registrations = collect();

        // Loop through each of the last 30 days
        for ($i = 29; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i)->format('Y-m-d');
            $dates->push($date);

            // Count the number of users registered on each day
            $registrations->push(
                User::whereDate('created_at', $date)->count()
            );
        }

        return [
            'labels' => $dates->toArray(),
            'datasets' => [
                [
                    'label' => 'Number of Registrations',
                    'data' => $registrations->toArray(),
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'fill' => true,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
