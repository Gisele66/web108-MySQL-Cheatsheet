# Notes App - Node.js + Express + MongoDB

A simple notes application built with Node.js, Express, and MongoDB that stores notes and returns JSON responses.

## Features

- **GET** `/api/notes` - Retrieve all notes
- **GET** `/api/notes/:id` - Retrieve a specific note by ID
- **POST** `/api/notes` - Create a new note
- **GET** `/api/health` - Health check endpoint

## Setup

1. Install dependencies:
```bash
npm install
```

2. Ensure MongoDB is running on `localhost:27017`

3. Start the app:
```bash
npm start
```

Or for development with hot reload:
```bash
npm run dev
```

The app will run on port 5001.

## API Endpoints

### GET All Notes
```
GET /api/notes
```

**Response:**
```json
{
  "success": true,
  "data": [
    {
      "_id": "...",
      "title": "Note Title",
      "content": "Note content here",
      "createdAt": "2026-01-19T..."
    }
  ]
}
```

### GET Single Note
```
GET /api/notes/:id
```

**Response:**
```json
{
  "success": true,
  "data": {
    "_id": "...",
    "title": "Note Title",
    "content": "Note content here",
    "createdAt": "2026-01-19T..."
  }
}
```

### POST Create Note
```
POST /api/notes
```

**Request Body:**
```json
{
  "title": "My Note",
  "content": "This is my note content"
}
```

**Response:**
```json
{
  "success": true,
  "message": "Note created successfully",
  "data": {
    "_id": "...",
    "title": "My Note",
    "content": "This is my note content",
    "createdAt": "2026-01-19T..."
  }
}
```

## Database

MongoDB collection: `notesdb`

Note schema includes:
- `title` (String, required)
- `content` (String, required)
- `createdAt` (Date, auto-set)
