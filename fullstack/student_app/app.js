const express = require('express');
const bodyParser = require('body-parser');
const { MongoClient } = require('mongodb');
const app = express();

app.use(bodyParser.urlencoded({ extended: true }));

let db;
MongoClient.connect('mongodb://localhost:27017', { useUnifiedTopology: true })
  .then(client => {
    db = client.db('studentDB');
    app.listen(3000, () => console.log('Server started on http://localhost:3000'));
  })
  .catch(err => console.error(err));

// 📍 Home page with form and "View Students" button
app.get('/', (req, res) => {
  res.send(`
    <h2>Student Form</h2>
    <form action="/add" method="POST">
      <input name="Rno" placeholder="Roll No" required /><br><br>
      <input name="Sname" placeholder="Name" required /><br><br>
      <input name="Percentage" placeholder="Percentage" required /><br><br>
      <button type="submit">Add Student</button>
    </form>

    <br><hr><br>
    <form action="/students" method="GET">
      <button type="submit">View Students</button>
    </form>
  `);
});

// 📍 Add student
app.post('/add', async (req, res) => {
  const { Rno, Sname, Percentage } = req.body;
  await db.collection('students').insertOne({
    Rno: parseInt(Rno),
    Sname,
    Percentage: parseFloat(Percentage),
  });
  res.redirect('/');
});

// 📍 Show all students with update/delete
app.get('/students', async (req, res) => {
  const students = await db.collection('students').find().toArray();

  let html = `
    <h2>Student Records</h2>
    <table border="1" cellpadding="10">
      <tr>
        <th>Rno</th>
        <th>Name</th>
        <th>Percentage</th>
        <th>Actions</th>
      </tr>
  `;

  students.forEach(s => {
    html += `
      <tr>
        <td>${s.Rno}</td>
        <td>${s.Sname}</td>
        <td>${s.Percentage}</td>
        <td>
          <form action="/delete/${s.Rno}" method="POST" style="display:inline;">
            <button type="submit">Delete</button>
          </form>
          <form action="/update/${s.Rno}" method="GET" style="display:inline;">
            <button type="submit">Update</button>
          </form>
        </td>
      </tr>
    `;
  });

  html += '</table><br><a href="/">Back</a>';
  res.send(html);
});

// 📍 Delete student
app.post('/delete/:rno', async (req, res) => {
  await db.collection('students').deleteOne({ Rno: parseInt(req.params.rno) });
  res.redirect('/students');
});

// 📍 Get update form
app.get('/update/:rno', async (req, res) => {
  const student = await db.collection('students').findOne({ Rno: parseInt(req.params.rno) });

  if (!student) return res.send('Student not found');

  res.send(`
    <h2>Update Student</h2>
    <form action="/update/${student.Rno}" method="POST">
      Roll No: <input name="Rno" value="${student.Rno}" readonly /><br><br>
      Name: <input name="Sname" value="${student.Sname}" required /><br><br>
      Percentage: <input name="Percentage" value="${student.Percentage}" required /><br><br>
      <button type="submit">Update</button>
    </form>
    <br><a href="/students">Back to Students</a>
  `);
});

// 📍 Post updated data
app.post('/update/:rno', async (req, res) => {
  const rno = parseInt(req.params.rno);
  const { Sname, Percentage } = req.body;

  await db.collection('students').updateOne(
    { Rno: rno },
    { $set: { Sname, Percentage: parseFloat(Percentage) } }
  );

  res.redirect('/students');
});
