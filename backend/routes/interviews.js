const express = require('express');
const router = express.Router();
const {
  createInterview,
  getInterview,
  getMyInterviews,
  addAnswer,
  completeInterview
} = require('../controllers/interviewController');
const { protect } = require('../middleware/auth');

// @route   POST /api/interviews
// @desc    Create new interview
// @access  Private
router.post('/', protect, createInterview);

// @route   GET /api/interviews
// @desc    Get all interviews for user
// @access  Private
router.get('/', protect, getMyInterviews);

// @route   GET /api/interviews/:id
// @desc    Get interview by ID
// @access  Private
router.get('/:id', protect, getInterview);

// @route   PUT /api/interviews/:id/answer
// @desc    Add answer to interview
// @access  Private
router.put('/:id/answer', protect, addAnswer);

// @route   POST /api/interviews/:id/complete
// @desc    Complete interview and generate result
// @access  Private
router.post('/:id/complete', protect, completeInterview);

module.exports = router;