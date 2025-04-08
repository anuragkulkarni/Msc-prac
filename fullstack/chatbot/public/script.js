const socket = io(); 
const messageInput = document.getElementById("messageInput"); 
const sendBtn = document.getElementById("sendBtn"); 
const chatBody = document.getElementById("chatBody"); 
let currentUser = Math.random() > 0.5 ? "User A" : "User B"; // Start with a random user 
let lastUser = null; 
sendBtn.addEventListener("click", () => { 
const message = messageInput.value.trim(); 
if (message && currentUser !== lastUser) {  
socket.emit("chat message", { username: currentUser, message }); 
messageInput.value = ""; 
} 
}); 
socket.on("chat message", (data) => { 
if (data.username !== lastUser) { 
addMessage(data.username, data.message); 
lastUser = data.username; 
switchUser(); 
} 
}); 
function addMessage(user, message) { 
const messageDiv = document.createElement("div"); 
messageDiv.classList.add("message", user === "User A" ? "sent" : "received"); 
const messageContent = document.createElement("div"); 
messageContent.classList.add("message-content"); 
messageContent.innerHTML = `<strong>${user}:</strong> ${message}`; 
messageDiv.appendChild(messageContent); 
chatBody.appendChild(messageDiv); 
chatBody.scrollTop = chatBody.scrollHeight; 
} 
function switchUser() { 
currentUser = currentUser === "User A" ? "User B" : "User A"; 
} 
sendBtn.disabled = false; // Enable button for next user