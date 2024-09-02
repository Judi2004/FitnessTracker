<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Exercise;
use Filament\Widgets\ChartWidget;

class ExerciseCategoryBarChart extends ChartWidget
{
    protected static ?string $heading = 'Exercises by Category';
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $categories = Category::all();
        $labels = [];
        $data = [];

        foreach ($categories as $category) {
            $labels[] = $category->name;
            $data[] = Exercise::where('category_id', $category->id)->count();
        }
        return [
            'datasets' => [
                [
                    'label' => 'Number of Exercises',
                    'data' => $data,
                ],
            ],
            'labels' => $labels,

        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
