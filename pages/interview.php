<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AI Mock Interview in progress">
    <meta name="author" content="Digi Academy">
    <meta name="theme-color" content="#1147E9">
    
    <title>DADE - Interview in Progress</title>
    
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
                        <a href="instructions.php" class="btn btn-back" aria-label="Go back to interview instructions">
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

        <!-- Interview Content -->
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <!-- AI Interviewer Panel -->
                    <div class="col-sm-6">
                        <div class="dade-card interviewer-panel">
                            <div class="panel-header">
                                <h3><i class="fa-solid fa-robot"></i> AI Interviewer</h3>
                                <span class="status-badge active">Asking Question</span>
                            </div>
                            <div class="panel-content">
                                <img src="../assets/images/working_office.jpeg" class="interview-image" alt="AI Interviewer Interface">
                                <div class="question-box">
                                    <h4>Current Question:</h4>
                                    <p class="question-text" id="currentQuestion">
                                        Tell me about yourself and your experience with digital marketing.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Candidate Camera Panel -->
                    <div class="col-sm-6">
                        <div class="dade-card candidate-panel">
                            <div class="panel-header">
                                <h3><i class="fa-solid fa-video"></i> Your Camera</h3>
                                <span class="status-badge recording">
                                    <span class="recording-dot"></span> Recording
                                </span>
                            </div>
                            <div class="panel-content">
                                <img src="../assets/images/black.jpeg" class="candidate-image" alt="Candidate Camera Feed">
                                <div class="camera-controls">
                                    <button class="btn btn-camera-control active" id="toggleCamera" aria-pressed="true">
                                        <i class="fa-solid fa-camera"></i> Camera On
                                    </button>
                                    <button class="btn btn-camera-control active" id="toggleMic" aria-pressed="true">
                                        <i class="fa-solid fa-microphone"></i> Mic On
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Interview Controls -->
                <div class="interview-controls">
                    <div class="center-content">
                        <button type="button" class="btn btn-next-question" id="nextQuestion">
                            Next Question
                        </button>
                        <a href="results.php" class="btn btn-generate-report" id="generateReport">
                            Generate Report
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
        // Interview functionality
        let questionCount = 1;
        const questions = [
            "Tell me about yourself and your experience with digital marketing.",
            "What strategies would you use to improve our online presence?",
            "Describe a successful marketing campaign you led.",
            "How do you measure the success of a marketing initiative?",
            "What emerging trends in digital marketing excite you most?"
        ];

        // Next Question functionality
        document.getElementById('nextQuestion').addEventListener('click', function() {
            if (questionCount < questions.length) {
                questionCount++;
                document.getElementById('currentQuestion').textContent = questions[questionCount - 1];
                
                // Add fade animation
                const questionBox = document.querySelector('.question-text');
                questionBox.style.opacity = '0';
                setTimeout(() => {
                    questionBox.style.transition = 'opacity 0.5s ease';
                    questionBox.style.opacity = '1';
                }, 100);
            } else {
                alert('You have completed all questions! Click "Generate Report" to see your results.');
            }
        });

        // Camera toggle
        document.getElementById('toggleCamera').addEventListener('click', function() {
            this.classList.toggle('active');
            const icon = this.querySelector('i');
            if (this.classList.contains('active')) {
                this.innerHTML = '<i class="fa-solid fa-camera"></i> Camera On';
                this.setAttribute('aria-pressed', 'true');
            } else {
                this.innerHTML = '<i class="fa-solid fa-camera-slash"></i> Camera Off';
                this.setAttribute('aria-pressed', 'false');
            }
        });

        // Microphone toggle
        document.getElementById('toggleMic').addEventListener('click', function() {
            this.classList.toggle('active');
            const icon = this.querySelector('i');
            if (this.classList.contains('active')) {
                this.innerHTML = '<i class="fa-solid fa-microphone"></i> Mic On';
                this.setAttribute('aria-pressed', 'true');
            } else {
                this.innerHTML = '<i class="fa-solid fa-microphone-slash"></i> Mic Off';
                this.setAttribute('aria-pressed', 'false');
            }
        });

        let allowNavigation = false;
        document.getElementById('generateReport').addEventListener('click', function() {
            allowNavigation = true;
        });

        // Prevent accidental page leave during interview
        window.addEventListener('beforeunload', function(e) {
            if (allowNavigation) {
                return;
            }
            e.preventDefault();
            e.returnValue = 'Your interview is in progress. Are you sure you want to leave?';
            return e.returnValue;
        });
    </script>
</body>
</html>
