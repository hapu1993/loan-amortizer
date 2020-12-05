# loan-amortizer
Laravel Loan Amortizer Package

composer require hapu/loan-amortizer --dev

Usage 
Ex:
        Amortizer::calculate([
            'loan_amount' 	=> 20000,
            'term_years' 	=> 1,
            'interest' 		=> 10,
            'terms' 		=> 12
        ]);


Sample Response

array:3 [▼
  "inputs" => array:4 [▶]
  "summary" => array:2 [▶]
  "schedule" => array:12 [▼
    0 => array:4 [▼
      "payment" => 1758.3177446002
      "interest" => 166.66666666667
      "principal" => 1591.6510779335
      "balance" => 18408.348922066
    ]
    
  ]
]
