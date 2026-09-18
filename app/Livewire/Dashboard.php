<?php

namespace App\Livewire;

use App\Models\CreditCardSwipe;
use App\Models\Expense;
use App\Models\Income;
use Illuminate\Support\Carbon;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Dashboard')]
class Dashboard extends Component
{
    public function render()
    {
        $userId = auth()->id();
        $start = Carbon::now()->startOfMonth();
        $end = Carbon::now()->endOfMonth();

        // keep recurring swipes up to date whenever the dashboard is viewed
        CreditCardSwipe::whereHas('creditCard', fn ($q) => $q->where('user_id', $userId))
            ->where('is_recurring', true)
            ->get()
            ->each(fn (CreditCardSwipe $template) => $template->generateDueOccurrences());

        $totalIncome = Income::where('user_id', $userId)->whereBetween('earned_on', [$start, $end])->sum('amount');
        $totalExpense = Expense::where('user_id', $userId)->whereBetween('spent_on', [$start, $end])->sum('amount');
        $balance = $totalIncome - $totalExpense;

        $unpaidSwipes = CreditCardSwipe::whereHas('creditCard', fn ($q) => $q->where('user_id', $userId))
            ->where('paid', false)
            ->with('creditCard')
            ->orderByDesc('swiped_on')
            ->take(5)
            ->get();

        $recentIncomes = Income::where('user_id', $userId)->orderByDesc('earned_on')->take(5)->get();
        $recentExpenses = Expense::where('user_id', $userId)->orderByDesc('spent_on')->take(5)->get();

        $totalOutstandingCC = CreditCardSwipe::whereHas('creditCard', fn ($q) => $q->where('user_id', $userId))
            ->where('paid', false)
            ->sum('amount');

        return view('livewire.dashboard', compact(
            'totalIncome', 'totalExpense', 'balance',
            'unpaidSwipes', 'recentIncomes', 'recentExpenses', 'totalOutstandingCC'
        ));
    }
}
