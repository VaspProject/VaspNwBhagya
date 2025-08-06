<?php include('master/header.php') ?>

<div class="mx-auto mt-16 mb-4 mt-[80px] md:mt-[75px] md:mb-1 flex flex-col items-center space-y-4 px-4 md:px-0 md:space-y-4">
    <div class="bg-white flex flex-col md:flex-row overflow-hidden">
        <!-- Left Column -->
        <div class="md:w-1/2 px-8 py-8 md:px-24 md:py-16 bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 text-white flex flex-col items-center justify-center text-left">
            <h1 class="text-3xl md:text-4xl font-bold mb-6">Got a project in mind? We are right here to help you!</h1>
            <p class="text-lg mb-6">Let’s collaborate to elevate your business to new heights. Together, we can craft a masterpiece that reflects your vision and ambition. Reach out to us, and let our innovative approaches help you amplify your ideas and achieve remarkable success.</p>
        </div>

        <!-- Right Column -->
        <div class="md:w-1/2 py-4 px-4 md:py-[70px] md:px-16">
            <div class="mb-8 pt-6 md:pt-0">
                <h1 class="text-3xl md:text-4xl font-bold text-sky-600 mb-4">Request a Demo</h1>
            </div>
            <form id="demoForm" class="space-y-4">
                <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
                    <div class="w-full md:w-1/2">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name *</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 h-10 p-2.5" required>
                    </div>
                    <div class="w-full md:w-1/2">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 h-10 p-2.5" required>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
                    <div class="w-full md:w-1/2">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone *</label>
                        <input type="tel" id="phone" name="phone" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 h-10 p-2.5" required>
                    </div>
                    <div class="w-full md:w-1/2">
                        <label for="inquiry" class="block text-sm font-medium text-gray-700">Inquiry Type *</label>
                        <select id="inquiry" name="inquiry" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 h-10 p-2.5" required>
                            <option value="">Select</option>
                            <option value="Desalite Connect">Desalite Connect</option>
                            <option value="Ednect">Ednect</option>
                            <option value="Collegiate">Collegiate</option>
                            <option value="TransTrack">TransTrack</option>
                            <option value="icebox">Icebox</option>
                            <option value="Vasp958">Vasp958</option>
                            <option value="FinVasp">FinVasp</option>
                            <option value="VaspLibrary">VaspLibrary</option>
                            <option value="VaspHR">VaspHR</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message </label>
                    <textarea id="message" name="message" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 p-2.5"></textarea>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="agree" name="agree" class="h-4 w-4 text-blue-600 border-gray-300 rounded" required>
                    <label for="agree" class="ml-2 block text-sm text-gray-600">
                        Yes, I agree to receive more updates concerning the information I have provided here. Read the <a href="privacy-policy.php" class="text-blue-600 underline">privacy policy</a> for further details.
                    </label>
                </div>
                <button type="submit" class="w-full py-3 bg-gradient-to-tl from-cyan-400 to-blue-500 text-white rounded-md focus:outline-none focus:ring-2 transition ease-in-out duration-200 hover:from-cyan-500 hover:to-blue-600">Submit</button>
            </form>

        </div>



    </div>
</div>

<script>
    // Wait for the DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.getElementById('navbar');
        if (navbar) {
            navbar.classList.remove('bg-transparent');
            navbar.classList.add('bg-sky-700');
        }
    });
</script>

<?php include('master/footer.php') ?>

<script>
    $(document).ready(function() {
        $('#demoForm').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: '/request-action.php',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response === "success") {
                        alert("Your enquiry has been submitted successfully! Thank you.");
                    } else if (response === "invalid_email") {
                        alert("Please enter a valid email address.");
                    } else if (response === "missing_fields") {
                        alert("Please fill in all the required fields.");
                    } else {
                        alert("Oops! Something went wrong. Please try again later.");
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    alert("Oops! Something went wrong. Please try again later.");
                }
            });
        });
    });
</script>