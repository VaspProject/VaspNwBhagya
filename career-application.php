<?php include('master/sub-header.php') ?>
<div class="container mx-auto py-16 md:py-24 px-6">
    <div class="career-application bg-white shadow-lg rounded-lg p-8">
        <form id="careerForm" novalidate>
            <div class="form-group mb-4">
                <label for="full-name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <input type="text" id="full-name" name="full_name" required aria-label="Full Name" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <p class="text-red-600 text-sm mt-1 hidden" id="full-name-error">Please enter your full name.</p>
            </div>
            <div class="form-group mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" id="email" name="email" required aria-label="Email" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <p class="text-red-600 text-sm mt-1 hidden" id="email-error">Please enter a valid email address.</p>
            </div>
            <div class="form-group mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                <input type="tel" id="phone" name="phone" required aria-label="Phone" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <p class="text-red-600 text-sm mt-1 hidden" id="phone-error">Please enter a valid phone number.</p>
            </div>
            <div class="form-group mb-4">
                <label for="position" class="block text-sm font-medium text-gray-700 mb-1">Position Applied For</label>
                <input type="text" id="position" name="position" required aria-label="Position Applied For" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <p class="text-red-600 text-sm mt-1 hidden" id="position-error">Please enter the position you're applying for.</p>
            </div>
            <div class="form-group mb-4">
                <label for="resume" class="block text-sm font-medium text-gray-700 mb-1">Upload Resume (PDF only)</label>
                <input type="file" id="resume" name="resume" accept=".pdf" required aria-label="Upload Resume" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <p class="text-red-600 text-sm mt-1 hidden" id="resume-error">Please upload your resume in PDF format.</p>
            </div>
            <div class="form-group mb-4">
                <label for="cover-letter" class="block text-sm font-medium text-gray-700 mb-1">Cover Letter</label>
                <textarea id="cover-letter" name="cover_letter" rows="5" required aria-label="Cover Letter" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                <p class="text-red-600 text-sm mt-1 hidden" id="cover-letter-error">Please enter your cover letter.</p>
            </div>
            <div class="flex justify-between items-center mt-6">
                <!-- <button type="reset" class="px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 transition duration-300">Reset</button> -->
                <button type="submit" class="px-4 py-2 bg-blue-950 text-white hover:bg-blue-900 transition duration-300">Submit Application</button>
            </div>
        </form>
    </div>
</div>

<?php include('master/footer.php') ?>

<script>
    $(document).ready(function() {
    $('#careerForm').submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: '/career-action.php',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response === "success") {
                    alert("Your application has been submitted successfully! Thank you.");
                } else if (response === "invalid_email") {
                    alert("Please enter a valid email address.");
                } else if (response === "invalid_resume") {
                    alert("Please upload a valid PDF resume.");
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