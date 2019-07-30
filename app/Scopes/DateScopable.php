<?php

namespace App\Scopes;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

trait DateScopable
{
    public function scopeTwoMonthsOld(Builder $query)
    {
        $query->where('created_at', '<=', Carbon::now()->subDays(1));
    }
}

