# Student Management API

A backend application built with Node.js, Express.js, and MongoDB. This application allows users to manage student records through Create, Read, Update, and Delete operations.

## Installation & Setup

1. **clone the repository**    ```bash
    git clone https://github.com/wyatt4543/McDonnell_INF653

2. **install dependencies**
    ```bash
    npm install

3. **configure environment variables**
    Create a .env file in the root directory and add your credentials:
    ```bash
    PORT=5000
    MONGO_URI=mongodb+srv://<username>:<password>@cluster.mongodb.net/studentDB
    ```

4. **run the application**
    ```bash
    npx nodemon server.js

## API Endpoints
Method	Endpoint	Description
GET	/students	Retrieve all student records
GET	/students/:id	Retrieve a single student by ID
POST	/students	Create a new student record
PUT	/students/:id	Update an existing student
DELETE	/students/:id	Delete a student record