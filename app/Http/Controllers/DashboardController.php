<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        /*$confirmed = Contract::contractsCountOfEachMonth();
        $inProgress = Contract::contractsCountOfEachMonth('اعتماد المستأجر');
        $inPayment = Contract::contractsCountOfEachMonth('دفع المالك');*/

        $chart = LarapexChart::barChart()
            ->setTitle('Statistics of 2024.')
            ->setSubtitle('General view of contracts each month.')
            ->addData('Confirmed', [])
            ->addData('In Progress', [])
            ->addData('Pending Payment', [])
            ->setXAxis(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'])
            ->setGrid();


        return view('dashboard', compact('chart'));
    }
}
