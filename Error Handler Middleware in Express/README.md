# Express Custom Error Handler

This project includes a custom error handler middleware that captures application errors, logs them to a file, and sends a clean response to the client without crashing the server.

## Features
- **Independent Logic**: The `errorHandler` does not depend on the `logger` middleware.
- **Detailed Logging**: Logs include a unique UUID, timestamp, error name, error message, and the request method/URL.
- **Graceful Failure**: The server remains running even after an error is thrown.

## Instructions to Test the Error Handler

1. **Install Dependencies**:
   Ensure you have `express`, `date-fns`, and `uuid` installed:
   ```bash
   npm install express date-fns uuid
2. **Trigger an Error**:
   Open your web browser and go to:
   http://localhost:3000/trigger-error

3. **Verify Results**:
   Client Response: Your browser should display the message: "This is a test error for the custom error handler!"
   Console Output: Check your terminal to see the full error stack trace.
   Log Files: Open the logs/errorLog.txt file. You should see a new entry with a timestamp and the error details. 