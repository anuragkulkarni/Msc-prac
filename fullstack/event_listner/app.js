// multiListeners.js

const EventEmitter = require('events');

// Create an instance of EventEmitter
const emitter = new EventEmitter();

// First listener for 'greet' event
emitter.on('greet', () => {
  console.log('Hello! This is the first listener.');
});

// Second listener for 'greet' event
emitter.on('greet', () => {
  console.log('Welcome! This is the second listener.');
});

// Emit the 'greet' event
emitter.emit('greet');
