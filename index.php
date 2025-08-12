<?php
// PHP initialization and any server-side logic can go here
$pageTitle = "AI Chatbot";
$currentTime = date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="app-container">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h2>AI Assistant</h2>
                <p>Your intelligent conversation partner</p>
                <button class="new-chat-btn" id="newChatBtn">
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                    </svg>
                    New Chat
                </button>
            </div>

            <div class="sidebar-nav">
                <div class="nav-section">
                    <h3>Recent Chats</h3>
                    <div class="chat-history" id="chatHistory">
                        <div class="chat-item active">
                            <svg class="chat-item-icon" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/>
                            </svg>
                            <div class="chat-item-content">
                                <div class="chat-item-title">General Questions</div>
                                <div class="chat-item-preview">How can I help you today?</div>
                            </div>
                            <div class="chat-item-time">Now</div>
                        </div>
                        <div class="chat-item">
                            <svg class="chat-item-icon" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/>
                            </svg>
                            <div class="chat-item-content">
                                <div class="chat-item-title">Project Discussion</div>
                                <div class="chat-item-preview">Let's talk about your project...</div>
                            </div>
                            <div class="chat-item-time">2h ago</div>
                        </div>
                        <div class="chat-item">
                            <svg class="chat-item-icon" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/>
                            </svg>
                            <div class="chat-item-content">
                                <div class="chat-item-title">Code Review</div>
                                <div class="chat-item-preview">Looking at your code...</div>
                            </div>
                            <div class="chat-item-time">1d ago</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sidebar-footer">
                <button class="settings-btn" id="settingsBtn">
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61 l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41 h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87 C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.8,11.69,4.8,12s0.02,0.64,0.07,0.94l-2.03,1.58 c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54 c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96 c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94z M12,15.6c-1.98,0-3.6-1.62-3.6-3.6 s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z"/>
                    </svg>
                    Settings
                </button>
            </div>
        </div>

        <!-- Main Chat Area -->
        <div class="chat-container">
            <div class="chat-header">
                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                    </svg>
                </button>
                <h1>AI Assistant</h1>
                <p>Your intelligent conversation partner</p>
            </div>
            
            <div class="chat-messages" id="chatMessages">
                <div class="welcome-message">
                    <h2>Welcome! 👋</h2>
                    <p>I'm your AI assistant. How can I help you today?</p>
                </div>
            </div>
            
            <div class="chat-input-container">
                <div class="chat-input-wrapper">
                    <textarea 
                        class="chat-input" 
                        id="chatInput" 
                        placeholder="Type your message here..."
                        rows="1"
                    ></textarea>
                    <button class="send-button" id="sendButton">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <script>
        const chatMessages = document.getElementById('chatMessages');
        const chatInput = document.getElementById('chatInput');
        const sendButton = document.getElementById('sendButton');
        const sidebar = document.getElementById('sidebar');
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        const newChatBtn = document.getElementById('newChatBtn');
        const settingsBtn = document.getElementById('settingsBtn');
        const chatHistory = document.getElementById('chatHistory');

        let currentChatId = 1;
        let chats = [
            {
                id: 1,
                title: "General Questions",
                preview: "How can I help you today?",
                messages: [],
                timestamp: new Date()
            }
        ];

        // Mobile sidebar toggle
        mobileMenuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('open');
            sidebarOverlay.classList.toggle('open');
        });

        sidebarOverlay.addEventListener('click', () => {
            sidebar.classList.remove('open');
            sidebarOverlay.classList.remove('open');
        });

        // New chat functionality
        newChatBtn.addEventListener('click', () => {
            const newChat = {
                id: Date.now(),
                title: "New Chat",
                preview: "Start a new conversation...",
                messages: [],
                timestamp: new Date()
            };
            
            chats.unshift(newChat);
            currentChatId = newChat.id;
            updateChatHistory();
            clearChat();
            setActiveChat(newChat.id);
        });

        // Settings functionality
        settingsBtn.addEventListener('click', () => {
            alert('Settings panel would open here! You can customize themes, language, and other preferences.');
        });

        // Update chat history display
        function updateChatHistory() {
            chatHistory.innerHTML = '';
            
            chats.forEach(chat => {
                const chatItem = document.createElement('div');
                chatItem.className = `chat-item ${chat.id === currentChatId ? 'active' : ''}`;
                chatItem.onclick = () => loadChat(chat.id);
                
                const timeAgo = getTimeAgo(chat.timestamp);
                
                chatItem.innerHTML = `
                    <svg class="chat-item-icon" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/>
                    </svg>
                    <div class="chat-item-content">
                        <div class="chat-item-title">${chat.title}</div>
                        <div class="chat-item-preview">${chat.preview}</div>
                    </div>
                    <div class="chat-item-time">${timeAgo}</div>
                `;
                
                chatHistory.appendChild(chatItem);
            });
        }

        // Load specific chat
        function loadChat(chatId) {
            currentChatId = chatId;
            const chat = chats.find(c => c.id === chatId);
            
            if (chat) {
                clearChat();
                chat.messages.forEach(msg => {
                    addMessage(msg.content, msg.sender, false);
                });
                setActiveChat(chatId);
            }
        }

        // Set active chat in sidebar
        function setActiveChat(chatId) {
            document.querySelectorAll('.chat-item').forEach(item => {
                item.classList.remove('active');
            });
            
            const activeItem = document.querySelector(`[onclick="loadChat(${chatId})"]`);
            if (activeItem) {
                activeItem.classList.add('active');
            }
        }

        // Clear chat display
        function clearChat() {
            chatMessages.innerHTML = `
                <div class="welcome-message">
                    <h2>Welcome! 👋</h2>
                    <p>I'm your AI assistant. How can I help you today?</p>
                </div>
            `;
        }

        // Get time ago string
        function getTimeAgo(date) {
            const now = new Date();
            const diff = now - date;
            const minutes = Math.floor(diff / 60000);
            const hours = Math.floor(diff / 3600000);
            const days = Math.floor(diff / 86400000);
            
            if (minutes < 1) return 'Now';
            if (minutes < 60) return `${minutes}m ago`;
            if (hours < 24) return `${hours}h ago`;
            return `${days}d ago`;
        }

        // Auto-resize textarea
        chatInput.addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = Math.min(this.scrollHeight, 120) + 'px';
        });

        // Send message function
        function sendMessage() {
            const message = chatInput.value.trim();
            if (!message) return;

            // Add user message
            addMessage(message, 'user');
            chatInput.value = '';
            chatInput.style.height = '50px';

            // Update current chat
            const currentChat = chats.find(c => c.id === currentChatId);
            if (currentChat) {
                currentChat.messages.push({
                    content: message,
                    sender: 'user',
                    timestamp: new Date()
                });
                currentChat.preview = message.substring(0, 30) + (message.length > 30 ? '...' : '');
                currentChat.timestamp = new Date();
                updateChatHistory();
            }

            // Show typing indicator
            showTypingIndicator();

            // Simulate bot response (replace with actual API call)
            setTimeout(() => {
                hideTypingIndicator();
                const botResponse = generateBotResponse(message);
                addMessage(botResponse, 'bot');
                
                // Update current chat with bot response
                if (currentChat) {
                    currentChat.messages.push({
                        content: botResponse,
                        sender: 'bot',
                        timestamp: new Date()
                    });
                    currentChat.preview = botResponse.substring(0, 30) + (botResponse.length > 30 ? '...' : '');
                    currentChat.timestamp = new Date();
                    updateChatHistory();
                }
            }, 1000 + Math.random() * 2000);
        }

        // Add message to chat
        function addMessage(content, sender, updateChat = true) {
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${sender}`;
            
            const avatar = document.createElement('div');
            avatar.className = 'message-avatar';
            avatar.textContent = sender === 'user' ? 'U' : 'AI';
            
            const messageContent = document.createElement('div');
            messageContent.className = 'message-content';
            messageContent.textContent = content;
            
            const time = document.createElement('div');
            time.className = 'message-time';
            time.textContent = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            
            messageContent.appendChild(time);
            messageDiv.appendChild(avatar);
            messageDiv.appendChild(messageContent);
            
            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        // Show typing indicator
        function showTypingIndicator() {
            const typingDiv = document.createElement('div');
            typingDiv.className = 'typing-indicator';
            typingDiv.id = 'typingIndicator';
            
            typingDiv.innerHTML = `
                <div class="typing-dots">
                    <div class="typing-dot"></div>
                    <div class="typing-dot"></div>
                    <div class="typing-dot"></div>
                </div>
                <span>AI is typing...</span>
            `;
            
            chatMessages.appendChild(typingDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        // Hide typing indicator
        function hideTypingIndicator() {
            const typingIndicator = document.getElementById('typingIndicator');
            if (typingIndicator) {
                typingIndicator.remove();
            }
        }

        // Simple bot response generator (replace with actual AI API)
        function generateBotResponse(userMessage) {
            const responses = [
                "That's an interesting question! Let me think about that...",
                "I understand what you're asking. Here's what I can tell you...",
                "Great question! Based on my knowledge, I'd say...",
                "I'm glad you asked that. Let me explain...",
                "That's a thoughtful point. Here's my perspective...",
                "I appreciate you bringing that up. Let me help you understand...",
                "That's a complex topic. Let me break it down for you...",
                "Interesting perspective! Here's what I think about that...",
                "I see what you mean. Let me elaborate on that...",
                "That's a great observation. Here's what I can add..."
            ];
            
            return responses[Math.floor(Math.random() * responses.length)];
        }

        // Event listeners
        sendButton.addEventListener('click', sendMessage);
        chatInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                sendMessage();
            }
        });

        // Initialize
        updateChatHistory();
        chatInput.focus();
    </script>
</body>
</html> 