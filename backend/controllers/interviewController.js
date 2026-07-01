const Interview = require('../models/Interview');
const Result = require('../models/Result');

// @desc    Create new interview
// @route   POST /api/interviews
// @access  Private
exports.createInterview = async (req, res) => {
  try {
    const { course, school, resumeUrl, jobDescriptionUrl } = req.body;

    const interview = await Interview.create({
      userId: req.user.id,
      course,
      school,
      resumeUrl,
      jobDescriptionUrl
    });

    res.status(201).json({
      success: true,
      interview
    });
  } catch (error) {
    res.status(500).json({
      success: false,
      message: error.message
    });
  }
};

// @desc    Get interview by ID
// @route   GET /api/interviews/:id
// @access  Private
exports.getInterview = async (req, res) => {
  try {
    const interview = await Interview.findById(req.params.id).populate('userId', 'name studentId');

    if (!interview) {
      return res.status(404).json({
        success: false,
        message: 'Interview not found'
      });
    }

    // Check if user owns this interview
    if (interview.userId._id.toString() !== req.user.id) {
      return res.status(403).json({
        success: false,
        message: 'Not authorized to access this interview'
      });
    }

    res.status(200).json({
      success: true,
      interview
    });
  } catch (error) {
    res.status(500).json({
      success: false,
      message: error.message
    });
  }
};

// @desc    Get all interviews for user
// @route   GET /api/interviews
// @access  Private
exports.getMyInterviews = async (req, res) => {
  try {
    const interviews = await Interview.find({ userId: req.user.id })
      .sort({ createdAt: -1 });

    res.status(200).json({
      success: true,
      count: interviews.length,
      interviews
    });
  } catch (error) {
    res.status(500).json({
      success: false,
      message: error.message
    });
  }
};

// @desc    Update interview (add answer)
// @route   PUT /api/interviews/:id/answer
// @access  Private
exports.addAnswer = async (req, res) => {
  try {
    const { answer } = req.body;
    const interview = await Interview.findById(req.params.id);

    if (!interview) {
      return res.status(404).json({
        success: false,
        message: 'Interview not found'
      });
    }

    // Check if user owns this interview
    if (interview.userId.toString() !== req.user.id) {
      return res.status(403).json({
        success: false,
        message: 'Not authorized'
      });
    }

    // Add answer to current question
    if (interview.questions[interview.currentQuestionIndex]) {
      interview.questions[interview.currentQuestionIndex].answer = answer;
    }

    // Move to next question
    interview.currentQuestionIndex += 1;

    // Check if interview is complete
    if (interview.currentQuestionIndex >= interview.questions.length) {
      interview.status = 'completed';
      interview.completedAt = Date.now();
    }

    await interview.save();

    res.status(200).json({
      success: true,
      interview
    });
  } catch (error) {
    res.status(500).json({
      success: false,
      message: error.message
    });
  }
};

// @desc    Complete interview and generate result
// @route   POST /api/interviews/:id/complete
// @access  Private
exports.completeInterview = async (req, res) => {
  try {
    const interview = await Interview.findById(req.params.id);

    if (!interview) {
      return res.status(404).json({
        success: false,
        message: 'Interview not found'
      });
    }

    // Check if user owns this interview
    if (interview.userId.toString() !== req.user.id) {
      return res.status(403).json({
        success: false,
        message: 'Not authorized'
      });
    }

    // Update interview status
    interview.status = 'completed';
    interview.completedAt = Date.now();
    await interview.save();

    // Generate result (in real app, this would use AI analysis)
    const result = await Result.create({
      interviewId: interview._id,
      userId: req.user.id,
      overallScore: 85,
      communicationSkills: 88,
      technicalKnowledge: 82,
      confidenceLevel: 90,
      eyeContactScore: 78,
      feedback: {
        strengths: [
          'Excellent communication skills with clear articulation',
          'Strong technical knowledge demonstrated',
          'Confident demeanor throughout the interview'
        ],
        improvements: [
          'Work on maintaining consistent eye contact with the camera',
          'Practice more complex technical scenarios'
        ]
      }
    });

    res.status(200).json({
      success: true,
      result
    });
  } catch (error) {
    res.status(500).json({
      success: false,
      message: error.message
    });
  }
};