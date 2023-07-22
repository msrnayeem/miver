<!DOCTYPE html>
<html>
<head>
    <title>User-to-User Chat</title>
</head>
<body>
    <h1>Welcome to the Chat</h1>

    <div id="chat">
        <!-- The chat messages will be displayed here -->
    </div>

    <form id="chat-form">
        <input type="text" id="message" placeholder="Type your message">
        <input type="hidden" id="to_user" value="2"> <!-- Replace '2' with the ID of the user you want to chat with -->
        <button type="submit">Send</button>
    </form>

    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        const pusher = new Pusher('{{ env("PUSHER_APP_KEY") }}', {
            cluster: '{{ env("PUSHER_APP_CLUSTER") }}',
            encrypted: true
        });

        const channel = pusher.subscribe('chat-channel');
        channel.bind('chat-event', function(data) {
            const chat = document.getElementById('chat');
            chat.innerHTML += `<p>User ${data.from_user}: ${data.message}</p>`;
        });

        const chatForm = document.getElementById('chat-form');
        chatForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const message = document.getElementById('message').value;
            const toUserId = document.getElementById('to_user').value;
            axios.post('/chat/send', { message: message, to_user: toUserId })
                .then(response => {
                    console.log(response.data);
                    document.getElementById('message').value = '';
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
</body>
</html>
