const express = require("express"); 
const http = require("http"); 
const { Server } = require("socket.io"); 
const app = express(); 
const server = http.createServer(app); 
const io = new Server(server); 
app.use(express.static("public")); // Serve frontend files 
io.on("connection", (socket) => { 
console.log("User connected:", socket.id); 
socket.on("chat message", (data) => { 
io.emit("chat message", data); // Broadcast message to all clients 
}); 
socket.on("disconnect", () => { 
console.log("User disconnected:", socket.id); 
}); 
}); 
server.listen(3000, () => { 
console.log("Server running at http://localhost:3000"); 
});