const mongoose = require('mongoose');

const interviewSchema = mongoose.Schema({
  userId: {
    type: mongoose.Schema.Types.ObjectId,
    ref: 'User',
    required: true
  },
  course: {
    type: String,
    required: true
  },
  school: {
    type: String,
    required: true
  },
  resumeUrl: {
    type: String
  },
  jobDescriptionUrl: {
    type: String
  },
  status: {
    type: String,
    enum: ['in_progress', 'completed', 'abandoned'],
    default: 'in_progress'
  },
  questions: [{
    questionText: String,
    answer: String,
    timestamp: {
      type: Date,
      default: Date.now
    }
  }],
  currentQuestionIndex: {
    type: Number,
    default: 0
  },
  startedAt: {
    type: Date,
    default: Date.now
  },
  completedAt: {
    type: Date
  }
});

module.exports = mongoose.model('Interview', interviewSchema);