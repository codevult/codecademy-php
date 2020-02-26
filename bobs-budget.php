<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:

echo "Gross Salary: ".$grossSalary."\n";

//Net income after Tax
$netIncome = ($incomeSegments[0][0]*$incomeSegments[0][1])+($incomeSegments[1][0]*$incomeSegments[1][1])+($incomeSegments[2][0]*$incomeSegments[2][1]);

//Net income after Tax and Social Security
$annualIncome = $netIncome - $socialSecurity; 
echo "Annual Income after Tax & Social Security: ".$annualIncome."\n";

//Annual Income before Annual Expenses
echo "Annual Income after Annual Expenses: ".($annualIncome = $annualIncome - $annualExpenses["vacations"] - $annualExpenses["carRepairs"]) ."\n";

//Monthly Income
$monthlyIncome = $annualIncome/12;
echo "Monthly Income before Annual & Monthly Expenses: ".$monthlyIncome."\n";

//Annual Income after Annual Expenses
echo "Monthly Income after Annual Expenses: ".($annualIncome - $annualExpenses["vacations"] - $annualExpenses["carRepairs"])/12 ."\n";

//Monthly Income after Monthly Expenses
echo "Monthly Income after Monthly Expenses: ".($monthlyIncome = $monthlyIncome-$monthlyExpenses["rent"]-$monthlyExpenses["utilities"]-$monthlyExpenses["healthInsurance"])."\n";

//Weekly income before Weekly Expenses
$weeklyIncome = $monthlyIncome/4.33;
echo "Weekly Income before Weekly Expenses: ".$weeklyIncome."\n";

//Weekly Expenses
$weeklyExpenses = [
  "gas"=> 25,
  "food"=>90,
  "entertainment"=>47
];

echo "Weekly Income after Weekly Expenses: ".($weeklyIncome = $weeklyIncome-$weeklyExpenses["gas"]-$weeklyExpenses["food"]-$weeklyExpenses["entertainment"])."\n";

//Summary
echo "\n\nSummary of Income after Tax and Expenses\nAnnual Income: ".$annualIncome."\nMonthly Income: ".$monthlyIncome."\nWeekly Income: ".$weeklyIncome."\n";

//Money left for savings
echo "\nRemaining money: ".$savingsPerYear = $weeklyIncome * 52;
