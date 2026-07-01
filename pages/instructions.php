<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Interview instructions and guidelines for AI mock interview">
    <meta name="author" content="Digi Academy">
    <meta name="theme-color" content="#1147E9">
    
    <title>DADE - Interview Instructions</title>
    
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
                        <a href="school-selection.php" class="btn btn-back" aria-label="Go back to course selection">
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

        <!-- Page Content -->
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <!-- Instructions Column -->
                    <div class="col-sm-7">
                        <div class="dade-card-instructions">
                            <h1 class="page-title">Interview Instructions</h1>
                            <p class="page-subtitle">Set up your device, upload your documents, and begin when you are ready.</p>
                            
                            <div class="instructions-section">
                                <h3>Before You Start</h3>
                                <ul class="instructions-list">
                                    <li>Ensure a stable internet connection</li>
                                    <li>Use a laptop or desktop for the best experience</li>
                                </ul>
                            </div>
                            
                            <div class="instructions-section">
                                <h3>Camera & Microphone</h3>
                                <ul class="instructions-list">
                                    <li>Keep your camera ON throughout the interview</li>
                                    <li>Allow microphone access when prompted</li>
                                    <li>Sit in a well-lit environment</li>
                                    <li>Make sure your face is clearly visible</li>
                                </ul>
                            </div>
                            
                            <div class="instructions-section">
                                <h3>During the Interview</h3>
                                <ul class="instructions-list">
                                    <li>Speak clearly and confidently</li>
                                    <li>Maintain eye contact with the camera</li>
                                    <li>Avoid looking away frequently</li>
                                    <li>Answer naturally without rushing</li>
                                    <li>You can answer in both English and Hindi</li>
                                    <li>Avoid background noise and interruptions</li>
                                </ul>
                            </div>
                            
                            <div class="instructions-section">
                                <h3>Your Performance Will Be Evaluated On:</h3>
                                <div class="evaluation-grid">
                                    <div class="row">
                                        <div class="col-sm-6"><p class="evaluation-item">Communication Skills</p></div>
                                        <div class="col-sm-6"><p class="evaluation-item">Confidence Level</p></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6"><p class="evaluation-item">Facial Expressions</p></div>
                                        <div class="col-sm-6"><p class="evaluation-item">Answer Relevance</p></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6"><p class="evaluation-item">Technical Knowledge</p></div>
                                        <div class="col-sm-6"><p class="evaluation-item">Eye Contact</p></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6"><p class="evaluation-item">Body Language</p></div>
                                        <div class="col-sm-6"><p class="evaluation-item">Fluency & Clarity</p></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="instructions-section important-notes">
                                <h3>Important Notes</h3>
                                <ul class="instructions-list">
                                    <li><strong>Do not refresh or close the browser during the interview</strong></li>
                                    <li><strong>Make sure camera and microphone permissions are enabled</strong></li>
                                    <li><strong>The interview will be recorded and analyzed for evaluation purposes</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Upload Column -->
                    <div class="col-sm-5">
                        <div class="dade-card-upload">
                            <h2 class="page-title">AI Tool For Mock Interview</h2>
                            <p class="upload-subtitle">Upload your resume and job description to personalize the interview flow.</p>
                            
                            <form action="interview.php" method="POST" enctype="multipart/form-data" class="upload-form">
                                <div class="form-group">
                                    <label for="resume" class="form-label">Upload Resume</label>
                                    <input 
                                        type="file" 
                                        id="resume" 
                                        name="resume" 
                                        class="dade-input-sm" 
                                        accept=".pdf,.doc,.docx"
                                        required
                                        aria-required="true"
                                    >
                                </div>
                                
                                <div class="form-group">
                                    <label for="job-description" class="form-label">Upload Job Description</label>
                                    <input 
                                        type="file" 
                                        id="job-description" 
                                        name="job_description" 
                                        class="dade-input-sm" 
                                        accept=".pdf,.doc,.docx"
                                        required
                                        aria-required="true"
                                    >
                                </div>
                                
                                <div class="form-group consent-group">
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="consent-instructions" name="consent_instructions" required>
                                        <label for="consent-instructions">I have read and understood all interview instructions</label>
                                    </div>
                                    
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="consent-camera" name="consent_camera" required>
                                        <label for="consent-camera">I allow camera and microphone access for interview evaluation</label>
                                    </div>
                                </div>
                                
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-start-interview">
                                        Start Interview
                                    </button>
                                </div>
                            </form>
                        </div>
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
                <a href="results.php">Results</a>
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
        // Form validation
        document.querySelector('.upload-form').addEventListener('submit', function(e) {
            const resume = document.getElementById('resume').value;
            const jobDescription = document.getElementById('job-description').value;
            const consentInstructions = document.getElementById('consent-instructions').checked;
            const consentCamera = document.getElementById('consent-camera').checked;
            
            if (!resume || !jobDescription) {
                alert('Please upload both resume and job description');
                e.preventDefault();
                return;
            }
            
            if (!consentInstructions || !consentCamera) {
                alert('Please accept all consent checkboxes');
                e.preventDefault();
                return;
            }
            
            // Form will submit to interview.php
        });
    </script>
</body>
</html>
