const User = require('../models/User');
const jwt = require('jsonwebtoken');
const bcrypt = require('bcryptjs');

// @desc    Register user
// @route   POST /api/auth/register
// @access  Public
exports.register = async (req, res) => {
  try {
    const { studentId, email, password, name, phone } = req.body;

    // Check if user exists
    const userExists = await User.findOne({ $or: [{ studentId }, { email }] });
    if (userExists) {
      return res.status(400).json({
        success: false,
        message: 'User already exists with this student ID or email'
      });
    }

    // Create user
    const user = await User.create({
      studentId,
      email,
      password,
      name,
      phone
    });

    // Create token
    const token = user.getSignedJwtToken();

    res.status(201).json({
      success: true,
      token,
      user: {
        id: user._id,
        studentId: user.studentId,
        email: user.email,
        name: user.name,
        phone: user.phone
      }
    });
  } catch (error) {
    res.status(500).json({
      success: false,
      message: error.message
    });
  }
};

// @desc    Login user
// @route   POST /api/auth/login
// @access  Public
exports.login = async (req, res) => {
  try {
    const { studentId, password } = req.body;

    // Validate input
    if (!studentId || !password) {
      return res.status(400).json({
        success: false,
        message: 'Please provide student ID and password'
      });
    }

    // Check for user
    const user = await User.findOne({ studentId }).select('+password');
    if (!user) {
      return res.status(401).json({
        success: false,
        message: 'Invalid credentials'
      });
    }

    // Check password
    const isPasswordCorrect = await user.comparePassword(password);
    if (!isPasswordCorrect) {
      return res.status(401).json({
        success: false,
        message: 'Invalid credentials'
      });
    }

    // Create token
    const token = user.getSignedJwtToken();

    res.status(200).json({
      success: true,
      token,
      user: {
        id: user._id,
        studentId: user.studentId,
        email: user.email,
        name: user.name,
        phone: user.phone,
        school: user.school,
        course: user.course
      }
    });
  } catch (error) {
    res.status(500).json({
      success: false,
      message: error.message
    });
  }
};

// @desc    Get current user
// @route   GET /api/auth/me
// @access  Private
exports.getMe = async (req, res) => {
  try {
    const user = await User.findById(req.user.id);
    
    res.status(200).json({
      success: true,
      user: {
        id: user._id,
        studentId: user.studentId,
        email: user.email,
        name: user.name,
        phone: user.phone,
        school: user.school,
        course: user.course
      }
    });
  } catch (error) {
    res.status(500).json({
      success: false,
      message: error.message
    });
  }
};