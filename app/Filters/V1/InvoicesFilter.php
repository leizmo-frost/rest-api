<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class InvoicesFilter extends ApiFilter{
    // $table->integer('customer_id');
    //         $table->integer('amount');
    //         $table->string('status');  //billed, paid, void
    //         $table->dateTime('billed_date');
    //         $table->dateTime('paid_date')->nullable();
    protected $safeParms =[
        'customer_id' => ['eq'],
        'amount' => ['eq'],
        'status' => ['eq'],
        'billed_date' => ['eq'],
        'paid_date' => ['eq']
    ];

    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '_<',
        'gt' => '>',
        'gte' => '_>',
    ];
}
