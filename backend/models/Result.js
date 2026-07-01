const mongoose = require('mongoose');

const resultSchema = mongoose.Schema({
  interviewId: {
    type: mongoose.Schema.Types.ObjectId,
    ref: 'Interview',
    required: true
  },
  userId: {
    type: mongoose.Schema.Types.ObjectId,
    ref: 'User',
    required: true
  },
  overallScore: {
    type: Number,
    required: true,
    min: 0,
    max: 100
  },
  communicationSkills: {
    type: Number,
    min: 0,
    max: 100
  },
  technicalKnowledge: {
    type: Number,
    min: 0,
    max: 100
  },
  confidenceLevel: {
    type: Number,
    min: 0,
    max: 100
  },
  eyeContactScore: {
    type: Number,
    min: 0,
    max: 100
  },
  feedback: {
    strengths: [String],
    improvements: [String]
  },
  completedAt: {
    type: Date,
    default: Date.now
  }
});

module.exports = mongoose.model('Result', resultSchema);