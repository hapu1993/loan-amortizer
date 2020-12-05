<?php

Route::get('amortize',function (){
    return \Hapu\LoanAmortizer\Facades\Amortizer::calculate('Hello World');
});
