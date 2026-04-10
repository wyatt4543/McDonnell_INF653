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