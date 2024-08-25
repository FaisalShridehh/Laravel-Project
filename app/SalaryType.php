<?php

namespace App;

enum SalaryType: string
{
    case PER_HOUR = 'per hour';
    case PER_DAY = 'per day';
    case PER_WEEK = 'per week';
    case PER_MONTH = 'per month';
    case PER_YEAR = 'per year';
}
