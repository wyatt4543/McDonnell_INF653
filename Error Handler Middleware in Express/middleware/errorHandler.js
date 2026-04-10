// middleware/errorHandler.js
const { format } = require('date-fns');
const { v4: uuidv4 } = require('uuid');
const fs = require('fs');
const path = require('path');

const errorHandler = async (err, req, res, next) => {
    const logId = uuidv4();
    const timestamp = format(new Date(), 'yyyy-MM-dd HH:mm:ss');

    // Construct the error log entry: ID, Timestamp, Name, Message
    const logEntry = `${logId} \t [${timestamp}] \t ${err.name}: ${err.message} \t ${req.method} ${req.url}\n`;

    try {
        // Check if logs directory exists, if not, create it
        const logsPath = path.join(__dirname, '..', 'logs');
        if (!fs.existsSync(logsPath)) {
            fs.mkdirSync(logsPath);
        }

        // Append the error to errorLog.txt
        await fs.promises.appendFile(path.join(logsPath, 'errorLog.txt'), logEntry);
    } catch (logErr) {
        console.error('Failed to write to error log:', logErr);
    }

    // Print error stack to console for the developer
    console.error(err.stack);

    // Respond to the client with a 500 status and the error message
    res.status(500).send(err.message);
};

module.exports = errorHandler;