const Result = require('../models/Result');
const Interview = require('../models/Interview');

// @desc    Get result by interview ID
// @route   GET /api/results/:interviewId
// @access  Private
exports.getResult = async (req, res) => {
  try {
    const result = await Result.findOne({ interviewId: req.params.interviewId })
      .populate('userId', 'name studentId');

    if (!result) {
      return res.status(404).json({
        success: false,
        message: 'Result not found'
      });
    }

    // Check if user owns this result
    if (result.userId._id.toString() !== req.user.id) {
      return res.status(403).json({
        success: false,
        message: 'Not authorized to access this result'
      });
    }

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

// @desc    Get all results for user
// @route   GET /api/results
// @access  Private
exports.getMyResults = async (req, res) => {
  try {
    const results = await Result.find({ userId: req.user.id })
      .populate('interviewId', 'course school startedAt completedAt')
      .sort({ completedAt: -1 });

    res.status(200).json({
      success: true,
      count: results.length,
      results
    });
  } catch (error) {
    res.status(500).json({
      success: false,
      message: error.message
    });
  }
};

// @desc    Get result statistics
// @route   GET /api/results/stats
// @access  Private
exports.getStats = async (req, res) => {
  try {
    const results = await Result.find({ userId: req.user.id });

    if (results.length === 0) {
      return res.status(200).json({
        success: true,
        stats: {
          totalInterviews: 0,
          averageScore: 0,
          bestScore: 0,
          latestResult: null
        }
      });
    }

    const scores = results.map(r => r.overallScore);
    const averageScore = Math.round(scores.reduce((a, b) => a + b, 0) / scores.length);
    const bestScore = Math.max(...scores);
    const latestResult = results[0];

    res.status(200).json({
      success: true,
      stats: {
        totalInterviews: results.length,
        averageScore,
        bestScore,
        latestResult
      }
    });
  } catch (error) {
    res.status(500).json({
      success: false,
      message: error.message
    });
  }
};