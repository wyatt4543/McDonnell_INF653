require('dotenv').config();
const express = require('express');
const connectDB = require('./config/dbConfig');
const studentRoutes = require('./routes/studentRoutes');

const app = express();

// Middleware
app.use(express.json());

// Connect Database
connectDB();

// Routes
app.use('/students', studentRoutes);

const PORT = process.env.PORT || 5000;
app.listen(PORT, () => console.log(`Server running on port ${PORT}`));