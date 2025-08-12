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
                <form method="POST" action="chat.php" id="chatForm">
                    <div class="chat-input-wrapper">
                        <textarea 
                            class="chat-input" 
                            name="user_message"
                            id="chatInput" 
                            placeholder="Type your message here..."
                            rows="1"
                            required
                        ></textarea>
                        <button type="submit" class="send-button" id="sendButton">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Mobile Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Minimal JavaScript for UI interactions only -->
    <script>
        // Mobile sidebar toggle functionality
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        if (mobileMenuBtn && sidebar && sidebarOverlay) {
            mobileMenuBtn.addEventListener('click', () => {
                sidebar.classList.toggle('open');
                sidebarOverlay.classList.toggle('open');
            });

            sidebarOverlay.addEventListener('click', () => {
                sidebar.classList.remove('open');
                sidebarOverlay.classList.remove('open');
            });
        }

        // Auto-resize textarea
        const chatInput = document.getElementById('chatInput');
        if (chatInput) {
            chatInput.addEventListener('input', function() {
                this.style.height = 'auto';
                this.style.height = Math.min(this.scrollHeight, 120) + 'px';
            });
        }
    </script>
</body>
</html> 