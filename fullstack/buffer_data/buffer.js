// bufferApp.js

// Create two buffers
const buffer1 = Buffer.from('Hello ');
const buffer2 = Buffer.from('World!');

// a. concat
const concatenated = Buffer.concat([buffer1, buffer2]);
console.log('a. Concatenated Buffer:', concatenated.toString());  // Output: Hello World!

// b. compare
const comparison = Buffer.compare(buffer1, buffer2);
if (comparison < 0) {
  console.log('b. Buffer1 comes before Buffer2');
} else if (comparison > 0) {
  console.log('b. Buffer1 comes after Buffer2');
} else {
  console.log('b. Buffer1 is equal to Buffer2');
}

// c. copy
const buffer3 = Buffer.alloc(buffer1.length); // Allocate empty buffer of same size
buffer1.copy(buffer3);
console.log('c. Copied Buffer:', buffer3.toString());  // Output: Hello 
