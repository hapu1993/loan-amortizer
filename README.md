# loan-amortizer
Laravel Loan Amortizer Package

composer require hapu/loan-amortizer --dev

        use Hapu\LoanAmortizer\Facades\Amortizer;

        Amortizer::calculate([
            'loan_amount' => 20000,
            'term_years'  => 1,
            'interest' 	  => 10,
            'terms' 	  => 12
        ]);
