# DADE Backend API

Node.js/Express backend with MongoDB for DADE AI Mock Interview Platform.

## Quick Start

### Prerequisites
- Node.js (v14+)
- MongoDB (local or Atlas)
- npm

### Installation

```bash
cd backend
npm install
cp .env.example .env
# Edit .env with your settings
```

### Run

```bash
# Development
npm run dev

# Production
npm start
```

Server: http://localhost:5000

## API Endpoints

### Auth
- POST /api/auth/register
- POST /api/auth/login
- GET /api/auth/me

### Interviews
- POST /api/interviews
- GET /api/interviews
- GET /api/interviews/:id
- PUT /api/interviews/:id/answer
- POST /api/interviews/:id/complete

### Results
- GET /api/results
- GET /api/results/:interviewId
- GET /api/results/stats

### Health
- GET /api/health

## Environment Variables

```env
MONGODB_URI=mongodb+srv://<username>:<password>@<cluster-url>/dade_platform?appName=<app-name>
PORT=5000
JWT_SECRET=your_secret_key
```

## Tech Stack

- Express.js
- MongoDB/Mongoose
- JWT Authentication
- CORS enabled

---

Version 2.0 | Production Ready
