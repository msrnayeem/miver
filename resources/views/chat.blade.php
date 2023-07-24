<!-- resources/views/chat.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Chat Page</title>
    <!-- Include Echo and Pusher -->
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .chat-container {
            max-width: 600px;
            margin: 0 auto;
        }

        .message-list {
            list-style: none;
            padding: 0;
        }

        .message-item {
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .message-item .user {
            font-weight: bold;
            color: #007bff;
        }

        .message-form {
            display: flex;
            margin-top: 20px;
        }

        .message-input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .message-submit {
            padding: 10px 20px;
            margin-left: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <h1>Chat Page</h1>
        <div id="connectionStatus"></div>
        <ul class="message-list" id="messages">
            <!-- Display received messages here -->
        </ul>

        <form class="message-form" id="messageForm">
            <input type="text" class="message-input" id="messageInput" placeholder="Type your message here">
            <button type="submit" class="message-submit">Send</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    

        // Initialize Echo
        const options = {
            broadcaster: 'pusher',
            key: "{{ env('PUSHER_APP_KEY') }}",
            cluster: "{{ env('PUSHER_APP_CLUSTER') }}",
            encrypted: true,
        };

        window.Echo = new Echo({
            ...options,
            // Initialize the Pusher client
            client: new Pusher(options.key, options),
        });
        // Function to update the connection status
    function updateConnectionStatus(status) {
        const connectionStatusElement = document.getElementById('connectionStatus');
        connectionStatusElement.innerHTML = `Connection Status: ${status}`;
    }

    // Check and update the connection status initially
    updateConnectionStatus(window.Echo.connector.pusher.connection.state);

    // Listen for connection state changes
    window.Echo.connector.pusher.connection.bind('state_change', (states) => {
        // Update the connection status whenever the state changes
        updateConnectionStatus(states.current);
        console.log(states.current);
    });

        // Listen for messages on the 'chat' channel
        const channel = window.Echo.private('chat');

        channel.listen('.message.sent', (message) => {
            // Handle the received message and append it to the #messages ul
            const messagesList = document.getElementById('messages');
            const messageItem = document.createElement('li');
            messageItem.className = 'message-item';
            messageItem.innerHTML = `<span class="user">${message.user}</span>: ${message.content}`;
            messagesList.appendChild(messageItem);
        });

        // Submit message form
        document.getElementById('messageForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const messageInput = document.getElementById('messageInput');
            const message = messageInput.value;

            // Send the message to the server using an AJAX request
            axios.post('/send-message', { message: message })
                .then((response) => {
                    // Clear the input field after successful submission
                    messageInput.value = '';
                })
                .catch((error) => {
                    console.error(error);
                });
        });
    </script>
</body>
</html>
