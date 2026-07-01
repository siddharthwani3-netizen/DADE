<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="View your AI mock interview results and performance feedback">
    <meta name="author" content="Digi Academy">
    <meta name="theme-color" content="#1147E9">
    
    <title>DADE - Interview Results</title>
    
    <!-- External CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/dade.css">
</head>
<body>
    <main>
        <!-- Navigation Header -->
        <header class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="interview.php" class="btn btn-back" aria-label="Go back to interview">
                            <i class="fa-solid fa-rotate-left"></i><span>Back</span>
                        </a>
                    </div>
                    <div class="col-sm-8 center-content">
                        <img src="../assets/images/digi-logo.svg" class="dade-logo" alt="Digi Academy Logo">
                    </div>
                    <div class="col-sm-2">
                        <a href="../index.php" class="btn btn-logout" aria-label="Logout and return to login">
                            <span>Logout</span><i class="fa-solid fa-arrow-right-from-bracket"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Results Content -->
        <div class="page-content">
            <div class="center-content">
                <h1 class="results-title">
                    Here's what you <br>
                    <span class="highlight">achieved</span> in your interview
                </h1>
            </div>

            <div class="container">
                <div class="results-container">
                    <!-- Overall Score -->
                    <div class="score-card">
                        <div class="row">
                            <div class="col-sm-3 center-content">
                            <i class="fa-solid fa-trophy icon-badge icon-badge-gold" aria-hidden="true"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4><strong>Overall Interview Score</strong></h4>
                                <div class="score-bar">
                                    <div class="score-fill" style="width: 85%;"></div>
                                </div>
                                <p class="score-value">85/100</p>
                            </div>
                        </div>
                    </div>

                    <!-- Communication Skills -->
                    <div class="score-card">
                        <div class="row">
                            <div class="col-sm-3 center-content">
                            <i class="fa-solid fa-microphone-lines icon-badge icon-badge-teal" aria-hidden="true"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4><strong>Communication Skills</strong></h4>
                                <div class="score-bar">
                                    <div class="score-fill" style="width: 88%;"></div>
                                </div>
                                <p class="score-value">88/100</p>
                            </div>
                        </div>
                    </div>

                    <!-- Technical Knowledge -->
                    <div class="score-card">
                        <div class="row">
                            <div class="col-sm-3 center-content">
                            <i class="fa-solid fa-laptop icon-badge icon-badge-teal" aria-hidden="true"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4><strong>Technical Knowledge</strong></h4>
                                <div class="score-bar">
                                    <div class="score-fill" style="width: 82%;"></div>
                                </div>
                                <p class="score-value">82/100</p>
                            </div>
                        </div>
                    </div>

                    <!-- Confidence Level -->
                    <div class="score-card">
                        <div class="row">
                            <div class="col-sm-3 center-content">
                            <i class="fa-regular fa-face-smile icon-badge icon-badge-yellow" aria-hidden="true"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4><strong>Confidence Level</strong></h4>
                                <div class="score-bar">
                                    <div class="score-fill" style="width: 90%;"></div>
                                </div>
                                <p class="score-value">90/100</p>
                            </div>
                        </div>
                    </div>

                    <!-- Eye Contact Score -->
                    <div class="score-card">
                        <div class="row">
                            <div class="col-sm-3 center-content">
                            <i class="fa-solid fa-eye icon-badge icon-badge-gray" aria-hidden="true"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4><strong>Eye Contact Score</strong></h4>
                                <div class="score-bar">
                                    <div class="score-fill" style="width: 78%;"></div>
                                </div>
                                <p class="score-value">78/100</p>
                            </div>
                        </div>
                    </div>

                    <!-- AI Feedback -->
                    <div class="score-card">
                        <div class="row">
                            <div class="col-sm-3 center-content">
                            <i class="fa-regular fa-lightbulb icon-badge icon-badge-light" aria-hidden="true"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4><strong>AI Feedback</strong></h4>
                                <div class="feedback-content">
                                    <p><strong>Strengths:</strong></p>
                                    <ul>
                                        <li>Excellent communication skills with clear articulation</li>
                                        <li>Strong technical knowledge demonstrated</li>
                                        <li>Confident demeanor throughout the interview</li>
                                    </ul>
                                    <p><strong>Areas for Improvement:</strong></p>
                                    <ul>
                                        <li>Work on maintaining consistent eye contact with the camera</li>
                                        <li>Practice more complex technical scenarios</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="results-actions">
                    <div class="center-content">
                        <a href="interview.php" class="btn btn-back">
                            <i class="fa-solid fa-rotate-left"></i><span>Retake Interview</span>
                        </a>
                        <a href="../index.php" class="btn btn-next">
                            <span>Finish</span><i class="fa-solid fa-check"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="site-footer">
        <div class="container">
            <div class="footer-brand">
                <img src="../assets/images/digi-logo.svg" alt="Digi Academy Logo">
                <span>AI Mock Interview Platform</span>
            </div>
            <nav class="footer-links" aria-label="Footer navigation">
                <a href="../index.php">Home</a>
                <a href="school-selection.php">Courses</a>
                <a href="instructions.php">Instructions</a>
            </nav>
            <div class="footer-social" aria-label="Social links">
                <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="../assets/js/dade.js"></script>
    
    <script>
        // Animate score bars on page load
        document.addEventListener('DOMContentLoaded', function() {
            const scoreFills = document.querySelectorAll('.score-fill');
            scoreFills.forEach(fill => {
                const width = fill.style.width;
                fill.style.width = '0';
                setTimeout(() => {
                    fill.style.transition = 'width 1.5s ease-out';
                    fill.style.width = width;
                }, 300);
            });
        });
    </script>
</body>
</html>
