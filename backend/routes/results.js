const express = require('express');
const router = express.Router();
const { getResult, getMyResults, getStats } = require('../controllers/resultController');
const { protect } = require('../middleware/auth');

// @route   GET /api/results
// @desc    Get all results for user
// @access  Private
router.get('/', protect, getMyResults);

// @route   GET /api/results/stats
// @desc    Get result statistics
// @access  Private
router.get('/stats', protect, getStats);

// @route   GET /api/results/:interviewId
// @desc    Get result by interview ID
// @access  Private
router.get('/:interviewId', protect, getResult);

module.exports = router;