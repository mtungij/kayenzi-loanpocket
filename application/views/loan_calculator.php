<?php
include_once APPPATH . "views/partials/header.php";
?>

<div class="max-w-2xl mx-auto bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
    <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200 mb-4">Loan Calculator</h2>
    
    <form id="loanForm" class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Loan Amount (Tsh)</label>
            <input type="number" id="loan_amount" name="loan_amount" required 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Interest Rate (%)</label>
            <input type="number" id="interest_rate" name="interest_rate" required 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Loan Duration</label>
            <div class="flex gap-2">
                <input type="number" id="duration" name="duration" required 
                    class="mt-1 block w-1/2 rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <select id="duration_type" name="duration_type" 
                    class="mt-1 block w-1/2 rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <option value="weeks">Weeks</option>
                    <option value="months">Months</option>
                </select>
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Rate Type</label>
            <select id="rate_type" name="rate_type" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <option value="flat">Flat Rate</option>
                <option value="simple">Simple Interest</option>
            </select>
        </div>

        <button type="button" onclick="calculateLoan()" 
            class="w-full bg-cyan-600 text-white py-2 px-4 rounded-md shadow hover:bg-cyan-700">
            Calculate
        </button>
    </form>

    <div id="result" class="mt-6 hidden p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
        <h3 class="text-md font-semibold text-gray-800 dark:text-gray-200 mb-2">Results:</h3>
        <p id="loan_interest" class="text-gray-700 dark:text-gray-300"></p>
        <p id="total_payment" class="text-gray-700 dark:text-gray-300"></p>
        <p id="installment" class="text-gray-700 dark:text-gray-300"></p>
    </div>
</div>

<script>
function calculateLoan() {
    let amount = parseFloat(document.getElementById('loan_amount').value);
    let rate = parseFloat(document.getElementById('interest_rate').value);
    let duration = parseFloat(document.getElementById('duration').value);
    let durationType = document.getElementById('duration_type').value;
    let rateType = document.getElementById('rate_type').value;

    let months = durationType === 'weeks' ? duration / 4 : duration; // convert weeks to months
    let loanInterest = 0;
    let totalLoan = 0;

    if(rateType === 'flat'){
        loanInterest = amount * (rate/100) * months;
        totalLoan = amount + loanInterest;
    }else if(rateType === 'simple'){
        loanInterest = (rate/100) * amount;
        totalLoan = amount + loanInterest;
    }

    let installment = totalLoan / duration;

    document.getElementById('loan_interest').innerText = "Loan Interest: Tsh " + loanInterest.toFixed(2);
    document.getElementById('total_payment').innerText = "Total Payment: Tsh " + totalLoan.toFixed(2);
    document.getElementById('installment').innerText = "Installment per " + (durationType === 'weeks' ? 'Week' : 'Month') + ": Tsh " + installment.toFixed(2);

    document.getElementById('result').classList.remove('hidden');
}
</script>


<?php
include_once APPPATH . "views/partials/footer.php";
?>








