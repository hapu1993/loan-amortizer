# loan-amortizer
Laravel Loan Amortizer Package

composer require hapu/loan-amortizer --dev

Usage 

        Amortizer::calculate([
            'loan_amount' 	=> 20000,
            'term_years' 	=> 1,
            'interest' 		=> 10,
            'terms' 		=> 12
        ]);
