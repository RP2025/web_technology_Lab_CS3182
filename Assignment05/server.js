const express = require('express');
const app = express();
const port = 3000; // You can change the port as needed

app.get('/', (req, res) => {
  res.sendFile('/index.html'); // Serve the HTML file
});

app.listen(port, () => {
  console.log(`Server is running on http://localhost:${port}`);
});
