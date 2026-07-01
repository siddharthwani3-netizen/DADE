<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DADE AI Mock Interview Platform - Practice interviews with AI-powered feedback">
    <meta name="keywords" content="AI interview, mock interview, interview practice, AI feedback">
    <meta name="author" content="Digi Academy">
    <meta name="theme-color" content="#1147E9">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="assets/images/digi-logo.svg">
    <link rel="apple-touch-icon" href="assets/images/digi-logo.svg">
    
    <title>DADE - AI Mock Interview Platform | Login</title>
    
    <!-- External CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/dade.css">
</head>
<body>
    <main>
        <div class="login-container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="center-content">
                        <img src="assets/images/digi-logo.svg" class="dade-logo-small" alt="Digi Academy Logo">
                    </div>
                    
                    <div class="dade-card-login center-content">
                        <h1 class="page-title">AI Tool For Mock Interview</h1>
                        <p class="page-subtitle">Practice with a focused, AI-guided interview experience built for students.</p>
                        
                        <form action="pages/login.php" method="POST" class="login-form" novalidate>
                            <div class="form-group">
                                <label for="student-id" class="form-label">Student ID</label>
                                <input 
                                    type="text" 
                                    id="student-id" 
                                    name="student_id" 
                                    class="dade-input" 
                                    placeholder="Student ID"
                                    required
                                    aria-required="true"
                                >
                            </div>
                            
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input 
                                    type="password" 
                                    id="password" 
                                    name="password" 
                                    class="dade-input" 
                                    placeholder="Password"
                                    required
                                    aria-required="true"
                                >
                            </div>
                            
                            <div class="form-actions">
                                <button type="submit" class="btn btn-submit">
                                    Submit Now
                                </button>
                            </div>
                            
                            <div class="forgot-password">
                                <a href="#forgot" class="dade-forgot-password">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="site-footer">
        <div class="container">
            <div class="footer-brand">
                <img src="assets/images/digi-logo.svg" alt="Digi Academy Logo">
                <span>AI Mock Interview Platform</span>
            </div>
            <nav class="footer-links" aria-label="Footer navigation">
                <a href="pages/school-selection.php">Courses</a>
                <a href="pages/instructions.php">Instructions</a>
                <a href="pages/results.php">Results</a>
            </nav>
            <div class="footer-social" aria-label="Social links">
                <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </footer>
    
    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="assets/js/dade.js"></script>
    
    <script>
        // Form validation
        document.querySelector('.login-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const studentId = document.getElementById('student-id').value.trim();
            const password = document.getElementById('password').value.trim();
            
            if (!studentId || !password) {
                alert('Please fill in all fields');
                return;
            }
            
            // Redirect to school selection
            window.location.href = 'pages/school-selection.php';
        });
    </script>
</body>
</html>
