<div class="fixed bottom-6 right-6 z-20 transition-all duration-500" id="chatbotButtonContainer">
    <button id="chatbotButton" class="bg-sky-500 text-white p-2 rounded-full shadow-lg focus:outline-none">
        <img src="assets/images/icons/chatbot1.png" alt="chatbot" class="w-8 h-8">
    </button>
</div>

<div id="chatbotPopup" class="fixed bottom-[-600px] right-8 bg-blue-100 p-1 rounded-lg shadow-lg z-20 transition-all duration-500 hidden"
    style="width: 350px; height:530px;">
    <div class="w-full h-full overflow-auto">
        <div id="chatbotContent" class="w-full h-full"></div>
    </div>
    <button id="closeChatbot" class="absolute top-2 right-2 text-gray-700 focus:outline-none cursor-pointer"
        aria-label="Close chatbot">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
</div>

<script>
    const chatbotButton = document.getElementById('chatbotButton');
    const chatbotPopup = document.getElementById('chatbotPopup');
    const chatbotButtonContainer = document.getElementById('chatbotButtonContainer');
    const closeChatbot = document.getElementById('closeChatbot');

    chatbotButton.addEventListener('click', function () {
        chatbotButtonContainer.classList.add('opacity-0', 'pointer-events-none');
        chatbotButtonContainer.style.transform = 'translateY(100px)';
        chatbotPopup.classList.remove('hidden');
        setTimeout(() => {
            chatbotPopup.style.bottom = '20px'; 
        }, 50);  
    });

    closeChatbot.addEventListener('click', function () {
        chatbotPopup.style.bottom = '-600px';
        setTimeout(() => {
            chatbotPopup.classList.add('hidden');
            chatbotButtonContainer.classList.remove('opacity-0', 'pointer-events-none');
            chatbotButtonContainer.style.transform = 'translateY(0)';
        }, 300);  
    });

    document.addEventListener('DOMContentLoaded', function () {
        let c = document.getElementById('chatbotContent');
        let boturl = `https://vasp-web-bot.onrender.com/`;
        c.innerHTML = `<iframe src="${boturl}" class="w-full h-96 md:h-full border-0"></iframe>`;
    });
</script>
