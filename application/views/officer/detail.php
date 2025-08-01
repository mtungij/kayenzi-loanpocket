
<?php
include_once APPPATH . "views/partials/officerheader.php";

// --- DUMMY DATA---
// Simulate if a penalty setting exists or not.
// Your controller should set $penart to the penalty object if it exists, or FALSE/null if not.
// if (!isset($penart)) {
//     // Scenario 1: No penalty setting exists
//     // $penart = null;

//     // Scenario 2: A penalty setting exists
//      $penart = (object)[
//          '$customer_id' => 1,
//          'action_penart' => 'PERCENTAGE VALUE', // 'PERCENTAGE VALUE' or 'MONEY VALUE'
//          'penart' => 1.5, // The actual penalty value
//          'comp_id' => $_SESSION['comp_id'] ?? 1
//      ];
// }
// --- END DUMMY DATA ---
?>

<!-- ========== MAIN CONTENT BODY ========== -->
<div class="w-full lg:ps-64">
    <div class="p-4 sm:p-6 space-y-6">

        <!-- Page Title / Subheader -->
        <div class="mb-6">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 dark:text-gray-200">
                Customer detail
            </h2>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                Manage your customer details and settings here.
            </p>
        </div>
        <!-- End Page Title / Subheader -->

        <?php // Flash Messages ?>
        <?php if ($das = $this->session->flashdata('massage')): ?>
        <div class="bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500" role="alert">
            <div class="flex">
                <div class="flex-shrink-0"><span class="inline-flex justify-center items-center size-8 rounded-full border-4 border-teal-100 bg-teal-200 text-teal-800 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-500"><svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path><path d="m9 12 2 2 4-4"></path></svg></span></div>
                <div class="ms-3"><h3 class="text-gray-800 font-semibold dark:text-white">Success</h3><p class="mt-2 text-sm text-gray-700 dark:text-gray-400"><?php echo $das;?></p></div>
                <div class="ps-3 ms-auto"><div class="-mx-1.5 -my-1.5"><button type="button" class="inline-flex bg-teal-50 rounded-lg p-1.5 text-teal-500 hover:bg-teal-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-teal-50 focus:ring-teal-600 dark:bg-transparent dark:hover:bg-teal-800/50 dark:text-teal-600" data-hs-remove-element="[role=alert]"><span class="sr-only">Dismiss</span><svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg></button></div></div>
            </div>
        </div>
        <?php endif; ?>

        <!-- Card: Penalty Setting Form -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700">
            <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-6">

</h3>



<?php echo form_open_multipart("oficer/create_lastDetail/{$customer->customer_id}", ['novalidate' => true]); ?>

<!-- Grid: Nickname and Place of Business -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
    <!-- Nickname -->
    <div>
        <label for="famous_area" class="block text-sm font-medium mb-2 dark:text-gray-300">* Nick Name:</label>
        <input type="text" id="famous_area" name="famous_area" placeholder="andika jina maarufu la mteja" autocomplete="off" required
            class="uppercase py-2.5 px-4 w-full border border-gray-300 rounded-md shadow-sm text-sm focus:border-cyan-500 focus:ring-cyan-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300"
            value="<?php echo set_value('famous_area', ($customer && isset($customer->famous_area) ? htmlspecialchars($customer->famous_area, ENT_QUOTES, 'UTF-8') : '')); ?>">
        <p class="text-xs text-gray-500 mt-1 dark:text-gray-400">e.g., mama jonson, baba james</p>
        <?php echo form_error("famous_area", '<p class="text-xs text-red-600 mt-2">', '</p>'); ?>
    </div>

    <!-- Place of Business -->
    <div>
        <label for="place_imployment" class="block text-sm font-medium mb-2 dark:text-gray-300">* Place of Business:</label>
        <input type="text" id="place_imployment" name="place_imployment" placeholder="Enter place of business" autocomplete="off" required
            class="uppercase py-2.5 px-4 w-full border border-gray-300 rounded-md shadow-sm text-sm focus:border-cyan-500 focus:ring-cyan-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300"
            value="<?php echo set_value('place_imployment', ($customer && isset($customer->place_imployment) ? htmlspecialchars($customer->place_imployment, ENT_QUOTES, 'UTF-8') : '')); ?>">
        <p class="text-xs text-gray-500 mt-1 dark:text-gray-400">e.g., sokoni, duka, ofisi</p>
        <?php echo form_error("place_imployment", '<p class="text-xs text-red-600 mt-2">', '</p>'); ?>
    </div>
</div>

<!-- Grid: File Uploads -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
    <!-- Barua ya Utambulisho -->
    <div>
        <label for="barua_utambulisho" class="block text-sm font-medium mb-2 dark:text-gray-300">* Barua ya Utambulisho (PDF):</label>
        <input type="file" id="barua_utambulisho" name="barua_utambulisho" accept="application/pdf" 
            class="block w-full text-sm text-gray-700 file:mr-4 file:py-2.5 file:px-4 file:rounded-md file:border-0 file:font-semibold file:bg-cyan-50 file:text-cyan-700 hover:file:bg-cyan-100 dark:file:bg-gray-700 dark:file:text-gray-300">
        <?php echo form_error("barua_utambulisho", '<p class="text-xs text-red-600 mt-2">', '</p>'); ?>
    </div>

    <!-- Kitambulisho -->
    <div>
        <label for="kitambulisho" class="block text-sm font-medium mb-2 dark:text-gray-300">* Kitambulisho (PDF):</label>
        <input type="file" id="kitambulisho" name="kitambulisho" accept="application/pdf" 
            class="block w-full text-sm text-gray-700 file:mr-4 file:py-2.5 file:px-4 file:rounded-md file:border-0 file:font-semibold file:bg-cyan-50 file:text-cyan-700 hover:file:bg-cyan-100 dark:file:bg-gray-700 dark:file:text-gray-300">
        <?php echo form_error("kitambulisho", '<p class="text-xs text-red-600 mt-2">', '</p>'); ?>
    </div>
</div>

<!-- Hidden Fields (required where meaningful) -->
<input type="hidden" name="account_id" value="1" required>
<input type="hidden" name="code" value="C<?php echo substr($customer->customer_day ,0, 4)?><?php echo substr($customer->customer_day ,5, 2)?><?php echo $customer->customer_id; ?>" required>
<input type="hidden" name="customer_id" value="<?php echo $customer->customer_id; ?>" required>

<!-- Submit Button -->
<div class="mt-8 border-t pt-6 border-gray-200 dark:border-gray-700">
    <div class="flex justify-center">
        <button type="submit" class="py-2.5 px-6 text-sm font-semibold rounded-lg bg-cyan-600 text-white hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500">
            Next
        </button>
    </div>
</div>

<?php echo form_close(); ?>

            </div>
        </>
        <!-- End Card: Penalty Setting Form -->

        <!-- Card: Current Penalty Setting Display -->
        
        <!-- End Card: Current Penalty Setting Display -->

    </div>
</div>
<!-- ========== END MAIN CONTENT BODY ========== -->

<?php
include_once APPPATH . "views/partials/footer.php";
?>
