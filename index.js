// Function to load messages from local storage
function loadMessages() {
    const messages = JSON.parse(localStorage.getItem('messages')) || [];
    const chatBox = document.getElementById('chat-box');
    chatBox.innerHTML = '';
    messages.forEach(message => {
        chatBox.appendChild(createMessageElement(message));
    });
}

// Function to save messages to local storage
function saveMessages(messages) {
    localStorage.setItem('messages', JSON.stringify(messages));
}

// Function to create a message element
function createMessageElement({ id, text, timestamp, editable }) {
    const messageElement = document.createElement('div');
    messageElement.classList.add('message');
    messageElement.dataset.id = id;

    const userImage = document.createElement('img');
    userImage.src = './images/avatar.jpg'; // Placeholder for user image
    userImage.classList.add('user-image');

    const messageText = document.createElement('div');
    messageText.classList.add('message-text');
    messageText.innerText = text;

    const timeElement = document.createElement('span');
    timeElement.classList.add('timestamp');
    timeElement.innerText = new Date(timestamp).toLocaleTimeString();

    const editButton = document.createElement('button');
    editButton.classList.add('edit-button');
    editButton.innerText = 'Edit';
    editButton.onclick = () => editMessage(id);

    const deleteButton = document.createElement('button');
    deleteButton.classList.add('delete-button');
    deleteButton.innerText = 'Delete';
    deleteButton.onclick = () => deleteMessage(id);

    messageElement.appendChild(userImage);
    messageElement.appendChild(messageText);
    messageElement.appendChild(timeElement);
    if (editable) {
        messageElement.appendChild(editButton);
    }
    messageElement.appendChild(deleteButton);

    return messageElement;
}

// Function to send a message
function sendMessage() {
    const chatInput = document.getElementById('chat-input');
    const text = chatInput.value.trim();
    if (!text) return;

    const messages = JSON.parse(localStorage.getItem('messages')) || [];
    const timestamp = Date.now();
    const id = `msg_${timestamp}`;
    const message = { id, text, timestamp, editable: true };

    messages.push(message);
    saveMessages(messages);
    loadMessages();

    chatInput.value = '';
}

// Function to delete a message
function deleteMessage(id) {
    let messages = JSON.parse(localStorage.getItem('messages')) || [];
    messages = messages.filter(message => message.id !== id);
    saveMessages(messages);
    loadMessages();
}

// Function to edit a message
function editMessage(id) {
    let messages = JSON.parse(localStorage.getItem('messages')) || [];
    const message = messages.find(message => message.id === id);
    if (message) {
        const newText = prompt('Edit your message:', message.text);
        if (newText !== null && newText.trim() !== '') {
            message.text = newText.trim();
            saveMessages(messages);
            loadMessages();
        }
    }
}

// Function to remove edit button after 10 minutes
function removeEditButtons() {
    let messages = JSON.parse(localStorage.getItem('messages')) || [];
    const currentTime = Date.now();
    messages.forEach(message => {
        if (currentTime - message.timestamp > 10 * 60 * 1000) {
            message.editable = false;
        }
    });
    saveMessages(messages);
    loadMessages();
}

// Initial load of messages and setting interval to remove edit buttons
document.addEventListener('DOMContentLoaded', () => {
    loadMessages();
    setInterval(removeEditButtons, 60 * 1000); // Check every minute
});
